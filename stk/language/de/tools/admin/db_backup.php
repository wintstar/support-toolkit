<?php
/**
 *
 * @package Support Toolkit - Database Backup English language Sheer
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
	'DB_BACKUP'					=> 'Datenbank Backup',
	'DB_BACKUP_EXPLAIN'			=> 'Hier kannst Du alle Deine phpBB bezogenen Daten sichern. Du kannst das resultierende Archiv in Deinem <samp>store/</samp> Ordner speichern, oder auf deinem Desktop speichern. Abhängig von Deiner Serverkonfiguration kannst Du die Datei in verschiedenen Formaten komprimieren lassen.',
	'DB_BACKUP_EXPLAIN_DUMPER'	=> 'Das resultierende Backup ist mit dem <a href ="http://www.mysqldumper.net/" target="_blank" /><strong>MySQLDumper</strong></a> kompatibel, welches die Wiederherstellung von einzelnen Datenbanktabellen unterstützt.',

	'SELECT_TABLE'		=> 'Tabellen',
	'MARK_ALL'			=> 'Alles auswählen',
	'EXPAND'			=> 'Erweitern',
	'COLLAPSE'			=> 'Zusammenklappen',
	'UNMARK_ALL'		=> 'Alles Abwählen',
	'GZIP'				=> 'Kompression',
	'SAVE'				=> 'Speichern auf dem Server',
	'DOWNLOAD'			=> 'Download',
	'BACKUP_SUCCESS'	=> 'Die Backupdatei wurde erfolgreich erstellt.',
	'BACKUP_ACTION'		=> 'Aktion',
	'BACKUP_TYPE'		=> 'Backup Type',
	'FULL'				=> 'Voll',
	'STRUCTURE'			=> 'Nur Struktur',
	'DATA'				=> 'Nur Daten',
	'SCREEN'			=> 'Auf dem Bildschirm anzeigen'
));
