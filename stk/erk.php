<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

define('IN_PHPBB', true);
define('IN_ERK', true);

$stk_root_path = (defined('STK_ROOT_PATH')) ? STK_ROOT_PATH : './';
$stk_dir_name = substr(strrchr(dirname(__FILE__), DIRECTORY_SEPARATOR), 1);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

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

require $stk_root_path . 'common.' . $phpEx;

// Init critical repair and run the tools that *must* be ran before initing anything else
$critical_repair = new \core\erk\erk();
$critical_repair->initialise();
$critical_repair->run_tool('config_repair');

// We'll run the rest of the critical repair tools automatically now
$critical_repair->autorun_tools();

// At this point things should be runnable
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// Language path.  We are using a custom language path to keep all the files within the stk/ folder.  First check if the $user->data['user_lang'] path exists, if not, check if the default lang path exists, and if still not use english.
$language_file_loader = new \core\language\language_file_loader($stk_root_path, $phpbb_root_path, $phpEx);
$stk_lang = new \core\language\language($language_file_loader);
$stk_lang->set_default_language($stk_config['default_lang']);
$stk_lang->set_user_language($user->data['user_lang']);
$stk_lang->add_lang(array('common', 'acp/common'), null, true);

// Purge teh caches
$path = $phpbb_root_path . 'cache/production';
purge_dir($path);

// Let's tell the user all is okay :)
$critical_repair->trigger_error($stk_lang->lang('ERK_OK'), true);
