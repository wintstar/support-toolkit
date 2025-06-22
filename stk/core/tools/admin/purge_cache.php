<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\admin;

class purge_cache
{
	/**
	* Display Options
	*
	* Output the options available
	*/
	function display_options()
	{
		return 'PURGE_CACHE';
	}

	/**
	* Run Tool
	*
	* Does the actual stuff we want the tool to do after submission
	*/
	function run_tool(&$error)
	{
		global $stk_lang, $auth, $cache;

		$cache->purge();

		// Clear permissions
		$auth->acl_clear_prefetch();
		cache_moderators();

		add_log('admin', 'LOG_PURGE_CACHE');

		trigger_error($stk_lang->lang('PURGE_CACHE_COMPLETE'));
	}
}
