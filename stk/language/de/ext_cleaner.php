<?php
/**
*
* @package Support Toolkit Russian language Sheer
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
	'EXT_PATH'					=> 'Pfad relativ zum Ordner %sext/',
	'MISSING_PATH'				=> 'Fehlender Ordner ',
	'S_ACTIVE'					=> ' (enabled) ',
	'S_OFF'						=> ' (disabled) ',
	'EXT_NAME'					=> 'Extension Name',
	'CLICK_TO_CLEAR'			=> 'Die Datensätze ausgewählter installierter Extensions werden aus der Datenbank gelöscht und die Extensions werden deaktiviert, Daten, die sich auf diese Extensions beziehen, wie z.B. Tabellen oder Konfigurationswerte, bleiben jedoch erhalten.',
	'CLICK_TO_OFF'				=> 'Ausgewählte Extensions werden deaktiviert. Wenn die Erweiterung deaktiviert wird, bleiben die Dateien, Daten und Einstellungen erhalten,<br /> aber die durch diese Erweiterung hinzugefügte Funktionalität ist deaktiviert.',
	'OFF_EXT'					=> 'Deaktivieren',
	'CLEAR_EXT_SUCCESS'			=> 'Ausgewählte Extensions wurden erfolgreich gelöscht.',
	'OFF_EXT_SUCCESS'			=> 'Ausgewählte Extensions wurden erfolgreich deaktiviert.',
	'ON_EXT_SUCCESS'			=> 'Ausgewählte Extensions wurden erfolgreich aktiviert.',
	'NO_EXT_SELECTED'			=> 'Nichts ausgewählt!',
	'EXT_DELETE'				=> 'Extensions entfernen',
	'EXT_OFF'					=> 'Extensions deaktivieren',
	'EXT_MISSING_PATH'			=> 'Die “%s” Extension ist nicht gültig.<br />',
	'NO_EXTENSIONS_TITLE'		=> 'Extensions',
	'NO_EXTENSIONS_TEXT'		=> 'Keine installierten Extensions gefunden',
	'OFF_EXT'					=> 'Deaktivieren',
	'ON_EXT'					=> 'Aktivieren',
	'CLICK_TO_ON'				=> 'Ausgewählte Extensions werden berücksichtigt.',
	'EMPTY_PASSWD'				=> 'Ohne Passwort ist ein Login nicht möglich',
	'WRONG_PASSWD'				=> 'Passwort falsch',
	'DB_CONNECT_ERROR'			=> 'Verbindungsfehler: %s',
	'DB_CONNECT_PASS_ERROR'		=> 'Verbindungsfehler:',
	'TABLE_NOT_EXISTS'			=> 'Das Datenbanktabellen-Präfix ist wahrscheinlich falsch oder die Tabelle existiert nicht.',
));
