<?php
/**
 *
 * @package Support Toolkit - Resynchronise Users groups
 * @copyright (c) 2009 phpBB Group
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * The class that handles the resync of the newly
 * registered users group
 */
class resync_newly_registered
{
	/**
	 * Array used to link steps to groups
	 * @var Array
	 */
	var $groups	= array(
		0	=> 'REGISTERED',
		1	=> 'REGISTERED_COPPA',
		2	=> 'NEWLY_REGISTERED',
	);

	/**
	 * The `resync_user_groups` object
	 * @var resync_user_groups
	 */
	var $parent = null;

	/**
	 * Constructor
	 */
	function __construct($main_object)
	{
		global $user;
		$user->add_lang('acp/groups');

		$this->parent = $main_object;
	}

	/**
	 * Make sure that this process can/must be run
	 */
	function can_run()
	{
		return true;
	}

	/**
	 * Resync this group
	 */
	function resync()
	{
		global $config, $template, $request;

		// Get global variables
		$last = $request->variable('last', 0); // The user_id of the last user in this batch
		$step = $request->variable('step', 0);	// Step 0 is syncing the REGISTERED, 1 is REGISTERED_COPPA and 2 is NEWLY_REGISTERED

		// Get the user ids
		$nr_gid		= 0;
		$group_name	= $this->groups[$step];
		$users		= $this->_get_user_batch($group_name, $last, $nr_gid);

		// Finished this step go to the next
		if (empty($users))
		{
			// There is a next step?
			if ($step == 2)
			{
				return;
			}
			else
			{
				meta_refresh(3, append_sid(STK_ROOT_PATH, array('c' => 'user_group', 't' => 'resync_user_groups', 'step' => ++$step, 'submit' => true, 'rr' => $this->parent->run_rr, 'rnr' => $this->parent->run_rnr)));
				$template->assign_var('U_BACK_TOOL', false);
				trigger_error(user_lang('RUN_RNR_NOT_FINISHED'));
			}
		}

		// Prepare the correct function call
		$function	= '';
		$args		= array();
		switch ($group_name)
		{
			// Users with not enough posts
			case 'REGISTERED'		:
			case 'REGISTERED_COPPA'	:
				$function	= 'group_user_add';
				$args		= array(
					$nr_gid,
					$users,
					false,
					false,
					$config['new_member_group_default'],
				);
			break;

			case 'NEWLY_REGISTERED'	:
				$function	= 'group_user_del';
				$args		= array(
					$nr_gid,
					$users,
				);
			break;
		}

		// Call the function
		if (!function_exists('group_user_add'))
		{
			include(PHPBB_ROOT_PATH . 'includes/functions_user.' . PHP_EXT);
		}

		if (($error = call_user_func_array($function, $args)) !== false)
		{
			// Handle the errors, though continue if all users are already part of the group
			if ($error != 'GROUP_USERS_EXIST')
			{
				trigger_error(user_lang($error));
			}
		}

		// Fix the flag
		$this->_fix_new_flag($users, $group_name);

		// Next batch
		meta_refresh(3, append_sid(STK_ROOT_PATH, array('c' => 'usergroup', 't' => 'resync_user_groups', 'step' => $step, 'last' => array_pop($users), 'submit' => true, 'rr' => $this->parent->run_rr, 'rnr' => $this->parent->run_rnr)));
		$template->assign_var('U_BACK_TOOL', false);
		trigger_error(user_lang('RUN_RNR_NOT_FINISHED'));
	}

	/**
	 * Get the next batch of users.
	 *
	 * @param	$group_name	The name of the group of which the users are fetched
	 * @param	$last		The id of the last user in the previous batch
	 * @param	$group_id	Variable that will be filled with the group_id of the NEWLY_REGISTERED users group
	 */
	function _get_user_batch($group_name, $last, &$nr_gid)
	{
		global $config, $db;

		$users = array();

		// Get the group_id of the NEWLY_REGISTERED users group
		$sql = 'SELECT group_id
			FROM ' . GROUPS_TABLE . "
			WHERE group_name = 'NEWLY_REGISTERED'";
		$result	= $db->sql_query_limit($sql, 1, 0, 3600);
		$nr_gid	= $db->sql_fetchfield('group_id', false, $result);
		$db->sql_freeresult($result);

		// Get the group_id of the ADMINISTRATORS and GLOBAL_MODERATORS users group
		$sql = 'SELECT group_id
			FROM ' . GROUPS_TABLE . '
			WHERE ' . $db->sql_in_set('group_name', array('GLOBAL_MODERATORS', 'ADMINISTRATORS')) .'';
		$result	= $db->sql_query($sql);
		while($row = $db->sql_fetchrow($result))
		{			$admin_gid[] = $row['group_id'];
		}
		$db->sql_freeresult($result);
		$sql_where_not = ' AND ' . $db->sql_in_set('u.group_id', $admin_gid, true) . '';

		// Set some group dependant sql stuff
		$sql_token = '';
		switch ($group_name)
		{
			// Users with not enough posts
			case 'REGISTERED'		:
			case 'REGISTERED_COPPA'	:
				$sql_token = '<';
			break;

			case 'NEWLY_REGISTERED'	:
				$sql_token = '>=';
			break;
		}
		$sql_where = "u.user_posts {$sql_token} " . (int) $config['new_member_post_limit'];

		$sql_ary = array(
			'SELECT'	=> 'u.user_id',
			'FROM'		=> array(
				USERS_TABLE			=> 'u',
				USER_GROUP_TABLE	=> 'ug',
			),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(
						GROUPS_TABLE => 'g',
					),
					'ON'	=> "g.group_name = '" . $group_name . "'",
				),
			),
			'WHERE'			=> "ug.group_id = g.group_id AND ug.user_id > {$last} AND (u.user_id = ug.user_id AND {$sql_where}) {$sql_where_not}",
		);
		$sql	= $db->sql_build_query('SELECT', $sql_ary);
		$result	= $db->sql_query_limit($sql, $this->parent->batch_size, 0);
		while ($row = $db->sql_fetchrow($result))
		{
			$users[] = $row['user_id'];
		}
		$db->sql_freeresult($result);

		return $users;
	}

	/**
	 * Make sure that the 'user_new' flag is updated correctly
	 * @param  Array  $user_ids   The users that will be updated
	 * @param  String $group_name The group that is currently handeled.
	 * @return void
	 */
	function _fix_new_flag($user_ids, $group_name)
	{
		global $db;

		// Value?
		$new_group_value = ($group_name == 'REGISTERED' || $group_name == 'REGISTERED_COPPA') ? 1 : 0;

		// Set the flag
		$sql = 'UPDATE ' . USERS_TABLE . ' SET user_new = ' . $new_group_value . ' WHERE ' . $db->sql_in_set('user_id', $user_ids);
		$db->sql_query($sql);
	}
}
