<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\usergroup;

class delete_users
{
	function run_tool(&$error)
	{
		global $stk_root_path, $phpbb_root_path, $phpEx, $stk_lang, $db, $request;

		// Try to override some limits - maybe it helps some...
		@set_time_limit(0);
		$mem_limit = @ini_get('memory_limit');
		if (!empty($mem_limit))
		{
			$unit = strtolower(substr($mem_limit, -1, 1));
			$mem_limit = (int) $mem_limit;

			if ($unit == 'k')
			{
				$mem_limit = floor($mem_limit / 1024);
			}
			else if ($unit == 'g')
			{
				$mem_limit *= 1024;
			}
			else if (is_numeric($unit))
			{
				$mem_limit = floor((int) ($mem_limit . $unit) / 1048576);
			}
			$mem_limit = max(128, $mem_limit) . 'M';
		}
		else
		{
			$mem_limit = '128M';
		}
		@ini_set('memory_limit', $mem_limit);

		$period = $request->variable('period', 0);
		$message = $stk_lang->lang('DELETE_USERS_NOT_FOUND');
		$inactive_time = time() - 86400 * $period;

		$sql = 'SELECT group_id
			FROM ' . GROUPS_TABLE . '
				WHERE group_name LIKE \'BOTS\'
					OR group_name LIKE \'ADMINISTRATORS\' OR group_name LIKE \'GUESTS\'';
		$db->sql_query($sql);
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			$exclude_groups[] = $row['group_id'];
		}
		$db->sql_freeresult($result);

		$sql = 'SELECT user_id
			FROM ' . USERS_TABLE . '
			WHERE user_regdate <= ' . $inactive_time . '
				AND user_posts = 0 AND '. $db->sql_in_set('group_id', $exclude_groups, true) . ' AND user_lastvisit < ' . $inactive_time;
		$db->sql_query($sql);
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			$uids[] = $row['user_id'];
		}
		$db->sql_freeresult($result);

		if (!empty($uids))
		{
			if (!function_exists('user_delete'))
			{
				require $phpbb_root_path . 'includes/functions_user.' . $phpEx;
			}

			// Delete them all
			foreach ($uids as $uid)
			{
				user_delete('remove', $uid);
			}
			$message = $stk_lang->lang('DELETE_USERS_SUCESS');
		}
		meta_refresh(3, append_sid($stk_root_path . 'index.' . $phpEx, 'c=usergroup&amp;t=delete_users'));
		trigger_error($message);
	}

	/**
	* Display Options
	*
	* Output the options available
	*/
	function display_options()
	{
		global $stk_root_path, $phpEx, $stk_dir_name, $stk_lang, $template, $request;

		$stk_lang->add_lang('memberlist', null, true);

		$delete = $request->variable('delete', false);
		$period = $request->variable('period', 3);

		$period_ary = array(0 => $stk_lang->lang('7_DAYS'), 1 => $stk_lang->lang('1_MONTH'), 2 => $stk_lang->lang('3_MONTHS'), 3 => $stk_lang->lang('6_MONTHS'), 4 => $stk_lang->lang('1_YEAR'));
		$times = array(0 => 7, 1 => 30, 2 => 90, 3 => 180, 4 => 365);
		$s_options = '';
		foreach ($period_ary as $key => $value)
		{
			$selected = ($period == $key) ? ' selected="selected"' : '';
			$s_options .= '<option value="' . $times[$key]  . '"' . $selected . '>' . $period_ary[$key];
		}
		$s_options .= '</option>';

		$template->assign_vars(array(
			'S_PERIOD_SELECT'	=> $s_options,
			'U_DISPLAY_ACTION'	=> append_sid($stk_root_path . 'index.' . $phpEx, array('c' => 'user_group', 't' => 'delete_users')),
		));

		if ($delete)
		{
			if (stk_confirm_box(true))
			{
			}
			else
			{
				$hidden = build_hidden_fields(array('period' => $period));
				stk_confirm_box(false, $stk_lang->lang('DELETE_USERS_CONFIRM'), $hidden, 'confirm_body.html', $stk_dir_name . '/index.' . $phpEx . '?c=user_group&amp;t=delete_users&amp;submit=' . true);
			}
		}
		page_header($stk_lang->lang('DELETE_USERS'));

		$template->set_filenames(array(
			'body' => 'tools/delete_users.html',
		));

		page_footer();
	}
}
