<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\usergroup;

class user_options
{
	function display_options()
	{
		global $stk_root_path, $phpEx, $template, $stk_lang, $db, $request;

		$settings_value = $request->variable('settings', array('' => ''), true);
		$groups = $request->variable('user_groups', array(0));
		$all_groups = $request->variable('all_groups', 0);
		$submit = $request->variable('sa', false);

		$user_settings = array(
			0 => 'viewimg',
			1 => 'viewflash',
			2 => 'viewsmilies',
			3 => 'viewsigs',
			4 => 'viewavatars',
			5 => 'viewcensors',
			6 => 'attachsig',
			7 => '',
			8 => 'bbcode',
			9 => 'smilies',
			10 => '',
			11 => '',
			12 => '',
			13 => '',
			14 => '',
			15 => 'sig_bbcode',
			16 => 'sig_smilies',
			17 => 'sig_links',
		);

		$sql = 'SELECT group_id, group_name
			FROM ' . GROUPS_TABLE;
		$result = $db->sql_query($sql);
		$s_options = '';
		while ($row = $db->sql_fetchrow($result))
		{
			$group_name = (!is_null($stk_lang->lang('G_' . $row['group_name'] . ''))) ? $stk_lang->lang('G_' . $row['group_name'] . '') : $row['group_name'];
			$s_options .= '<option value="' . $row['group_id'] . '">' . $group_name;
		}
		$db->sql_freeresult($result);
		$s_options .= '</option>';

		foreach ($user_settings as $bit => $settings)
		{
			if ($settings)
			{
				$template->assign_block_vars('settings', array(
					'SETTINGS'		=> $settings,
					'BIT'			=> $bit,
					'SETTINGS_NAME'	=> $stk_lang->lang($settings),
				));
			}
		}

		$template->assign_vars(array(
			'S_OPTIONS'			=> $s_options,
			'U_DISPLAY_ACTION'	=> append_sid($stk_root_path . 'index.' . $phpEx, array('c' => 'user_group', 't' => 'user_options')),
		));

		$template->set_filenames(array(
			'body' => 'tools/user_options.html',
		));

		if ($submit)
		{
			if (!sizeof($groups) || $all_groups)
			{
				$sql_where = '';
			}
			else
			{
				$sql_where = ' WHERE ' . $db->sql_in_set('group_id', $groups). '';
			}
			foreach ($settings_value as $bit => $settings)
			{
				if ($settings)
				{
					if ($settings == 1) // off
					{
						$sql = 'UPDATE '. USERS_TABLE . '
							SET user_options = (user_options & '. pow(2, $bit) . ') ^ user_options'
							. $sql_where;
					}
					else // on
					{
						$sql = 'UPDATE '. USERS_TABLE . '
							SET user_options = user_options | '. pow(2, $bit) . ''
							. $sql_where;
					}
					$db->sql_query($sql);
				}
			}

			meta_refresh(3, append_sid($stk_root_path . 'index.' . $phpEx, 'c=usergroup&amp;t=user_options'));
			trigger_error($stk_lang->lang('USER_OPTIONS_OK'));
		}

		page_header($stk_lang->lang('USER_OPTIONS'), false);
		page_footer();
	}
}
