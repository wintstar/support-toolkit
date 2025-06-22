<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
* Build configuration template for acp configuration pages
*
* Slightly modified from adm/index.php
*/
function build_cfg_template($tpl_type, $name, $vars)
{
	global $request, $stk_lang;

	$tpl = array();

	if ((!isset($vars['no_request_var']) || !$vars['no_request_var']) && $tpl_type[0] != 'password')
	{
		$default = (isset($vars['default'])) ? $request->variable($name, $vars['default']) : $request->variable($name, '');
	}
	else
	{
		$default = (isset($vars['default'])) ? $vars['default'] : '';
	}

	switch ($tpl_type[0])
	{
		case 'text':
			// If requested set some vars so that we later can display the link correct
			if (isset($vars['select_user']) && $vars['select_user'] === true)
			{
				$tpl['find_user']		= true;
				$tpl['find_user_field']	= $name;
			}
		case 'password':
			$size = (int) $tpl_type[1];
			$maxlength = (int) $tpl_type[2];

			$tpl['tpl'] = '<input id="' . $name . '" type="' . $tpl_type[0] . '"' . (($size) ? ' size="' . $size . '"' : '') . ' maxlength="' . (($maxlength) ? $maxlength : 255) . '" name="' . $name . '" value="' . $default . '" />';
		break;

		case 'textarea':
			$rows = (int) $tpl_type[1];
			$cols = (int) $tpl_type[2];

			$tpl['tpl'] = '<textarea id="' . $name . '" name="' . $name . '" rows="' . $rows . '" cols="' . $cols . '">' . $default . '</textarea>';
		break;

		case 'radio':
			$name_yes	= ($default) ? ' checked="checked"' : '';
			$name_no	= (!$default) ? ' checked="checked"' : '';

			$tpl_type_cond = explode('_', $tpl_type[1]);
			$type_no = ($tpl_type_cond[0] == 'disabled' || $tpl_type_cond[0] == 'enabled') ? false : true;

			$tpl_no = '<label><input type="radio" name="' . $name . '" value="0"' . $name_no . ' class="radio" /> ' . (($type_no) ? $stk_lang->lang('NO') : $stk_lang->lang('DISABLED')) . '</label>';
			$tpl_yes = '<label><input type="radio" id="' . $name . '" name="' . $name . '" value="1"' . $name_yes . ' class="radio" /> ' . (($type_no) ? $stk_lang->lang('YES') : $stk_lang->lang('ENABLED')) . '</label>';

			$tpl['tpl'] = ($tpl_type_cond[0] == 'yes' || $tpl_type_cond[0] == 'enabled') ? $tpl_yes . $tpl_no : $tpl_no . $tpl_yes;
		break;

		case 'checkbox':
			$checked	= ($default) ? ' checked="checked"' : '';

			if (empty($tpl_type[1]))
			{
				$tpl['tpl'] = '<input type="checkbox" id="' . $name . '" name="' . $name . '"' . $checked . ' />';
			}
			else
			{
				$tpl['tpl'] = '<input type="radio" id="' . $name . '" name="' . $tpl_type[1] . '" value="' . $name . '"' . $checked . ' />';
			}
		break;

		case 'select':
		case 'select_multiple' :
		case 'custom':

			$return = '';

			if (isset($vars['function']))
			{
				$call = $vars['function'];
			}
			elseif (isset($vars['methode']))
			{
				$call = $vars['methode'];
			}
			else
			{
				break;
			}

			if (isset($vars['params']))
			{
				$args = array();
				foreach ($vars['params'] as $value)
				{
					switch ($value)
					{
						case '{CONFIG_VALUE}':
							$value = $default;
						break;

						case '{KEY}':
							$value = $name;
						break;
					}

					$args[] = $value;
				}
			}
			else
			{
				$args = array($default, $name);
			}

			$return = call_user_func_array($call, $args);

			if ($tpl_type[0] == 'select')
			{
				$tpl['tpl'] = '<select id="' . $name . '" name="' . $name . '">' . $return . '</select>';
			}
			else if ($tpl_type[0] == 'select_multiple')
			{
				$tpl['tpl'] = '<select id="' . $name . '" name="' . $name . '[]" multiple="multiple">' . $return . '</select>';
			}
			else
			{
				$tpl['tpl'] = $return;
			}

		break;

		default:
		break;
	}

	if (isset($vars['append']))
	{
		$tpl['tpl'] .= $vars['append'];
	}

	return $tpl;
}

/**
* Use Lang
*
* A function for checking if a language key exists and changing the inputted var to the language value if it does.
* Build for the array_walk used on $error
*/
function use_lang(&$lang_key)
{
	global $stk_lang;

	$lang_key = $stk_lang->lang($lang_key);
}

/**
* Stk add lang
*
* @param	String	$lang_file	the name of the language file

*/
function template_convert_lang()
{
	global $template, $stk_lang;

	if (!defined('IN_ERK'))
	{
		foreach($stk_lang->get_lang_array() as $key => $value)
		{
			$template->assign_var('L_' . $key, $value);
		}
	}
}

// Message/Login boxes

/**
* Build Confirm box
* @param boolean $check True for checking if confirmed (without any additional parameters) and false for displaying the confirm box
* @param string|array $title Title/Message used for confirm box.
*		message text is _CONFIRM appended to title.
*		If title cannot be found in user->lang a default one is displayed
*		If title_CONFIRM cannot be found in user->lang the text given is used.
*       If title is an array, the first array value is used as explained per above,
*       all other array values are sent as parameters to the language function.
* @param string $hidden Hidden variables
* @param string $html_body Template used for confirm box
* @param string $u_action Custom form action
*
* @return bool True if confirmation was successful, false if not
*/
function stk_confirm_box($check, $title = '', $hidden = '', $html_body = 'confirm_body.html', $u_action = '')
{
	global $user, $template, $db, $request, $stk_lang;
	global $config, $phpbb_path_helper;

	if (isset($_POST['cancel']))
	{
		return false;
	}

	$confirm = ($stk_lang->lang('YES') === $request->variable('confirm', '', true, \phpbb\request\request_interface::POST));

	if ($check && $confirm)
	{
		$user_id = $request->variable('confirm_uid', 0);
		$session_id = $request->variable('sess', '');
		$confirm_key = $request->variable('confirm_key', '');

		if ($user_id != $user->data['user_id'] || $session_id != $user->session_id || !$confirm_key || !$user->data['user_last_confirm_key'] || $confirm_key != $user->data['user_last_confirm_key'])
		{
			return false;
		}

		// Reset user_last_confirm_key
		$sql = 'UPDATE ' . USERS_TABLE . " SET user_last_confirm_key = ''
			WHERE user_id = " . $user->data['user_id'];
		$db->sql_query($sql);

		return true;
	}
	else if ($check)
	{
		return false;
	}

	$s_hidden_fields = build_hidden_fields(array(
		'confirm_uid'	=> $user->data['user_id'],
		'sess'			=> $user->session_id,
		'sid'			=> $user->session_id,
	));

	// generate activation key
	$confirm_key = gen_rand_string(10);

	if (defined('IN_ADMIN') && isset($user->data['session_admin']) && $user->data['session_admin'])
	{
		adm_page_header(is_null($stk_lang->lang($title)) ? $user->lang['CONFIRM'] : $stk_lang->lang($title));
	}
	else
	{
		page_header(is_null($stk_lang->lang($title)) ? $user->lang['CONFIRM'] : $stk_lang->lang($title));
	}

	$template->set_filenames(array(
		'body' => $html_body)
	);

	// If activation key already exist, we better do not re-use the key (something very strange is going on...)
	if ($request->variable('confirm_key', ''))
	{
		// This should not occur, therefore we cancel the operation to safe the user
		return false;
	}

	// re-add sid / transform & to &amp; for user->page (user->page is always using &)
	$use_page = ($u_action) ? $u_action : str_replace('&', '&amp;', $user->page['page']);
	$u_action = reapply_sid($phpbb_path_helper->get_valid_page($use_page, $config['enable_mod_rewrite']));
	$u_action .= ((strpos($u_action, '?') === false) ? '?' : '&amp;') . 'confirm_key=' . $confirm_key;

	$template->assign_vars(array(
		'MESSAGE_TITLE'		=> (is_null($stk_lang->lang($title))) ? $user->lang['CONFIRM'] : $stk_lang->lang($title),
		'MESSAGE_TEXT'		=> (is_null($stk_lang->lang($title . '_CONFIRM'))) ? $title : $stk_lang->lang($title . '_CONFIRM'),

		'YES_VALUE'			=> $stk_lang->lang('YES'),
		'S_CONFIRM_ACTION'	=> $u_action,
		'S_HIDDEN_FIELDS'	=> $hidden . $s_hidden_fields)
	);

	$sql = 'UPDATE ' . USERS_TABLE . " SET user_last_confirm_key = '" . $db->sql_escape($confirm_key) . "'
		WHERE user_id = " . $user->data['user_id'];
	$db->sql_query($sql);

	if (defined('IN_ADMIN') && isset($user->data['session_admin']) && $user->data['session_admin'])
	{
		adm_page_footer();
	}
	else
	{
		page_footer();
	}

	exit; // unreachable, page_footer() above will call exit()
}

/**
 * Perform all quick tasks that has to be ran before we authenticate
 *
 * @param	String	$action	The action to perform
 * @param   bool    $submit The form has been submitted
 */
function perform_unauthed_quick_tasks($action, $submit = false)
{
	global $stk_root_path, $phpbb_root_path, $phpEx, $template, $umil, $stk_lang, $request, $user;

	switch ($action)
	{
		// If the user wants to destroy their STK login cookie
		case 'stklogout' :
			setcookie('stk_token', '', (time() - 31536000));
			$user->unset_admin();
			meta_refresh(3, append_sid($phpbb_root_path . 'index.' . $phpEx));
			trigger_error($stk_lang->lang('STK_LOGOUT_SUCCESS'));
		break;

		// Generate the passwd file
		case 'genpasswdfile' :
			// Create a 25 character alphanumeric password (easier to select with a browser and won't cause confusion like it could if it ends in "." or something).
			$_pass_string = substr(preg_replace(array('#([^a-zA-Z0-9])#', '#0#', '#O#'), array('', 'Z', 'Y'), phpbb_hash(unique_id())), 2, 25);

			// The password is usable for 6 hours from now
			$_pass_exprire = time() + 21600;

			// Print a message and tell the user what to do and where to download this page
			page_header($stk_lang->lang('GEN_PASS_FILE'), false);

			$template->assign_vars(array(
				'PASS_GENERATED'			=> $stk_lang->lang('PASS_GENERATED', $_pass_string, $user->format_date($_pass_exprire, false, true)),
				'PASS_GENERATED_REDIRECT'	=> $stk_lang->lang('PASS_GENERATED_REDIRECT', append_sid($stk_root_path . 'index.' . $phpEx)),
				'S_HIDDEN_FIELDS'			=> build_hidden_fields(array('pass_string' => $_pass_string, 'pass_exp' => $_pass_exprire)),
				'U_ACTION'					=> append_sid($stk_root_path . 'index.' . $phpEx, array('action' => 'downpasswdfile')),
			));

			$template->set_filenames(array(
				'body'	=> 'gen_password.html',
			));
			page_footer(false);
		break;

		// Download the passwd file
		case 'downpasswdfile' :
			$_pass_string	= $request->variable('pass_string', '', true);
			$_pass_exprire	= $request->variable('pass_exp', 0);

			// Something went wrong, stop execution
			if (!isset($_POST['download_passwd']) || empty($_pass_string) || $_pass_exprire <= 0)
			{
				trigger_error($stk_lang->lang('GEN_PASS_FAILED'), E_USER_ERROR);
			}

			// Create the file and let the user download it
			header('Content-Type: text/x-delimtext; name="passwd.' . $phpEx . '"');
			header('Content-disposition: attachment; filename=passwd.' . $phpEx);

			print ("<?php
/**
* Support Toolkit emergency password.
* The file was generated on: " . $user->format_date($_pass_exprire - 21600, 'd/M/Y H:i.s', true)) . " and will expire on: " . $user->format_date($_pass_exprire, 'd/M/Y H:i.s', true) . ".
*/

// This file can only be from inside the Support Toolkit
if (!defined('IN_PHPBB') || !defined('STK_VERSION'))
{
	exit;
}

\$stk_passwd\t\t\t\t= '{$_pass_string}';
\$stk_passwd_expiration\t= {$_pass_exprire};
";
			exit_handler();
		break;
	}
}

/**
 * Perform all quick tasks that require the user to be authenticated
 *
 * @param	String	$action	The action we'll be performing
 */
function perform_authed_quick_tasks($action)
{
	global $stk_root_path, $phpEx, $stk_lang;

	$logout = false;

	switch ($action)
	{
		// User wants to logout and remove the password file
		case 'delpasswdfilelogout' :
			$logout = true;

			// No Break;

		// If the user wants to distroy the passwd file
		case 'delpasswdfile' :
			if (file_exists($stk_root_path . 'passwd.' . $phpEx) && false === @unlink($stk_root_path . 'passwd.' . $phpEx))
			{
				// Shouldn't happen. Kill the script
				trigger_error($stk_lang->lang('FAIL_REMOVE_PASSWD'), E_USER_ERROR);
			}

			// Log him out
			if ($logout)
			{
				perform_unauthed_quick_tasks('stklogout');
			}
		break;
	}
}

/**
 * Support Toolkit Error handler
 *
 * A wrapper for the phpBB `msg_handler` function, which is mainly used
 * to update variables before calling the actual msg_handler and is able
 * to handle various special cases.
 *
 * @global type $stk_no_error
 * @global string $phpbb_root_path
 * @param type $errno
 * @param string $msg_text
 * @param type $errfile
 * @param type $errline
 * @return boolean
 */
function stk_msg_handler($errno, $msg_text, $errfile, $errline)
{
	// First and foremost handle the case where phpBB calls trigger error
	// but the STK really needs to continue.
	global $stk_root_path, $phpEx, $critical_repair, $stk_no_error, $user, $stk_lang;

	if ($stk_no_error === true)
	{
		return true;
	}

	// Do not display notices if we suppress them via @
	if (error_reporting() == 0 && $errno != E_USER_ERROR && $errno != E_USER_WARNING && $errno != E_USER_NOTICE)
	{
		return;
	}

	if (!defined('E_DEPRECATED'))
	{
		define('E_DEPRECATED', 8192);
	}

	// Ignore Strict and Deprecated notices
	if (in_array($errno, array(E_STRICT, E_DEPRECATED, E_USER_DEPRECATED)))
	{
		return true;
	}

	// We encounter an error while in the ERK, this need some special treatment

	$error_level = array(E_ERROR => 'Fatal error', E_WARNING => 'Runtime Error', E_PARSE => 'Parse error', E_NOTICE => 'Notice', );

	switch ($errno)
	{
		case E_ERROR:
		case E_PARSE:
		case E_WARNING:
		case E_NOTICE:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:
		case E_USER_ERROR:
		case E_RECOVERABLE_ERROR:
			$backtrace = get_backtrace();
			$msg_text = '<br /><b>[phpBB Debug] PHP '. $error_level[$errno] .':</b> in file ' . phpbb_filter_root_path($errfile) . ' on line <b>'. $errline .': ' . $msg_text . '</b><br />'.$backtrace.'';
		break;
		default:
		break;
	}

	if (defined('IN_ERK'))
	{
		$critical_repair->trigger_error($msg_text, ($errno == E_USER_ERROR ? false : true));
	}
	else if (!defined('IN_STK'))
	{
		// We're encountering an error before the STK is fully loaded
		// Set out own message if needed
		if ($errno == E_USER_ERROR)
		{
			$msg_text = $stk_lang->lang('STK_FATAL_ERROR', $stk_root_path, $phpEx);
		}

		if (!isset($critical_repair))
		{
			include $stk_root_path . 'includes/critical_repair.' . $phpEx;
			$critical_repair = new critical_repair();
		}

		$critical_repair->trigger_error($msg_text, ($errno == E_USER_ERROR ? false : true));
	}

	//-- Normal phpBB msg_handler

	global $cache, $db, $auth, $template, $config, $user;
	global $phpEx, $phpbb_root_path, $msg_title, $msg_long_text;

	// Message handler is stripping text. In case we need it, we are possible to define long text...
	if (isset($msg_long_text) && $msg_long_text && !$msg_text)
	{
		$msg_text = $msg_long_text;
	}

	if (!defined('E_DEPRECATED'))
	{
		define('E_DEPRECATED', 8192);
	}

	switch ($errno)
	{
		case E_NOTICE:
		case E_WARNING:

			// Check the error reporting level and return if the error level does not match
			// If DEBUG is defined the default level is E_ALL
			if (($errno & ((defined('DEBUG')) ? E_ALL : error_reporting())) == 0)
			{
				return;
			}

			if (strpos($errfile, 'cache') === false && strpos($errfile, 'template.') === false)
			{
				$errfile = stk_filter_root_path($errfile);
				$msg_text = stk_filter_root_path($msg_text);
				$error_name = ($errno === E_WARNING) ? 'PHP Warning' : 'PHP Notice';
				$id = rand(1, 10000);
				$template->assign_block_vars('debug_r', array(
					'U_DEBUGING_ERN'	=> $error_name,
					'U_DEBUGING_ERF'	=> $errfile,
					'U_DEBUGING_ERL'	=> $errline,
					'U_DEBUGING_MSG'	=> $msg_text,
				));

				// we are writing an image - the user won't see the debug, so let's place it in the log
				if (defined('IMAGE_OUTPUT') || defined('IN_CRON'))
				{
					add_log('critical', 'LOG_IMAGE_GENERATION_ERROR', $errfile, $errline, $msg_text);
				}
			}

			return;

		break;

		case E_USER_ERROR:

			if (!empty($user))
			{
				$msg_text = (!is_null($stk_lang->lang($msg_text))) ? $stk_lang->lang($msg_text) : $msg_text;
				$msg_title = (!isset($msg_title)) ? $stk_lang->lang('GENERAL_ERROR') : ((!is_null($stk_lang->lang($msg_title))) ? $stk_lang->lang($msg_title) : $msg_title);

				$l_return_index = $stk_lang->lang('RETURN_INDEX', '<a href="' . $phpbb_root_path . '">', '</a>');
				$l_notify = '';

				if (!empty($config['board_contact']))
				{
					$l_notify = '<p>' . $stk_lang->lang('NOTIFY_ADMIN_EMAIL', $config['board_contact']) . '</p>';
				}
			}
			else
			{
				$msg_title = 'General Error';
				$l_return_index = '<a href="' . $phpbb_root_path . '">Return to index page</a>';
				$l_notify = '';

				if (!empty($config['board_contact']))
				{
					$l_notify = '<p>Please notify the board administrator or webmaster: <a href="mailto:' . $config['board_contact'] . '">' . $config['board_contact'] . '</a></p>';
				}
			}

			$log_text = $msg_text;
			$backtrace = get_backtrace();
			if ($backtrace)
			{
				$log_text .= '<br /><br />BACKTRACE<br />' . $backtrace;
			}

			if (defined('IN_INSTALL') || defined('DEBUG_EXTRA') || isset($auth) && $auth->acl_get('a_'))
			{
				$msg_text = $log_text;
			}

			if ((defined('DEBUG') || defined('IN_CRON') || defined('IMAGE_OUTPUT')) && isset($db))
			{
				// let's avoid loops
				$db->sql_return_on_error(true);
				add_log('critical', 'LOG_GENERAL_ERROR', $msg_title, $log_text);
				$db->sql_return_on_error(false);
			}

			// Do not send 200 OK, but service unavailable on errors
			stk_send_status_line(503, 'Service Unavailable');

			garbage_collection();

			// Try to not call the adm page data...

			echo '<!DOCTYPE html>';
			echo "\r\n";
			echo '<html dir="' . $stk_lang->lang('DIRECTION') . '" lang="' . $stk_lang->lang('USER_LANG') . '">';
			echo "\r\n";
			echo '<head>';
			echo '<meta charset="utf-8">';
			echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
			echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
			echo '<title>' . $msg_title . '</title>';
			echo '<style type="text/css">' . "\n" . '/* <![CDATA[ */' . "\n";
			echo '* { margin: 0; padding: 0; } html { font-size: 100%; height: 100%; margin-bottom: 1px; background-color: #E4EDF0; } body { font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif; color: #536482; background: #E4EDF0; font-size: 62.5%; margin: 0; } ';
			echo 'a:link, a:active, a:visited { color: #006699; text-decoration: none; } a:hover { color: #DD6900; text-decoration: underline; } ';
			echo '#wrap { padding: 0 20px 15px 20px; min-width: 615px; } #page-header { text-align: right; height: 40px; } #page-footer { clear: both; font-size: 1em; text-align: center; } ';
			echo '.panel { margin: 4px 0; background-color: #FFFFFF; border: solid 1px  #A9B8C2; } ';
			echo '#errorpage #page-header a { font-weight: bold; line-height: 6em; } #errorpage #content { padding: 10px; } #errorpage #content h1 { line-height: 1.2em; margin-bottom: 0; color: #DF075C; } ';
			echo '#errorpage #content div { margin-top: 20px; margin-bottom: 5px; border-bottom: 1px solid #CCCCCC; padding-bottom: 5px; color: #333333; font: bold 1.2em "Lucida Grande", Arial, Helvetica, sans-serif; text-decoration: none; line-height: 120%; text-align: left; } ';
			echo "\n" . '/* ]]> */' . "\n";
			echo '</style>';
			echo '</head>';
			echo '<body id="errorpage">';
			echo '<div id="wrap">';
			echo '	<div id="page-header">';
			echo '		' . $l_return_index;
			echo '	</div>';
			echo '	<div id="acp">';
			echo '	<div class="panel">';
			echo '		<div id="content">';
			echo '			<h1>' . $msg_title . '</h1>';

			echo '			<div>' . $msg_text . '</div>';

			echo $l_notify;

			echo '		</div>';
			echo '	</div>';
			echo '	</div>';
			echo '	<div id="page-footer">';
			echo '		Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Group';
			echo '	</div>';
			echo '</div>';
			echo '</body>';
			echo '</html>';

			exit_handler();

			// On a fatal error (and E_USER_ERROR *is* fatal) we never want other scripts to continue and force an exit here.
			exit;
		break;

		case E_USER_WARNING:
		case E_USER_NOTICE:
			define('IN_ERROR_HANDLER', true);

			if (empty($user->data))
			{
				$user->session_begin();
			}

			// We re-init the auth array to get correct results on login/logout
			$auth->acl($user->data);

			if (empty($user->lang))
			{
				$user->setup();
			}

			if ($msg_text == 'ERROR_NO_ATTACHMENT' || $msg_text == 'NO_FORUM' || $msg_text == 'NO_TOPIC' || $msg_text == 'NO_USER')
			{
				stk_send_status_line(404, 'Not Found');
			}

			$msg_text = (!is_null($stk_lang->lang($msg_text))) ? $stk_lang->lang($msg_text) : $msg_text;
			$msg_title = (!isset($msg_title)) ? $stk_lang->lang('INFORMATION') : ((!is_null($stk_lang->lang($msg_title))) ? $stk_lang->lang($msg_title) : $msg_title);

			if (!defined('HEADER_INC'))
			{
				if (defined('IN_ADMIN') && isset($user->data['session_admin']) && $user->data['session_admin'])
				{
					adm_page_header($msg_title);
				}
				else
				{
					page_header($msg_title, false);
				}
			}

			// Do not use the normal template path (to prevent issues with boards using alternate styles)
			$template->set_custom_style('stk', $stk_root_path . 'style');

			$template->set_filenames(array(
				'body' => 'message_body.html')
			);

			$template->assign_vars(array(
				'MESSAGE_TITLE'		=> $msg_title,
				'MESSAGE_TEXT'		=> $msg_text,
				'S_USER_WARNING'	=> ($errno == E_USER_WARNING) ? true : false,
				'S_USER_NOTICE'		=> ($errno == E_USER_NOTICE) ? true : false)
			);

			// We do not want the cron script to be called on error messages
			define('IN_CRON', true);

			if (defined('IN_ADMIN') && isset($user->data['session_admin']) && $user->data['session_admin'])
			{
				adm_page_footer();
			}
			else
			{
				page_footer();
			}

			exit_handler();
		break;

		// PHP4 compatibility
		case E_DEPRECATED:
			return true;
		break;
	}

	// If we notice an error not handled here we pass this back to PHP by returning false
	// This may not work for all php versions
	return false;
}

//-- Wrappers for functions that only exist in newer php version
if (!function_exists('array_fill_keys'))
{
	/**
	* Fills an array with the value of the value parameter, using the values of the keys array as keys.
	* @param Array $keys Array of values that will be used as keys. Illegal values for key will be converted to string.
	* @param mixed $value Value to use for filling
	*/
	function array_fill_keys($keys, $value)
	{
		$array = array();

		foreach ($keys as $key)
		{
			$array[$key] = $value;
		}

		return $array;
	}
}

if (!function_exists('adm_back_link'))
{
	/**
	* Generate back link for acp pages
	*/
	function adm_back_link($u_action)
	{
		return '<br /><br /><a href="' . $u_action . '">&laquo; ' . $stk_lang->lang('BACK_TO_PREV') . '</a>';
	}
}

/**
* Removes absolute path to phpBB root directory from error messages
* and converts backslashes to forward slashes.
*
* @param string $errfile	Absolute file path
*							(e.g. /var/www/phpbb/phpBB/includes/functions.php)
*							Please note that if $errfile is outside of the phpBB root,
*							the root path will not be found and can not be filtered.
* @return string			Relative file path
*							(e.g. /includes/functions.php)
*/
function stk_filter_root_path($errfile)
{
	static $root_path;

	if (empty($root_path))
	{
		$root_path = phpbb_realpath(dirname(__FILE__) . '/../');
	}

	return str_replace(array($root_path, '\\'), array('[ROOT]', '/'), $errfile);
}

// php.net, laurynas dot butkus at gmail dot com, http://us.php.net/manual/en/function.html-entity-decode.php#75153
function html_entity_decode_utf8($string)
{
	static $trans_tbl;

	// replace numeric entities
	$string = preg_replace_callback(
		'|&#x([0-9a-f]+)|',
		function ($matches) { return _code2utf8(hexdec($matches[1])); },
		$string
	);

	$string = preg_replace_callback(
		'|&#([0-9]+);|',
		function ($matches) { return _code2utf8($matches[1]); },
		$string
	);

	// replace literal entities
	if (!isset($trans_tbl))
	{
		$trans_tbl = array();

		foreach (get_html_translation_table(HTML_ENTITIES) as $val => $key)
		{
			$trans_tbl[$key] = utf8_encode($val);
		}
	}

	return strtr($string, $trans_tbl);
}

// Returns the utf string corresponding to the unicode value (from php.net, courtesy - romans@void.lv)
function _code2utf8($num)
{
	$return = '';

	if ($num < 128)
	{
		$return = chr($num);
	}
	else if ($num < 2048)
	{
		$return = chr(($num >> 6) + 192) . chr(($num & 63) + 128);
	}
	else if ($num < 65536)
	{
		$return = chr(($num >> 12) + 224) . chr((($num >> 6) & 63) + 128) . chr(($num & 63) + 128);
	}
	else if ($num < 2097152)
	{
		$return = chr(($num >> 18) + 240) . chr((($num >> 12) & 63) + 128) . chr((($num >> 6) & 63) + 128) . chr(($num & 63) + 128);
	}

	return $return;
}

/**
* wrapper for pathinfo($file, PATHINFO_FILENAME), as PATHINFO_FILENAME is
* php > 5.2
* Function by php [spat] hm2k.org (http://www.php.net/manual/en/function.pathinfo.php#88159)
 */
function pathinfo_filename($file) { //file.name.ext, returns file.name
	if (defined('PATHINFO_FILENAME'))
	{
		return pathinfo($file, PATHINFO_FILENAME);
	}

	if (strstr($file, '.'))
	{
		return substr($file, 0, strrpos($file, '.'));
	}
}

/**
 * A function that behaves like `array_walk` but instead
 * of walking over the values this function walks
 * over the keys
 */
function stk_array_walk_keys(&$array, $callback)
{
	if (!is_callable($callback))
	{
		return;
	}

	$tmp_array = array();
	foreach ($array as $key => $null)
	{
		$walked_key = call_user_func($callback, $key);
		$tmp_array[$walked_key] = $array[$key];
		unset($array[$key]);
	}
	$array = $tmp_array;
}

/**
* Outputs correct status line header.
*
* Depending on php sapi one of the two following forms is used:
*
* Status: 404 Not Found
*
* HTTP/1.x 404 Not Found
*
* HTTP version is taken from HTTP_VERSION environment variable,
* and defaults to 1.0.
*
* Sample usage:
*
* send_status_line(404, 'Not Found');
*
* @param int $code HTTP status code
* @param string $message Message for the status code
* @return void
*/
function stk_send_status_line($code, $message)
{
	global $request;

	$server_protocol = $request->server('SERVER_PROTOCOL');
	if (substr(strtolower(@php_sapi_name()), 0, 3) === 'cgi')
	{
		// in theory, we shouldn't need that due to php doing it. Reality offers a differing opinion, though
		header("Status: $code $message", true, $code);
	}
	else
	{
		if (!empty($server_protocol))
		{
			$version = $server_protocol;
		}
		else
		{
			$version = 'HTTP/1.0';
		}
		header("$version $code $message", true, $code);
	}
}

function sinc_stats()
{
	global $db, $config;

	$sql = 'SELECT COUNT(post_id) AS stat
		FROM ' . POSTS_TABLE . '
		WHERE post_visibility = ' . ITEM_APPROVED;
	$result = $db->sql_query($sql);
	$config->set('num_posts', (int) $db->sql_fetchfield('stat'), false);
	$db->sql_freeresult($result);

	$sql = 'SELECT COUNT(topic_id) AS stat
		FROM ' . TOPICS_TABLE . '
		WHERE topic_visibility = ' . ITEM_APPROVED;
	$result = $db->sql_query($sql);
	$config->set('num_topics', (int) $db->sql_fetchfield('stat'), false);
	$db->sql_freeresult($result);

	$sql = 'SELECT COUNT(attach_id) as stat
		FROM ' . ATTACHMENTS_TABLE . '
		WHERE is_orphan = 0';
	$result = $db->sql_query($sql);
	$config->set('num_files', (int) $db->sql_fetchfield('stat'), false);
	$db->sql_freeresult($result);

	$sql = 'SELECT SUM(filesize) as stat
		FROM ' . ATTACHMENTS_TABLE . '
		WHERE is_orphan = 0';
	$result = $db->sql_query($sql);
	$config->set('upload_dir_size', (float) $db->sql_fetchfield('stat'), false);
	$db->sql_freeresult($result);
}

/**
* Get all the groups for the groups dropdown.
*/
function get_groups()
{
	global $stk_lang;
	static $option_list = null;
	$args = func_get_args();

	// Only run this once
	if ($option_list == null)
	{
		global $db, $user;

		// Just ignore the BOTS and GUESTS groups
		$group_ignore = array('BOTS', 'GUESTS');

		// Get the groups and build the dropdown list
		$sql = 'SELECT group_id, group_type, group_name
			FROM ' . GROUPS_TABLE . '
			WHERE ' . $db->sql_in_set('group_name', $group_ignore, true);
		$result = $db->sql_query($sql);

		$option_list = '';
		while ($row = $db->sql_fetchrow($result))
		{
			$selected	= ($row['group_name'] == 'REGISTERED') ? 'selected=selected' : '';
			$group_name = (($row['group_type'] == GROUP_SPECIAL) && !is_null($stk_lang->lang('G_' . $row['group_name']))) ? $stk_lang->lang('G_' . $row['group_name']) : $row['group_name'];
			$option_list .= "<option value='{$row['group_id']}'{$selected}>{$group_name}</option>";
		}

		$db->sql_freeresult($result);
	}

	// Remove the selected statement if we are displaying the leaderships group list
	if (isset($args[1]))
	{
		if ($args[1] == 'groupleader')
		{
			return str_replace('selected=selected', '', $option_list);
		}
	}

	return $option_list;
}

function delete_style($style)
{
	global $db, $stk_lang, $config;

	$id = $style['style_id'];
	$path = $style['style_path'];
	$default_style = $config['default_style'];

	// Check if style has child styles
	$sql = 'SELECT style_id, style_path, style_name, style_parent_id
		FROM ' . STYLES_TABLE . '
		WHERE style_parent_id = ' . (int) $id . " OR style_parent_tree = '" . $db->sql_escape($path) . "'";
	$result = $db->sql_query($sql);

	$conflict = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	if ($conflict !== false)
	{
		// try to delete parent
		if (!delete_style($conflict))
		{
			return $stk_lang->lang('STYLE_UNINSTALL_DEPENDENT', $style['style_name']);
		}
	}

	// Change default style for users
	$sql = 'UPDATE ' . USERS_TABLE . '
		SET user_style = ' . (int) $default_style . '
		WHERE user_style = ' . $id;
	$db->sql_query($sql);

	// Uninstall style
	$sql = 'DELETE FROM ' . STYLES_TABLE . '
		WHERE style_id = ' . $id;
	$db->sql_query($sql);

	delete_files($path);
	return true;
}

function delete_files($path, $dir = '')
{
	global $phpbb_root_path;

	$styles_path = '' . $phpbb_root_path . 'styles/';
	$dirname = $styles_path . $path . $dir;
	$result = true;

	$dp = @opendir($dirname);

	if ($dp)
	{
		while (($file = readdir($dp)) !== false)
		{
			if ($file == '.' || $file == '..')
			{
				continue;
			}
			$filename = $dirname . '/' . $file;
			if (is_dir($filename))
			{
				if (!delete_files($path, $dir . '/' . $file))
				{
					$result = false;
				}
			}
			else
			{
				if (!@unlink($filename))
				{
					$result = false;
				}
			}
		}
		closedir($dp);
	}
	if (!@rmdir($dirname))
	{
		return false;
	}

	return $result;
}
function output($msg)
{
	global $template;

	$template->assign_vars(array(
		'OUTPUT'	=> $msg,
	));
}

function check_json($dir, $file_name)
{
	global $phpbb_root_path, $stk_lang, $default_lang, $user;

	$stk_lang->add_lang('ext_cleaner');

	if (file_exists($phpbb_root_path . $dir . '/' . $file_name . '.json'))
	{
		$string = file_get_contents($phpbb_root_path . $dir . '/' . $file_name . '.json');

		json_decode($string);

		switch(json_last_error()) {
			case JSON_ERROR_NONE:
				$message = $stk_lang->lang('EXT_JSON_ERROR_NONE', $file_name);
				$error_type = JSON_ERROR_NONE;
			break;
			case JSON_ERROR_DEPTH:
				$message = $stk_lang->lang('EXT_JSON_ERROR_DEPTH', $file_name);
				$error_type = JSON_ERROR_DEPTH;
			break;
			case JSON_ERROR_STATE_MISMATCH:
				$message = $stk_lang->lang('EXT_JSON_ERROR_STATE_MISMATCH', $file_name);
				$error_type = JSON_ERROR_STATE_MISMATCH;
			break;
			case JSON_ERROR_CTRL_CHAR:
				$message = $stk_lang->lang('EXT_JSON_ERROR_CTRL_CHAR', $file_name);
				$error_type = JSON_ERROR_CTRL_CHAR;
			break;
			case JSON_ERROR_SYNTAX:
				$message = $stk_lang->lang('EXT_JSON_ERROR_SYNTAX', $file_name);
				$error_type = JSON_ERROR_SYNTAX;
			break;
			case JSON_ERROR_UTF8:
				$message = $stk_lang->lang('EXT_JSON_ERROR_UTF8', $file_name);
				$error_type = JSON_ERROR_UTF8;
			break;
			case JSON_ERROR_RECURSION:
				$message = $stk_lang->lang('EXT_JSON_ERROR_RECURSION', $file_name);
				$error_type = JSON_ERROR_RECURSION;
			break;
			case JSON_ERROR_INF_OR_NAN:
				$message = $stk_lang->lang('EXT_JSON_ERROR_INF_OR_NAN', $file_name);
				$error_type = JSON_ERROR_INF_OR_NAN;
			break;
			case JSON_ERROR_UNSUPPORTED_TYPE:
				$message = $stk_lang->lang('EXT_JSON_ERROR_UNSUPPORTED_TYPE', $file_name);
				$error_type = JSON_ERROR_UNSUPPORTED_TYPE;
			break;
			case JSON_ERROR_INVALID_PROPERTY_NAME:
				$message = $stk_lang->lang('EXT_JSON_ERROR_INVALID_PROPERTY_NAME', $file_name);
				$error_type = JSON_ERROR_INVALID_PROPERTY_NAME;
			break;
			case JSON_ERROR_UTF16:
				$message = $stk_lang->lang('EXT_JSON_ERROR_UTF16', $file_name);
				$error_type = JSON_ERROR_UTF16;
			break;
			default:
			$message = $stk_lang->lang('EXT_JSON_ERROR_UNKNOWN', $file_name);
			$error_type = 100000;
			break;
		}

		return array('message' => $message, 'error_type' => $error_type);
	}
	else
	{
		return array('message' => $stk_lang->lang('EXT_NO_JSON', $file_name, $dir), 'error_type' => 150000);
	}
}

/**
* Purge directory with all elements
*
* @return null
*/
function purge_dir($path, $check = false)
{
	// Purge all files
	try
	{
		$iterator = new \DirectoryIterator($path);
	}
	catch (\Exception $e)
	{
		return;
	}

	foreach ($iterator as $fileInfo)
	{
		if ($fileInfo->isDot())
		{
			continue;
		}
		$filename = $fileInfo->getFilename();
		if ($fileInfo->isDir())
		{
			remove_dir($path, $fileInfo->getPathname());
		}

		if ($check && !is_writable($path))
		{
			// E_USER_ERROR - not using language entry - intended.
			trigger_error('Unable to remove files within ' . $path . '. Please check directory permissions.', E_USER_ERROR);
		}

		remove_file($path, $filename);
	}

	if (function_exists('opcache_reset'))
	{
		@opcache_reset();
	}
}

/**
* Removes/unlinks file
*
* @param string $filename Filename to remove
* @param bool $check Check file permissions
* @return bool True if the file was successfully removed, otherwise false
*/
function remove_file($path, $filename,  $check = false)
{
	if ($check && !is_writable($path))
	{
		// E_USER_ERROR - not using language entry - intended.
		trigger_error('Unable to remove files within ' . $path . '. Please check directory permissions.', E_USER_ERROR);
	}

	return @unlink($filename);
}

/**
* Remove directory
*
* @param string $dir Directory to remove
*
* @return null
*/
function remove_dir($path, $dir)
{
	try
	{
		$iterator = new \DirectoryIterator($dir);
	}
	catch (\Exception $e)
	{
		return;
	}

	foreach ($iterator as $fileInfo)
	{
		if ($fileInfo->isDot())
		{
			continue;
		}

		if ($fileInfo->isDir())
		{
			remove_dir($path, $fileInfo->getPathname());
		}
		else
		{
			remove_file($path, $fileInfo->getPathname());
		}
	}

	@rmdir($dir);
}

/**
* Wrapper for version_compare() that allows using uppercase A and B
* for alpha and beta releases.
*
* See http://www.php.net/manual/en/function.version-compare.php
*
* @param string $version1		First version number
* @param string $version2		Second version number
* @param string $operator		Comparison operator (optional)
*
* @return mixed					Boolean (true, false) if comparison operator is specified.
*								Integer (-1, 0, 1) otherwise.
*/
function stk_version_compare($version1, $version2, $operator = null)
{
	$version1 = strtolower($version1);
	$version2 = strtolower($version2);

	if (is_null($operator))
	{
		return version_compare($version1, $version2);
	}
	else
	{
		return version_compare($version1, $version2, $operator);
	}
}
