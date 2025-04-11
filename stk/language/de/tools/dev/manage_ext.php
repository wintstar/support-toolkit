<?php
/**
*
* @package Support Toolkit - phpbb English language Sheer
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

/**
* DO NOT CHANGE
*/
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
	'MANAGE_EXT'				=> 'Verwalten von Extensions Dateien',
	'EXT_NAME'					=> 'Extension Name',
	'EXTENSIONS_FILES'			=> 'File extensions',
	'EXTENSIONS_FILES_EXPLAIN'	=> 'Hier kannst Du neue Dateien oder Ordner Deiner Extensions anzeigen, umbenennen, löschen oder erstellen.',
	'EXPAND'					=> 'Erweitern / Reduzieren',
	'SAVE'						=> 'Speichern',
	'SAVED'						=> 'Datei %s wurde erfolgreich gespeichert',
	'EDITED'					=> 'Datei %s wurde erfolgreich geändert',
	'FAIL_CREATE_FILE'			=> 'Erstellen der Datei fehlgeschlagen %s',
	'FAIL_EXISTS'				=> 'Datei %s existiert bereits',
	'FAIL_CREATE_DIR'			=> 'Ordner konnte nicht erstellt werden %s',
	'ADD_NEW'					=> 'Neue Datei hinzufügen',
	'PATH'						=> 'Pfad relativ zum Ordner %s/',
	'PATH_EXPLAIN'				=> 'Wenn der Ordner nicht existiert, wird er erstellt',
	'FILE'						=> 'Dateiname',
	'CONTENT'					=> 'Code',
	'EXT_PATH'					=> 'Pfad relativ zum Ordner ' . PHPBB_ROOT_PATH . 'ext/',
	'DELETE'					=> 'Löschen',
	'RENAME'					=> 'Umbenennen',
	'DELETE_OK'					=> 'Datei %s wurde erfolgreich entfernt',
	'DELETE_FAIL'				=> 'Datei konnte nicht entfernt werden %s',
	'DELETE_FOLDER_OK'			=> 'Ordner %s wurde erfolgreich entfernt',
	'DELETE_FOLDER_FAIL'		=> 'Fehler beim Löschen des Ordners %s',
	'NEW_NAME'					=> 'Neuer Dateiname',
	'RENAME_OK'					=> 'Datei %1s wurde erfolgreich umbenannt in %2s',
	'RENAME_FAIL'				=> 'Fehler beim Umbenennen der Datei %s',
	'RENAME_FOLDER_OK'			=> 'Ordner %1s wurde erfolgreich umbenannt in %2s',
	'RENAME_FOLDER_FAIL'		=> 'Ordner konnte nicht umbenannt werden %s',

	'ENABLED'					=> 'Aktiv',
	'DISABLED'					=> 'Deaktiviert',
	'NOT_INSTALLED'				=> 'Nicht installiert',
	'NO_EXTENSIONS_FILES'		=> '<strong>Dateien nicht gefunden</strong>.<br />Wahrscheinlich sind keine Erweiterungen installiert, oder es fehlen die Dateien und/oder Ordner installierter Erweiterungen.',
));
