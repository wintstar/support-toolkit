<?php
/**
*
* @package Support Toolkit - Clear Extensions English language
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_EXTENSIONS'				=> 'Control and management of extensions (emergency mode)',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Here you can deactivate/activate or remove <strong>installed</strong> extensions.',
	'EXT_PATH'						=> 'Path relative to the folder %sext/',
	'MISSING_PATH'					=> 'Missing folder',
	'S_ACTIVE'						=> ' (active) ',
	'S_OFF'							=> ' (disabled) ',
	'EXT_NAME'						=> 'Extension name',
	'CLICK_TO_CLEAR'				=> 'Records of selected installed extensions will be deleted from database and extension are disabled, but data related to these extensions, such as tables or configuration values, remain. To delete them, use the <b>SUPPORT TOOLS</b> -> Database Cleaner',
	'CLICK_TO_OFF'					=> 'Selected extensions will be disabled',
	'OFF_EXT'						=> 'Turn off',
	'CLEAR_EXT_SUCCESS'				=> 'Selected extensions successfully removed.',
	'CLICK_TO_ON'					=> 'Selected extensions will be enabled.',
	'ON_EXT'						=> 'Turn on',
	'ON_EXT_SUCCESS'				=> 'Selected extensions successfully enabled.',
	'OFF_EXT_SUCCESS'				=> 'Selected extensions successfully disabled.',
	'NO_EXT_SELECTED'				=> 'Nothing selected!',
	'EXT_DELETE'					=> 'Remove extension',
	'EXT_DELETE_CONFIRM'			=> 'Are you sure you want to delete these extensions?',
	'EXT_OFF'						=> 'Disable extensions',
	'EXT_OFF_CONFIRM'				=> 'Are you sure you want to disable these extensions?',
	'EXT_MISSING_PATH'				=> 'Extension «%s» is not compatible.<br />',
	'NO_EXTENSIONS_TITLE'			=> 'Extensions',
	'NO_EXTENSIONS_TEXT'			=> 'No any installed extensions',

	'EXT_VERSIONCHECK_FAIL'			=> 'The information about the current version could not be called up.',
	'EXT_NOT_UP_TO_DATE'			=> 'New version',
	'EXT_INSTALL_VERSION'			=> 'Installed version',
	'EXT_DIR'						=> 'Directory',
	'EXT_DIR_EXIT'					=> 'Directory is available',
	'EXT_DIR_NO_EXIT'				=> 'Directory is not available',
	'EXT_STATUS'					=> 'Status',
	'EXT_STATUS_ON'					=> 'Activated',
	'EXT_STATUS_OFF'				=> 'Deactivated',
	'EXT_COMPOSER'					=> 'composer.json',
	'VALID'							=> 'Valid',
	'NOT_VALID'						=> 'Not valid',

	'EXT_JSON_ERROR_NONE'					=> 'No error has occurred in file: %s.json',
	'EXT_JSON_ERROR_DEPTH'					=> 'The maximum stack depth has been exceeded in file: %s.json',
	'EXT_JSON_ERROR_STATE_MISMATCH'			=> 'Invalid or malformed JSON in file: %s.json',
	'EXT_JSON_ERROR_CTRL_CHAR'				=> 'Control character error, possibly incorrectly encoded in file: %s.json',
	'EXT_JSON_ERROR_SYNTAX'					=> 'Syntax error in file: %s.json',
	'EXT_JSON_ERROR_UTF8'					=> 'Malformed UTF-8 characters, possibly incorrectly encoded in file: %s.json',
	'EXT_JSON_ERROR_RECURSION'				=> 'One or more recursive references in the value to be encoded in file: %s.json',
	'EXT_JSON_ERROR_INF_OR_NAN'				=> 'One or more NAN or INF values in the value to be encoded  in file: %s.json',
	'EXT_JSON_ERROR_UNSUPPORTED_TYPE'		=> 'A value of a type that cannot be encoded was given in file: %s.json',
	'EXT_JSON_ERROR_INVALID_PROPERTY_NAME'	=> 'A property name that cannot be encoded was given in file: %s.json',
	'EXT_JSON_ERROR_UTF16'					=> 'Malformed UTF-16 characters, possibly incorrectly encoded in file: %s.json',
	'EXT_JSON_ERROR_UNKNOWN'				=> 'Unknown error in file: %s.json',
	'EXT_NO_JSON'							=> 'The required file %s.json with the extension “%s” could not be found',
));
