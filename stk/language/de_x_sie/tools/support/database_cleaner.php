<?php
/**
*
* @package Support Toolkit - Database Cleaner
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
	'ACP_EXTENSION_GROUPS'			=> 'Hinzugefügte Extensions Gruppen',
	'ACP_MODULES_SETTINGS'			=> 'Nach weiteren Modulen suchen',

	'BOARD_DISABLE_REASON'			=> 'Das Board ist wegen einer Datenbankwartung derzeit deaktiviert. Bitte habe etwas Geduld.!',
	'BOARD_DISABLE_SUCCESS'			=> 'Das board wurde erfolgreich deaktiviert!',

	'COLUMNS'						=> 'Spalten',
	'CONFIG_SETTINGS'				=> 'Konfigurations-Einstellungen',
	'CONFIG_UPDATE_SUCCESS'			=> 'Die Konfigurations-Einstellungen wurden erfolgreich aktualisiert!',
	'CONTINUE'						=> 'Fortfahren',

	'DATABASE_CLEANER'				=> 'Datenbank-Bereinigung',
	'DATABASE_CLEANER_BREAK'		=> 'Die Datenbank-Bereinigung wurde abgebrochen!<br /><br />Der Cache wurde gerleert und der Zugriff auf das Board wurde wiederhergestellt.',
	'DATABASE_CLEANER_EXTRA'		=> 'Jedes andere Element ist ein zusätzliches Element, das von einer Modifikation hinzugefügt wurde. <strong>Wenn das Kontrollkästchen aktiviert ist, wird es entfernt</strong>.',
	'DATABASE_CLEANER_MISSING'		=> 'Alle Elemente mit einem roten Hintergrund sind fehlende Elemente, die hinzugefügt werden sollten. <strong>Wenn das Kontrollkästchen aktiviert ist, wird es angelegt</strong>.',
	'DATABASE_CLEANER_SUCCESS'		=> 'Die Datenbank-Bereinigung wurde erfolgreich abgeschlossen!<br /><br />Bitte denke daran, deine Datenbank erneut zu sichern.',
	'DATABASE_CLEANER_WARNING'		=> 'Diese Tool kommt OHNE GEWÄHRLEISTUNG. Daher sollte vor seiner Benutzung die komplette Datenbank gesichert werden.<br /><br />Stelle sicher, dass du ein aktuelles und vollständiges Datenbank-Backup hast!',
	'DATABASE_CLEANER_WELCOME'		=> 'Willkommen beim Tool zur Datenbank-Bereinigung!<br /><br />Diese Tool wurde entwickelt, um zusätzliche Felder, Zeilen und Tabellen zu entfernen, die nicht in der Standard-Installation von phpBB 3 vorgesehen sind. Auch werden fehlende Datenbankelemente neu erstellt.<br /><br />Wenn du bereit bist, die Datenbank-Bereinigung zu starten, klicke die „Fortfahren“-Schaltfläche. (Das Board wird deaktiviert, bis der Vorgang abgeschlossen ist.)',
	'DATABASE_INDEXES_SUCCESS'		=> 'Indizes erfolgreich aktualisiert!',
	'DATABASE_COLUMNS_SUCCESS'		=> 'Die Datenbankspalten wurden erfolgreich aktualisiert!',
	'DATABASE_TABLES'				=> 'Datenbank Tabellen',
	'DATABASE_TABLES_SUCCESS'		=> 'Die Datenbank-Tabellen wurden erfolgreich aktualisiert!',
	'DATABASE_ROLE_DATA_SKIP'		=> 'Neuinstallation von Systemrollen ignoriert',
	'DATABASE_ROLE_DATA_SUCCESS'	=> 'Die phpBB-Systemrollen wurden erfolgreich wiederhergestellt!',
	'DATABASE_ROLES_SUCCESS'		=> 'Die Rollen wurden erfolgreich aktualisiert!',
	'DATAFILE_NOT_FOUND'			=> 'Das Support Toolkit konnte die erforderliche Datendatei für deine phpBB-Version nicht finden!',

	'EMPTY_PREFIX'					=> 'Kein Tabellen-Präfix',
	'EMPTY_PREFIX_CONFIRM'			=> 'Die Datenbank-Bereinigung soll Änderungen an den Tabellen deiner Datenbank durchführen. Da du keinen Tabellen-Präfix verwendest, können dadurch Tabellen anderer Anwendungen geändert werden. Bist du sicher, dass der Vorgang fortgesetzt werden soll?',
	'EMPTY_PREFIX_EXPLAIN'			=> 'Die Datenbank-Bereinigung hat festgestellt, dass du keinen Präfix für die phpBB-Tabellen verwendest. Daher prüft die Datenbank-Bereinigung <strong>alle</strong> Tabellen in der Datenbank. Sei vorsichtig, wenn du den Vorgang fortsetzt und entferne alle Tabellen, die nicht von phpBB stammen, aus der Auswahl. Andernfalls werden die Datenbank-Tabellen beschädigt, die nicht zu phpBB gehören.<br />Wenn du dir nicht sicher bist, wie du diesen Vorgang durchführen sollst, dann frag im <a href="http://www.phpbb.com/community/viewforum.php?f=46">phpBB-Support-Forum</a> nach Unterstützung (<a href="https://www.phpbb.de/go/3/supportforum">Deutschsprachiger Support</a>).',
	'ERROR'							=> 'Fehler',
	'EXTRA'							=> 'Zusätzlich',
	'EXTENSION_FILE_GROUPS'			=> 'Anhänge Dateityp-Gruppen',
	'EXTENSION_GROUPS_SETTINGS'		=> 'Dateityp-Gruppen Einstellungen',
	'EXTENSION_GROUPS_SUCCESS'		=> 'Die Dateityp-Gruppen wurden erfolgreich zurückgesetzt',
	'EXTENSIONS_SUCCESS'			=> 'Die Datei-Erweiterungen wurden erfolgreich zurückgesetzt',

	'FINAL_STEP'					=> 'Dies ist die letzte auszuführende Aktion.<br /><br />Das Board wird nun wieder aktiviert und der Cache geleert.',

	'GO_TO_ACP'						=> ' --&raquo; gehe zum Administrationsbereich ',

	'INSTRUCTIONS'					=> 'Anweisungeng',
	'INTRODUCTION'					=> 'Von vorn anfangen',
	'INDEXES'						=> 'DB-Tabellenindizes',

	'MISSING'						=> 'Fehlend',
	'MODULE_ADD'					=> 'Modul hinzufügen',
	'MODULE_ALREADY_EXIST'			=> 'Modul existiert bereits',
	'MODULE_UPDATE_SUCCESS'			=> 'Die Module wurden erfolgreich aktualisiert!',

	'NEXT_STEP'						=> 'Nächster Schritt',
	'NO_BOT_GROUP'					=> 'Die Bots konnten nicht zurückgesetzt werden, da die Bot-Gruppe fehlt.',
	'NO_PARENT'						=> 'Das übergeordnete Modul ist nicht vorhanden. <br /> Fehler',

	'PERMISSION_SETTINGS'			=> 'Berechtigungs-Optionen',
	'PERMISSION_UPDATE_SUCCESS'		=> 'Die Berechtigungs-Optionen wurden erfolgreich aktualisiert!',
	'PHPBB_VERSION_NOT_SUPPORTED'	=> 'Die verwendete Version von phpBB 3 wird nicht unterstützt (oder es fehlen Dateien des Support Toolkits).<br />phpBB 3.2.0+ sollte unterstützt werden, aber es kann etwas dauern, bis das Support Toolkit nach einer neu herausgegebenen Version von phpBB 3.2 aktualisiert wird.',

	'QUIT'							=> 'Abbrechen',

	'RESET_ACP_MODULES_SKIP'		=> 'Prüfung der zusätzlichen Module übersprungen',
	'RESET_ACP_MODULE_SUCCESS'		=> 'Überprüfen von zusätzlichen Modulen ist erfolgt',
	'RESET_BOTS'					=> 'Bots zurücksetzen',
	'RESET_BOTS_EXPLAIN'			=> 'Willst du die Bots auf die Standard-Liste von phpBB 3 zurücksetzen? Alle existierenden Bots werden zurückgesetzt und durch die Standard-Liste ersetzt.',
	'RESET_BOTS_SKIP'				=> 'Die Rücksetzng der Bots wurde übersprungen',
	'RESET_BOT_SUCCESS'				=> 'Die Bots wurden erfolgreich zurückgesetzt!',
	'RESET_MODULES'					=> 'Module zurücksetzen',
	'RESET_MODULES_EXPLAIN'			=> 'Willst du die Module auf die Standard-Module von phpBB 3 zurücksetzen? Alle existierenden Module werden entfernt und durch die Standard-Module ersetzt.',
	'RESET_MODULES_SKIP'			=> 'Die Rücksetzung der Module würde übersprungen',
	'RESET_MODULE_SUCCESS'			=> 'Die Module wurden erfolgreich zurückgesetzt!',
	'RESET_REPORT_REASONS'			=> 'Gründe für eine Meldung zurücksetzen',
	'RESET_REPORT_REASONS_EXPLAIN'	=> 'Willst du die Gründe für eine Meldung auf den Standard zurücksetzen? Dadurch werden alle hinzugefügten Gründe entfernt!',
	'RESET_REPORT_REASONS_SKIP'		=> 'Die Gründe für eine Meldung wurden nicht zurückgesetzt',
	'RESET_REPORT_REASONS_SUCCESS'	=> 'Die Gründe für eine Meldung wurden erfolgreich zurückgesetzt!',
	'RESET_ROLE_DATA'				=> 'Rollen zurücksetzen',
	'RESET_ROLE_DATA_EXPLAIN'		=> 'Dieser Vorgang setzt die eingebauten Rollen von phpBB auf ihre Standardwerte zurück. Dieser Vorgang sollte durchgeführt werden, wenn im vorhergenden Schritt Änderungen durchgeführt wurden.',
	'ROLE_SETTINGS'					=> 'Rollen-Einstellungen',
	'ROWS'							=> 'Einträge',

	'SECTION_NOT_CHANGED_TITLE'		=> array(
		'tables'			=> 'Tabellen wurden nicht verändert',
		'indexes'			=> 'Indizes wurden nicht verändert',
		'columns'			=> 'Spalten wurden nicht verändert',
		'config'			=> 'Konfigurations-Einstellungen wurden nicht verändert',
		'extension_groups'	=> 'Dateityp-Gruppen wurden nicht verändert',
		'extensions'		=> 'Datei-Erweiterungen wurden nicht verändert',
		'permissions'		=> 'Berechtigungen wurden nicht verändert',
		'groups'			=> 'Gruppen wurden nicht verändert',
		'roles'				=> 'Rollen wurden nicht verändert',
		'final_step'		=> 'Abschließender Vorgang',
		'acp_modules'		=> 'Search for additional or missing modules',
	),
	'SECTION_NOT_CHANGED_EXPLAIN'	=> array(
		'tables'			=> 'Die Tabellen der Datenbank wurden nicht verändert',
		'indexes'			=> 'Indizes haben keine neuen / fehlenden Werte',
		'columns'			=> 'Die Spalten der Datenbank-Tabellen wurden nicht verändert',
		'config'			=> 'Die Konfigurations-Tabelle hat keine neuen oder fehlenden Einträge',
		'extension_groups'	=> 'Die Tabelle der Dateityp-Gruppen hat keine neuen oder fehlenden Einträge',
		'extensions'		=> 'Die Standard-Datei-Erweiterungen wurden nicht verändert',
		'permissions'		=> 'Die Berechtigungs-Tabellen wurden nicht verändert',
		'groups'			=> 'Die System-Gruppen von phpBB wurden nicht verändert',
		'roles'				=> 'Es wurden keine Rollen hinzugefügt oder entfernt',
		'final_step'		=> 'Dieser abschließende Vorgang leert den Cache und hebt die Sperre des Boards wieder auf.',
		'acp_modules'		=> 'Es wurden keine zusätzlichen oder fehlenden Module gefunden',
	),
	'SKIP_AND_GO'					=> 'Überspringen & weiter',
	'SKIP_TO'						=> 'Überspringen',
	'SKIP_EXPLAIN'					=> 'Du kannst Aktionen in diesem Schritt überspringen und zu einer anderen Aktion aus der unteren Liste springen:',
	'SUCCESS'						=> 'Erfolgreich',
	'SYSTEM_GROUPS'					=> 'Systemgruppen überprüfen',
	'SYSTEM_GROUP_UPDATE_SUCCESS'	=> 'Die System-Gruppen wurden erfolgreich zurückgesetzt',

	'TYPE'							=> 'Typ',

	'UNSTABLE_DEBUG_ONLY'			=> 'Die Datenbank-Bereinigung kann nur in instabilen Versionen von phpBB <em>(dev, a, b, RC)</em> ausgeführt werden, wenn „DEBUG“ in der phpBB-Konfigurationsdatei aktiviert wurde.',
	'UNDEFINED'						=> 'undefiniert',

	'ARCHIVES'				=> 'Archive',
	'DOCUMENTS'				=> 'Dokumente',
	'DOWNLOADABLE_FILES'	=> 'Herunterladbare Dateien',
	'FLASH_FILES'			=> 'Flash-Dateien',
	'IMAGES'				=> 'Bilder',
	'PLAIN_TEXT'			=> 'Klartext-Dateien',
	'QUICKTIME_MEDIA'		=> 'Quicktime-Dateien',
	'REAL_MEDIA'			=> 'RealMedia-Dateien',
	'WINDOWS_MEDIA'			=> 'Windows Media-Dateien',
));
