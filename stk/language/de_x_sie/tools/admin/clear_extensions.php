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
	'CLEAR_EXTENSIONS'				=> 'Kontrolle und Verwaltung von Erweiterungen (Notfallmodus)',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Hier können sie <strong>Installierte</strong> Erweiterungen deaktivieren/aktivieren oder entfernen.',
	'EXT_PATH'						=> 'Pfad relativ zum Ordner %sext/',
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
	'NO_EXTENSIONS_TITLE'			=> 'Extensions',
	'NO_EXTENSIONS_TEXT'			=> 'Keine installierten Extensions',

	'EXT_VERSIONCHECK_FAIL'			=> 'Die Informationen über die aktuelle Version konnten nicht abgerufen werden.',
	'EXT_NOT_UP_TO_DATE'			=> 'Neue Version',
	'EXT_INSTALL_VERSION'			=> 'Installierte Version',
	'EXT_DIR'						=> 'Verzeichnis',
	'EXT_DIR_EXIT'					=> 'Verzeichnis ist vorhanden',
	'EXT_DIR_NO_EXIT'				=> 'Verzeichnis ist nicht vorhanden',
	'EXT_STATUS'					=> 'Status',
	'EXT_STATUS_ON'					=> 'Aktiviert',
	'EXT_STATUS_OFF'				=> 'Deaktiviert',
	'EXT_COMPOSER'					=> 'composer.json',
	'VALID'							=> 'Valide',
	'NOT_VALID'						=> 'Nicht valide',

	'EXT_JSON_ERROR_NONE'					=> 'Keine Fehler in der Datei: %s.json',
	'EXT_JSON_ERROR_DEPTH'					=> 'Maximale Stacktiefe überschritten in der Datei: %s.json',
	'EXT_JSON_ERROR_STATE_MISMATCH'			=> 'Ungültiges oder missgestaltetes JSON in der Datei: %s.json',
	'EXT_JSON_ERROR_CTRL_CHAR'				=> 'Steuerzeichenfehler, möglicherweise unkorrekt kodiert in der Datei: %s.json',
	'EXT_JSON_ERROR_SYNTAX'					=> 'Syntaxfehler in der Datei: %s.json',
	'EXT_JSON_ERROR_UTF8'					=> 'Missgestaltete UTF-8 Zeichen, möglicherweise fehlerhaft kodiert in der Datei: %s.json',
	'EXT_JSON_ERROR_RECURSION'				=> 'Eine oder mehrere rekursive Referenzen im zu kodierenden Wert in der Datei: %s.json',
	'EXT_JSON_ERROR_INF_OR_NAN'				=> 'Eine oder mehrere NAN oder INF Werte im zu kodierenden Wert in der Datei: %s.json',
	'EXT_JSON_ERROR_UNSUPPORTED_TYPE'		=> 'Ein Wert eines Typs, der nicht kodiert werden kann, wurde übergeben in der Datei: %s.json',
	'EXT_JSON_ERROR_INVALID_PROPERTY_NAME'	=> 'Ein Eigenschaftsname, der nicht kodiert werden kann, wurde übergeben in der Datei: %s.json',
	'EXT_JSON_ERROR_UTF16'					=> 'Deformierte UTF-16 Zeichen; möglicherweise fehlerhaft kodiert in der Datei: %s.json',
	'EXT_JSON_ERROR_UNKNOWN'				=> 'Unbekannter Fehler in der Datei: %s.json',
	'EXT_NO_JSON'							=> 'Die erforderliche Datei %s.json der Erweiterung „%s“ konnte nicht gefunden werden',
));
