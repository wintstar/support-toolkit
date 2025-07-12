<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\usergroup;

class user_set_lang
{
	function display_options()
	{
		global $stk_root_path, $phpEx, $template, $stk_lang, $db, $request, $config;

		$groups = $request->variable('user_groups', array(0));
		$all_groups = $request->variable('all_groups', 0);
		$user_lang = $request->variable('user_lang', $config['default_lang']);
		$submit = $request->variable('sa', false);

		$sql = 'SELECT group_id, group_name
			FROM ' . GROUPS_TABLE;
		$result = $db->sql_query($sql);
		$s_options = '';
		while ($row = $db->sql_fetchrow($result))
		{
			$group_name = $stk_lang->is_set('G_' . $row['group_name'] . '') ? $stk_lang->lang('G_' . $row['group_name'] . '') : $row['group_name'];
			$s_options .= '<option value="' . $row['group_id'] . '">' . $group_name;
		}
		$db->sql_freeresult($result);
		$s_options .= '</option>';

		$template->assign_vars(array(
			'S_OPTIONS'			=> $s_options,
			'S_LANG_OPTIONS'	=> language_select($config['default_lang']),
			'U_DISPLAY_ACTION'	=> append_sid($stk_root_path . 'index.' . $phpEx, array('c' => 'user_group', 't' => 'user_set_lang')),
		));

		$template->set_filenames(array(
			'body' => 'tools/user_set_lang.html',
		));

		if ($submit)
		{
			if (!count($groups) || $all_groups)
			{
				$sql_where = '';
			}
			else
			{
				$sql_where = ' WHERE ' . $db->sql_in_set('group_id', $groups) . '';
			}

			$sql = 'SELECT user_id
				FROM ' . USER_GROUP_TABLE . $sql_where;

			$db->sql_query($sql);
			$result = $db->sql_query($sql);
			$users = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$users[] = $row['user_id'];
			}
			$db->sql_freeresult($result);

			$sql = 'UPDATE ' . USERS_TABLE . ' SET user_lang = \'' . $user_lang . '\' WHERE ' . $db->sql_in_set('user_id', $users);
			$db->sql_query($sql);

			meta_refresh(3, append_sid($stk_root_path . 'index.' . $phpEx, 'c=usergroup&amp;t=user_set_lang'));
			trigger_error($stk_lang->lang('USER_LANG_OK'));
		}

		page_header($stk_lang->lang('USER_SET_LANG'), false);
		page_footer();
	}
}
