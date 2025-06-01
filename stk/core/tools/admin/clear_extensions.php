<?php
/**
*
* @package Support Toolkit - Clear Extensions
* @version $Id$
* @copyright (c) 2014 Sheer
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace core\tools\admin;

class clear_extensions
{
	function run_tool(&$error)
	{
		global $cache, $db, $template, $request, $lang, $config;

		$uids = $request->variable('marked_name', array('', ''));

		if (empty($uids))
		{
			$error[] = 'NO_EXT_SELECTED';
			trigger_error($lang['NO_EXT_SELECTED'], E_USER_WARNING);
		}

		if (confirm_box(true) || (@phpversion() >= '7.0.0'))
		{
			$sql = 'SELECT ext_name FROM ' . EXT_TABLE . '
				WHERE ' . $db->sql_in_set('ext_name', $uids, false);
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$ext_name = explode('/', $row['ext_name']);
				$keyword = '*' . $ext_name[1] . '*';
				$sql = 'DELETE FROM ' . MIGRATIONS_TABLE . '
					WHERE migration_name ' . $db->sql_like_expression(str_replace('*', $db->get_any_char(), $keyword));
				$db->sql_query($sql);
			}
			$db->sql_freeresult($result);

			$sql = 'DELETE FROM ' . EXT_TABLE . '
				WHERE ' . $db->sql_in_set('ext_name', $uids, false);
			$db->sql_query($sql);
			if (empty($error))
			{
				// Purge the cache
				$cache->purge();
				trigger_error($lang['CLEAR_EXT_SUCCESS']);
			}
		}
		else
		{
			$hidden = build_hidden_fields(array('marked_name' => $uids));
			confirm_box(false, $lang['EXT_DELETE_CONFIRM'], $hidden, 'confirm_body.html', STK_DIR_NAME . '/index.' . PHP_EXT . '?c=admin&amp;t=clear_extensions&amp;submit=' . true);
		}
	}

	function display_options()
	{
		global $db, $template,$phpbb_admin_path, $lang, $cache, $request, $phpbb_extension_manager, $config, $user;
		$this->ext_manager = $phpbb_extension_manager;

		$user->add_lang('acp/extensions');
		$u_action = append_sid("" . STK_ROOT_PATH . "index." . PHP_EXT . "", 'c=admin&amp;t=clear_extensions');
		$off = $request->variable('off', false);
		$on = $request->variable('on', false);

		page_header($lang['CLEAR_EXTENSIONS']);

		if ($off)
		{
			$uids = $request->variable('marked_name', array('', ''));
			if (empty($uids))
			{
				$error[] = 'NO_EXT_SELECTED';
				trigger_error($lang['NO_EXT_SELECTED'], E_USER_WARNING);
			}
			if (confirm_box(true) || (@phpversion() >= '7.0.0'))
			{
				$sql = 'UPDATE ' . EXT_TABLE . '
					SET ext_active = 0
					WHERE ' . $db->sql_in_set('ext_name', $uids, false);
				$db->sql_query($sql);
				$cache->purge(); // Purge the cache
				trigger_error($lang['OFF_EXT_SUCCESS']);
			}
			else
			{
				$hidden = build_hidden_fields(array('marked_name' => $uids));
				confirm_box(false, $lang['EXT_OFF_CONFIRM'], $hidden, 'confirm_body.html', STK_DIR_NAME . '/index.' . PHP_EXT . '?c=admin&amp;t=clear_extensions&amp;off=' . true);
			}
		}

		if ($on)
		{
			$uids = request_var('marked_name', array('', ''));
			if (empty($uids))
			{
				$error[] = 'NO_EXT_SELECTED';
				trigger_error('NO_EXT_SELECTED', E_USER_WARNING);
			}

			$sql = 'UPDATE ' . EXT_TABLE . '
				SET ext_active = 1
				WHERE ' . $db->sql_in_set('ext_name', $uids, false);
			$db->sql_query($sql);
			$cache->purge(); // Purge the cache
			trigger_error($lang['ON_EXT_SUCCESS']);
		}

		$row_set = array();

		$sql = 'SELECT ext_name, ext_active
			FROM ' . EXT_TABLE . '
			ORDER BY ext_name';
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			$row_set[] = $row;
		}

		$db->sql_freeresult($result);

		$data = array();
		foreach ($row_set as $row)
		{
			$composer_check = check_json('ext/' . $row['ext_name'], 'composer');
			$dir_exit = file_exists(PHPBB_ROOT_PATH . 'ext/' . $row['ext_name']) ? true : false;

			$data = $row;

			$data = array(
				'ext_name' 				=> (string) $row['ext_name'],
				'ext_installed' 		=> 1,
				'ext_active' 			=> (bool) $row['ext_active'],
				'dir_exit' 				=> (bool) $dir_exit,
				'composer_message' 		=> (string) $composer_check['message'],
				'composer_error_type'	=> (int) $composer_check['error_type'],
				'display_name'			=> (string) '',
				'update'				=> (bool) false,
				'version_check'			=> (bool) false,
				'version'				=> (string) '',
				'current'				=> (string) '',
				'download'				=> (string) '',
				'announcement'			=> (string) '',
				'meta_error'			=> (string) '',
				'meta_error_msg'		=> (bool) false,
			);

			if ($composer_check['error_type'] == 0)
			{
				if ($row['ext_name'])
				{
					$md_manager = $this->ext_manager->create_extension_metadata_manager($row['ext_name']);

					try
					{
						$md_manager->get_metadata('all');
					}
					catch (stk_exception_interface $e)
					{
						$message = call_user_func_array(array($this->user, 'lang'), array_merge(array($e->getMessage()), $e->get_parameters()));
						trigger_error($message . adm_back_link($u_action), E_USER_WARNING);
					}
				}

				$meta = $md_manager->get_metadata('all');

				$updates_available = array('current' => '', 'download' => '', 'announcement' => '', 'eol' => null, 'security' => false);

				if (isset($meta['extra']['version-check']))
				{
					$data['version_check'] = true;
					$url_force = $phpbb_admin_path . 'index.php?i=acp_extensions&amp;sid='. $user->data['session_id'] . '&amp;action=details&amp;versioncheck_force=1&amp;ext_name=' . urlencode($md_manager->get_metadata('name'));

					try
					{
						$data['display_name'] = $md_manager->get_metadata('display-name');
						$data['version'] = $meta['version'];
						$updates_available = $this->ext_manager->version_check($md_manager, $request->variable('versioncheck_force', false), false, $config['extension_force_unstable'] ? 'unstable' : null);

						if (!empty($updates_available))
						{
							$data['update'] = true;
							$data['current'] = $updates_available['current'] ? $updates_available['current'] : '';
							$data['download'] = $updates_available['download'] ? $updates_available['download'] : '';
							$data['announcement'] = $updates_available['announcement'] ? $updates_available['announcement'] : '';
						}
					}
					catch (\RuntimeException $e)
					{
						$data['meta_error'] = true;
						$data['meta_error_msg'] = call_user_func_array(array($user, 'lang'), array_merge(array($e->getMessage()), $e->get_parameters()));
						$data['version_check'] = false;
					}
				}
				else
				{
					$data['display_name'] = $md_manager->get_metadata('display-name');
					$data['version'] = $meta['version'];
					$data['version_check'] = false;
				}
			}

			$template->assign_block_vars('list', array(
				'S_DIR_EXIT' 			=> ($data['dir_exit']),
				'S_UP_TO_DATE' 			=> ($data['update']),
				'S_VIEW_VERSIONS'		=> ($composer_check['error_type'] == 0),
				'S_META_ERROR'			=> $data['meta_error'],
				'S_COMPOSER_ERROR'		=> ($composer_check['error_type'] != 0),
				'S_NO_ANNOUNCEMENT'		=> !empty($data['announcement']) ? true : false,
				'S_NO_DOWNLOAD'			=> !empty($data['download']) ? true : false,
				'S_VERSION_CHECK'		=> $data['version_check'],

				'COMPOSER_MESSAGE'		=> $data['composer_message'],
				'EXT_NAME'				=> $data['ext_name'],
				'META_ERROR'			=> $data['meta_error_msg'],
				'EXT_DIR_PATH'			=> !empty($data['dir_exit']) ? PHPBB_REL_PATH . 'ext/' . $data['ext_name'] : '',
				'EXT_STATUS'			=> ($composer_check['error_type'] != 0) ? false : ($data['ext_active']),
				'DISPLAY_NAME'			=> !empty($data['display_name']) ? $data['display_name'] : $data['ext_name'],

				'U_ANNOUNCEMENT'		=> $data['announcement'],
				'U_DOWNLOAD'			=> $data['download'],
				'U_VERSIONCHECK_FORCE'	=> (isset($meta['extra']['version-check'])) ? $url_force : '',

				'VERSION'				=> $data['version'],
				'VERSION_CURRENT'		=> $data['current'],
			));
		}

		$template->assign_vars(array(
			'S_ACTION'		=> append_sid("" . STK_ROOT_PATH . "index." . PHP_EXT . "", 'c=admin&amp;t=clear_extensions'),
			'L_UP_TO_DATE'	=> sprintf($user->lang['UP_TO_DATE'], ''),
		));

		$template->set_filenames(array(
			'body' => 'tools/clear_extensions.html',
		));

		page_footer();
	}
}
