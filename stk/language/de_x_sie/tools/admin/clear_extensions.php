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
	'CLEAR_EXTENSIONS'				=> 'Verifikation und Management der Extensions',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Hier kannst Du <b>installierte</b> Extensions verwalten.',
	'EXT_PATH'						=> 'Pfad relativ zum Ordner ' . PHPBB_ROOT_PATH . 'ext/',
	'MISSING_PATH'					=> 'Fehlender Ordner',
	'S_ACTIVE'						=> ' (aktiviert) ',
	'S_OFF'							=> ' (deaktiviert) ',
	'EXT_NAME'						=> 'Extension name',
	'CLICK_TO_CLEAR'				=> 'Aufzeichnungen ausgewählter installierter Extensions werden aus Datenbank und Extension gelöscht, aber Daten, die sich auf diese Extensions wie Tabellen oder Konfigurationswerte beziehen, bleiben erhalten. Um sie zu löschen, verwende den <b>SUPPORT TOOLS</b> -> Datenbank Cleaner',
	'CLICK_TO_OFF'					=> 'Ausgewählte Extensions werden deaktiviert',
	'OFF_EXT'						=> 'Abschalten',
	'CLEAR_EXT_SUCCESS'				=> 'Ausgewählte Extensions erfolgreich entfernt.',
	'CLICK_TO_ON'					=> 'Ausgewählte Extensions werden aktiviert.',
	'ON_EXT'						=> 'Einschalten',
	'ON_EXT_SUCCESS'				=> 'Ausgewählte Extensions erfolgreich aktiviert.',
	'OFF_EXT_SUCCESS'				=> 'Ausgewählte Extensions wurden erfolgreich deaktiviert.',
	'NO_EXT_SELECTED'				=> 'Nichts ausgewählt!',
	'EXT_DELETE'					=> 'Extension entfernen',
	'EXT_DELETE_CONFIRM'			=> 'Möchtest Du diese Extensions wirklich löschen?',
	'EXT_OFF'						=> 'Deaktiviere Extensions',
	'EXT_OFF_CONFIRM'				=> 'Möchtest Du diese Extensions wirklich deaktivieren?',
	'EXT_MISSING_PATH'				=> 'Extension «%s» ist nicht kompatibel.<br />',
	'NO_COMPOSER'					=> 'Datei nicht gefunden: ' . PHPBB_ROOT_PATH . 'ext/%s/composer.json',
	'NO_EXTENSIONS_TITLE'			=> 'Extensions',
	'NO_EXTENSIONS_TEXT'			=> 'Keine installierten Extensions',
	'VERSION_CHECK_FAIL'			=> 'Keine Informationen zur neuesten Version erhalten'
));
