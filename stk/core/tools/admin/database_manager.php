<?php
/**
*
* @package Support Toolkit - Test
* @version $Id$
* @copyright (c) 2025 wintstar / St. Frank www.stephan-frank.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace core\tools\admin;

class database_manager
{
	/**
	* Display Options
	*
	* Output the options available
	*/
	function display_options()
	{
		global $stk_root_path, $phpEx, $template, $user, $lang;

		// This is kinda like the main page
		// Output the main page
		page_header($lang['DATABASE_MANAGER']);

		$template->assign_vars(array(
			'U_DATABASE_MANAGER' 	=> append_sid($stk_root_path . 'dbsource/dbmanager.' . $phpEx, false, true, $user->session_id),
			'S_DEFINED_PHPBB'		=> !defined('IN_PHPBB') ? exit : true,
		));

		$template->set_filenames(array(
			'body' => 'tools/admin_database_manager_body.html',
		));

		page_footer();
	}
}
