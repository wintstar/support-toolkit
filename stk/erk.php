<?php
/**
*
* @package Support Toolkit
* @version $Id$
* @copyright (c) 2010 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

define('IN_PHPBB', true);
define('IN_ERK', true);

$stk_root_path = (defined('STK_ROOT_PATH')) ? STK_ROOT_PATH : './';
$stk_dir_name = substr(strrchr(dirname(__FILE__), DIRECTORY_SEPARATOR), 1);
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

// Init critical repair and run the tools that *must* be ran before initing anything else
include $stk_root_path . 'includes/critical_repair.' . PHP_EXT;
$critical_repair = new critical_repair();
$critical_repair->initialise();
$critical_repair->run_tool('bom_sniffer');
$critical_repair->run_tool('config_repair');

require $stk_root_path . 'common.' . PHP_EXT;

// We'll run the rest of the critical repair tools automatically now
$critical_repair->autorun_tools();

// At this point things should be runnable
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('acp/common', $config['default_style']);
stk_add_lang('common');

// Purge teh caches
$umil = new umil(true);
$umil->cache_purge(array(
	'data',
));
