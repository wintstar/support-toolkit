<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\main;

class erk
{
	/**
	* Display Options
	*
	* Output the options available
	*/
	function display_options()
	{
		global $stk_lang, $stk_root_path, $phpEx, $template, $user;

		// This is kinda like the main page
		// Output the main page
		page_header($stk_lang->lang('SUPPORT_TOOL_KIT'));

		// Category title and desc if available
		$template->assign_vars(array(
			'L_TITLE'			=> $stk_lang->lang('CAT_ERK'),
			'L_TITLE_EXPLAIN'	=> $stk_lang->lang('CAT_ERK_EXPLAIN', append_sid($stk_root_path . 'erk.' . $phpEx)),
		));

		$template->set_filenames(array(
			'body' => 'index_body.html',
		));

		page_footer();
	}
}
