<?php
/**
*
* @package Support Toolkit - Clear Extensions Russian language
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
	'CLEAR_EXTENSIONS'				=> 'Проверка и управление расширениями (аварийный режим)',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Здесь вы можете отключить/включить или удалить <strong>установленные</strong> расширения.',
	'EXT_PATH'						=> 'Путь относительно папки ' . PHPBB_ROOT_PATH . 'ext/',
	'MISSING_PATH'					=> 'Отсутствующая папка',
	'S_ACTIVE'						=> ' (активно) ',
	'S_OFF'							=> ' (отключено) ',
	'EXT_NAME'						=> 'Имя расширения',
	'CLICK_TO_CLEAR'				=> 'Записи о выбранных установленных расширениях будут удалены из базы данных и расширения отключены, однако данные, относящиеся к этим расширениям, такие как таблицы или значения конфигурации, останутся. Для их удаления воспользуйтесь <b>ИНСТРУМЕНТЫ ПОДДЕРЖКИ</b> --> Проверка изменений в Базе Данных',
	'CLICK_TO_OFF'					=> 'Выбранные расширения будут отключены. При отключении расширения его файлы, данные и настройки сохраняются, но добавленная этим расширением функциональность удаляется.',
	'OFF_EXT'						=> 'Отключить',
	'CLICK_TO_ON'					=> 'Выбранные расширения будут включены.',
	'ON_EXT'						=> 'Включить',
	'ON_EXT_SUCCESS'				=> 'Выбранные расширения успешно включены.',
	'CLEAR_EXT_SUCCESS'				=> 'Выбранные расширения успешно удалены.',
	'OFF_EXT_SUCCESS'				=> 'Выбранные расширения успешно отключены.',
	'NO_EXT_SELECTED'				=> 'Ничего не выбрано!',
	'EXT_DELETE'					=> 'Удалить расширения',
	'EXT_DELETE_CONFIRM'			=> 'Вы действительно желаете удалить эти расширения?',
	'EXT_OFF'						=> 'Отключить расширения',
	'EXT_OFF_CONFIRM'				=> 'Вы действительно желаете отключить эти расширения?',
	'EXT_MISSING_PATH'				=> 'Расширение «%s» не является совместимым.<br />',
	'NO_COMPOSER'					=> 'Запрашиваемый файл не найден: ' . PHPBB_ROOT_PATH . 'ext/%s/composer.json',
	'NO_EXTENSIONS_TITLE'			=> 'Расширения',
	'NO_EXTENSIONS_TEXT'			=> 'Не найдено ни одного установленного расширения',

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
