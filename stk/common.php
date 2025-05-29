<?php
/**
*
* @package Support Toolkit
* @copyright (c) 2010-2019 phpBB Group
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

// Report all errors, except notices and deprecation messages
$level = E_ALL & ~E_NOTICE & ~E_DEPRECATED;
error_reporting($level);

define('ADMIN_START', true);

// What version are we using?
define('STK_VERSION', '1.0.19-dev');
// QA-related
//define('STK_QA', 1);

// This seems like a rather nasty thing to do, but the only places this IN_LOGIN is checked is in session.php when creating a session
// Reason for having it is that it allows us in the STK if we can not login and the board is disabled.
define('IN_LOGIN', true);

// Make that phpBB itself understands out paths
$phpbb_root_path = PHPBB_ROOT_PATH;
$phpEx = PHP_EXT;

// Prepare some vars
$stk_no_error = false;

require(STK_ROOT_PATH . 'core/stk_class_loader.' . $phpEx);

$stk_class_loader = new \core\stk_class_loader('core\\', "{$stk_root_path}core/", $phpEx);
$stk_class_loader->register();

// Include all common stuff
require(STK_ROOT_PATH . 'includes/fatal_error_handler.' . PHP_EXT);
require(PHPBB_ROOT_PATH . 'common.' . PHP_EXT);
require(STK_ROOT_PATH . 'includes/functions.' . PHP_EXT);
define('PHPBB_MSG_HANDLER', 'stk_msg_handler');
require(STK_ROOT_PATH . 'includes/plugin.' . PHP_EXT);
require STK_ROOT_PATH . 'includes/umil.' . PHP_EXT;

// phpBBs common.php registers hooks, these hooks tend to cause problems with the
// support toolkit. Therefore we unset the `$phpbb_hook` object here
unset($phpbb_hook);

// Disable event dispatcer.
// Some extensions can cause fatal errors, so all extensions should be disabled.
$phpbb_dispatcher->disable();

// When not in the ERK we setup the user at this point
// and load UML.
if (!defined('IN_ERK'))
{
	include STK_ROOT_PATH . 'includes/critical_repair.' . PHP_EXT;
	$critical_repair = new critical_repair();

	$user->session_begin();
	$auth->acl($user->data);
	if (!empty($user) && $user->data['user_id'] == ANONYMOUS && isset($config['default_lang']))
	{
		$user->data['user_lang'] = $config['default_lang'];
	}
	$user->setup('acp/common', $config['default_style']);

	$umil = new umil(true);
}

// Load STK config when not in the erk
if (!isset($stk_config))
{
	$stk_config = array();
	include STK_ROOT_PATH . 'config.' . PHP_EXT;
}

// Setup some common variables
$action = $request->variable('action', '');
$submit = $request->variable('submit', false);
