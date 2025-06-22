<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\support;

class recache_moderators
{
	/**
	* Display Options
	*
	* Output the options available
	*/
	function display_options()
	{
		return 'RECACHE_MODERATORS';
	}

	/**
	* Run Tool
	*
	* Does the actual stuff we want the tool to do after submission
	*/
	function run_tool()
	{
		if (!function_exists('cache_moderators'))
		{
			global $stk_lang, $phpbb_root_path, $phpEx;

			include "{$phpbb_root_path}includes/functions_admin.$phpEx";
		}

		cache_moderators();

		trigger_error($stk_lang->lang('RECACHE_MODERATORS_COMPLETE'));
	}
}
