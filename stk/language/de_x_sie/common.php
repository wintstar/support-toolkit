<?php
/**
*
* @package Support Toolkit
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
	'BACK_TOOL'							=> 'Zurück zum zuletzt verwendeten Tool',
	'BOARD_FOUNDER_ONLY'				=> 'Nur Gründer dürfen das Support Toolkit nutzen.',

	'CAT_ADMIN'							=> 'Admin-Tools',
	'CAT_ADMIN_EXPLAIN'					=> 'Die Admin-Tools können vom Administrator genutzt werden, um einzelne Aspekte des Forums zu verwalten und häufige Probleme zu lösen.',
	'CAT_DEV'							=> 'Entwickler-Tools',
	'CAT_DEV_EXPLAIN'					=> 'Die Entwickler-Tools können von phpBB- und Mod-Entwicklern genutzt werden, um häufig vorkommende Vorgänge auszuführen.',
	
	'CAT_ERK'							=> 'Notfall-Reparatur',
	'CAT_ERK_EXPLAIN'					=> 'Die Notfall-Reparatur ist ein getrenntes Paket des Support Toolkits, das einige Prüfungen durchführt, um Einstellungen zu finden, die die Funktion von phpBB beeinträchtigen könnten. Klicken Sie <a href="%s">hier</a>, um die Notfall-Reparatur zu starten.',
	
	'CAT_MAIN'							=> 'Allgemein',
	'CAT_MAIN_EXPLAIN'					=> 'Das Support Toolkit (STK) kann genutzt werden, um häufige Probleme einer phpBB 3.2.x-Installation zu lösen. Es fungiert als zweiter Administrations-Bereich und stattet den Administrator mit einer Sammlung von Tools aus. Diese Tools können häufige Probleme lösen, die eine ordnungsgemäße Funktion einer phpBB 3-Installation verhindern können.',
	'CAT_SUPPORT'						=> 'Support-Tools',
	'CAT_SUPPORT_EXPLAIN'				=> 'Die Support-Tools können genutz werden, um eine phpBB 3.2.x-Installation zu reparieren, die nicht mehr funktioniert.',
	'CAT_USERGROUP'						=> 'Benutzer/Gruppen-Tools',
	'CAT_USERGROUP_EXPLAIN'				=> 'Die Benutzer- und Gruppen-Tools können genutzt werden, um Aspekte von Benutzern und Gruppen zu verwalten, die in einer phpBB 3.2.x-Standardinstallation nicht möglich sind.',
	'CONFIG_NOT_FOUND'					=> 'Die Konfigurationsdatei des STK konnte nicht geladen werden. Bitte überprüfen Sie Ihre Installation.',
	'CONFIG_VERSION'					=> 'Versionsnummer in der Datenbank',
	'CONSTANT_VERSION'					=> 'Versionsnummer in /includes/constants.php',

	'DATABASE_INFO'						=> 'Datenbankserver',
	'DOWNLOAD_PASS'						=> 'Passwort-Datei herunterladen',
	'STK_PASSWORD'						=> 'Passwort',

	'EMERGENCY_LOGIN_NAME'				=> 'STK Notfall-Anmeldung',
	'ERK'								=> 'Notfall-Reparatur',

	'FAIL'								=> 'Fehlschlagen',
	'FAIL_REMOVE_PASSWD'				=> 'Die Passwort-Datei konnte nicht entfernt werden. Bitte entferne die Datei von Hand!',

	'GEN_PASS_FAILED'					=> 'Das Support-Toolkit war nicht in der Lage, ein neues Passwort zu erstellen. Bitte versuche es erneut.',
	'GEN_PASS_FILE'						=> 'Passwort-Datei erstellen',
	'GEN_PASS_FILE_EXPLAIN'				=> 'Wenn Sie sich nicht an Ihrem Board anmelden können, können Sie die interne Authentifizierung des Support Toolkits nutzen. Um diese Methode zu benutzen, müssen Sie eine neue Passwort-Datei <a href="%s"><strong>erstellen</strong></a>.',

	'INCORRECT_CLASS'					=> 'Fehlerhafte Klasse in: stk/tools/%1$s.%2$s',
	'INCORRECT_PASSWORD'				=> 'Das Passwort ist falsch',
	'INCORRECT_PHPBB_VERSION'			=> 'Die verwendete phpBB-Version ist mit diesem Tool nicht kompatibel. Dieses Tool funktioniert nur mit phpBB %1$s oder höher.',

	'LOGIN_STK_SUCCESS'					=> 'Sie haben sich erfolgreich angemeldet und werden nun zum Support Toolkit weitergeleitet.',

	'NOTICE'							=> 'Hinweis',

	'PASS_GENERATED'					=> 'Ihre STK Passwort-Datei wurde erfolgreich erstellt!<br/>Das Passwort, das für Sie erstellt wurde, lautet: <em>%1$s</em><br />Dieses Passwort ist gültig bis: <span style="text-decoration: underline;">%2$s</span>. Nach Ablauf dieser Zeit <strong>müssen</strong> Sie eine neue Passwort-Datei erstellen, um den Notfall-Zugang weiterhin nutzen zu können!<br /><br />Benutzen Sie folgende Schaltfläche, um die Datei herunterzuladen. Anschließend müssen Sie die Datei in das „stk“-Verzeichnis des Servers hochladen.',
	'PASS_GENERATED_REDIRECT'			=> 'Sobald Sie die Datei im richtigen Verzeichnis hochgeladen haben, klicken Sie <a href="%s">hier</a>, um zur Anmelde-Seite zurückzukehren.',
	'PLUGIN_INCOMPATIBLE_PHPBB_VERSION'	=> 'Dieses Tool ist nicht mit der verwendeten phpBB-Version kompatibel',
	'PROCEED_TO_STK'					=> '%sWeiter zum Support Toolkit%s',

	'STK_FOUNDER_ONLY'					=> 'Sie müssen Ihre Anmeldung bestätigen, bevor Sie das Support Toolkit nutzen können.',
	'STK_LOGIN'							=> 'Support Toolkit-Anmeldung',
	'STK_LOGIN_WAIT'					=> 'Sie müssen drei Sekunden warten, bevor Sie einen erneuten Anmeldeversuch unternehmen können. Bitte versuch Sie es erneut.',
	'STK_LOGOUT'						=> 'STK beenden',
	'STK_LOGOUT_SUCCESS'				=> 'Sie wurden erfolgreich vom Support Toolkit abgemeldet.',
	'STK_NON_LOGIN'						=> 'Anmeldung zum STK.',
	'STK_OUTDATED'						=> 'Die Installation des Support Toolkits scheint veraltet zu sein. Die aktuell verfügbare Version ist <strong style="color: #008000;">%1$s</strong>, während diese Installation Version <strong style="color: #FF0000;">%2$s</strong> ist.<br /><br />Auf Grund der möglichen großen Auswirkungen dieses Tools auf die Installation wurde es deaktiviert, bis ein Update durchgeführt wurde. Es wird dringend empfohlen, die auf dem Server verwendete Software aktuell zu halten. Weitere Informationen zum letzten Update sind in der <a href="%3$s">Bekanntmachung</a> verfügbar.<br /><br /><em>Wenn diese Meldung nach einem Update angezeigt wird, kann der Versions-Cache <a href="%4$s">hier</a> gelöscht werden.</em>',
	'SUPPORT_TOOL_KIT'					=> 'Support Toolkit',
	'SUPPORT_TOOL_KIT_INDEX'			=> 'Support Toolkit-Übersicht',
	'SUPPORT_TOOL_KIT_PASSWORD'			=> 'Passwort',
	'SUPPORT_TOOL_KIT_PASSWORD_EXPLAIN'	=> 'Da Sie nicht in Ihrem phpBB angemeldet sind, müssen Sie bestätigen, dass Sie der Besitzer des Boards sind, in dem Sie das Support Toolkit-Passwort eingeben.<br /><br /><strong>Cookies MÜSSEN von Ihrem Browser akzeptiert werden, damit Sie angemeldet bleiben.</strong>',

	'TOOL_INCLUTION_NOT_FOUND'			=> 'Dieses Tool versucht eine Datei (%1$s) zu laden, die nicht existiert.',
	'TOOL_NAME'							=> 'Name des Tools',
	'TOOL_NOT_AVAILABLE'				=> 'Das angeforderte Tool ist nicht verfügbar.',

	'USING_STK_LOGIN'					=> 'Sie sind mit der STK-eigenen Anmeldemethode angemeldet. Diese Methode sollte <strong>nur</strong> genutzt werden, wenn Sie sich nicht an Ihrem phpBB anmelden können.<br />Um diese Anmeldemethode zu deaktivieren, klicken Sie <a href="%1$s">hier</a>.',
	'VISITED'							=> 'Letzter Besuch',
	'TOTAL'								=> 'Total',

	'ERK_OK'							=> 'Das STK hat keine kritischen Probleme in Ihrer phpBB-Installation gefunden.',
	'RELOAD_STK'						=> 'Klicke <a href="%s"><b>hier</b></a> um das STK neu zu laden.',
	'RELOAD_ARK'						=> 'Klicke <a href="%s"><b>hier</b></a> um das ARK neu zu laden.',
	'ANONYMOUS_MISSING'					=> 'Das Support Toolkit hat festgestellt, dass der Gast Benutzer in Ihrer Datenbank fehlt, so dass Ihr Board nicht richtig funktioniert.<br />
											Klicke <a href="%s"><b>hier</b></a> und gehe zurück zum Emergency Repair Kit - der Gast Benutzer wird automatisch wiederhergestellt.',

	'ERK_NO_WHITELIST'					=> 'Der BOM-Sniffer konnte die Whitelist nicht lesen und kann die Tests nicht ausführen. Bitte suche Unterstützung in den<a href="%s">Support Foren</a>.',
	'ERK_ISSUE_FOUND'					=> 'Als Teil des "Notfall-Reparatur-Kits" des Support-Toolkits hat das ERK Ihre phpBB-Dateien überprüft und festgestellt, dass einige Dateien ungültige Inhalte enthalten, die möglicherweise den Betrieb Ihres Boards behindern könnten.Das Support-Toolkit hat versucht, diese Probleme zu beheben und erstellt ein Paket mit den korrigierten Dateien <em>(die Backup Versionen finden Sie unter <c>store/bom_sniffer_backup/</c>)</em>. Das Paket mit den neuen Dateien finden Sie im <c>store/bom_sniffer/</c> Verzeichnis. Um die geänderten Dateien auf Ihr Board zu übertragen, <strong>verschieben</strong> Sie die Dateien aus dem "store" an die richtige Stelle und laden das Support Toolkit erneut. Das Toolkit überprüft diese Dateien erneut und leitet Sie zum ERK zurück, wenn keine Fehler aufgetreten sind. .<br /><br /><strong style="color: #ff0000;">Bevor Sie die erzeugten Dateien verschieben, stellen Sie bitte sicher, dass Die generierten Dateien korrekt sind!</strong>  Im Zweifelsfall wenden Sie sich bitte an den Support im <a href="https://www.phpbb.com/community/viewforum.php?f=46">Support Forum</a>.',
	'ERK_STORE_WRITE'					=> 'Der BOM-Sniffer benötigt ein bestehendes und beschreibbares <c>store</c> Verzeichnis!',
	'ERK_REMOVE_DIR'					=> 'Das Support Toolkit versuchte, das reparierte Dateispeicherverzeichnis dieses Tools zu entfernen, war aber nicht in der Lage, dies zu tun. Damit dieses Tool korrekt ausgeführt wird, muss \'<c>%s</c>\' vom Server entfernt werden. Bitte entferne dieses Verzeichnis manuell und gib das Support-Toolkit frei.',
	'BOM_SNIFFER_WRITABLE'				=> 'Der BOM-Sniffer benötigt das existierende und beschreibbare %scache Verzeichnis!',
	'STK_FATAL_ERROR'					=> '<strong style="color: #ff0000;">Das Support-Toolkit hat einen schwerwiegenden Fehler festgestellt.</strong><br /><br />
											 Das Support-Toolkit enthält ein Notfall-Reparatur-Kit (ERK), ein Tool, das entworfen wurde, um bestimmte Fehler zu beheben, die verhindern, dass phpBB funktioniert.
											 Es wird empfohlen, dass Sie das ERK jetzt starten, damit es versuchen kann, den Fehler zu reparieren, den es entdeckt hat.<br />
											 Um das ERK auszuführen, klicken Sie bitte <a href="%serk.%s"><b>hier</b></a>.',
	'CONFIG_REPAIR'						=> 'Repariere die config.php',
	'CONFIG_REPAIR_EXPLAIN'				=> 'Mit diesem Tool können Sie Ihre Konfigurationsdatei regenerieren lassen.',
	'CONFIG_REPAIR_NO_TABLES'			=> 'Es konnten keine phpBB Tabellen mit diesem Tabellenpräfix in dieser Datenbank gefunden werden.',
	'CONFIG_REPAIR_NO_DBMS'				=> 'Es konnte kein geeigneter Datenbanktyp ermittelt werden.',
	'CONFIG_REPAIR_CONNECT_FAIL'		=> 'Datenbankverbindung fehlgeschlagen.',
	'CONFIG_REPAIR_WRITE_ERROR'			=> '<strong style="color: #ff0000;">FEHLER: Konfigurationsdatei konnte nicht geschrieben werden.</strong><br />Bitte kopieren Sie den unten stehenden Text, fügen diesen in eine Datei namens config.php ein und platzieren diese Datei in das Stammverzeichnis Ihres Forums.<br /><br />',

	'CONFIG_LIST'						=> 'Konfigurationsparameter',
	'CONFIG_LIST_EXPLAIN'				=> 'Hier können Sie die Konfiguration ansehen und ändern.',
	'CLOSE'								=> 'Schließen',

	'SELECT_ALL'						=> 'Um alle auszuwählen, bewege den Cursor in das Feld unten und drücke Strg-A (PC), Cmd-A (Mac) <br />Doppelklick wählt ein Wort und dreifachklick die ganze Zeile.',

	'PURGE_CACHE'						=> 'Lösche den Cache',
	'PURGE_CACHE_CONFIRM'				=> 'Sind Sie sicher, dass Sie den Cache löschen möchten?',
	'USERNAME'							=> 'Benutzername',
	'PASSWORD'							=> 'Passwort',
	'SUBMIT'							=> 'Abschicken',
	'CANCEL'							=> 'Abbrechen',
	'FORUM_INDEX'						=> 'Foren-Übersicht',
	'FILE_WRITE_FAIL'					=> 'Fehler beim Schreiben der Datei',

	'PHPBB_DEBUG'						=> '[phpBB Debug]',
	'DEBUG_IN_FILE'						=> 'in Datei',
	'DEBUG_ON_LINE'						=> 'in Zeile',

	'STK_VERSION'						=> 'Version des Support Tookit',

	'STK_VERSIONCHECK_FAIL'				=> 'Die Informationen über die aktuelle Version konnten nicht abgerufen werden.',
	'STK_VERSIONCHECK_FORCE_UPDATE'		=> 'Version erneut prüfen',
	'STK_VERSION_CHECK'					=> 'Versionsprüfung',
	'STK_VERSION_CHECK_EXPLAIN'			=> 'Prüft, ob das Support Toolkit aktuell ist.',
	'STK_VERSIONCHECK_INVALID_ENTRY'	=> 'Die Information über die aktuelle Version enthält einen nicht unterstützten Eintrag.',
	'STK_VERSIONCHECK_INVALID_URL'		=> 'Die Information über die aktuelle Version enthält eine ungültige URL.',
	'STK_VERSIONCHECK_INVALID_VERSION'	=> 'Die Information über die aktuelle Version enthält eine ungültige Version.',
	'STK_VERSION_NOT_UP_TO_DATE_ACP'	=> 'Ihr Support Toolkit ist nicht aktuell.<br />Unten ist ein Link zur Release-Bekanntmachung, die zusätzliche Informationen und Anweisung für die Aktualisierung enthält.',
	'STK_VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Ihr Support Toolkit ist nicht aktuell.',
	'STK_VERSION_UNSTABLE_TITLE'		=> 'Es gibt eine neue unstabile Entwickler-Version.',
	'STK_VERSION_UP_TO_DATE_ACP'		=> 'Ihr Support Toolkit ist aktuell. Zurzeit sind keine Updates verfügbar.',
	'STK_HTTP_HANDLER_NOT_FOUND'		=> 'Dieser Vorgang konnte konnte nicht abgeschlossen werden, weil die cURL-PHP-Erweiterung und die allow_url_fopen-PHP-ini-Einstellung deaktiviert wurden und kein anderer Dienst (HTTP-Handler) zum Aufruf von externen URLs gefunden werden konnte.',
	'STK_UPGRADE_INSTRUCTIONS'			=> 'Ein neues Feature-Release <strong>%1$s</strong> ist verfügbar. Bitte lies <a href="%2$s" title="%2$s"><strong>die Release-Bekanntmachung</strong></a>, um die Neuerungen zu erfahren und eine Anleitung zum Upgrade zu erhalten.',
	'STK_FILE_NOT_FOUND'				=> 'Die angegebene Datei konnte auf dem Server nicht gefunden werden: %s',
	'STK_FSOCK_DISABLED'				=> 'Dieser Vorgang kann nicht abgeschlossen werden, da die <var>fsockopen</var>-Funktion deaktiviert wurde oder weil der angegebene Server nicht gefunden werden konnte.',
	'STK_FSOCK_TIMEOUT'					=> 'Beim Lesen des Datenstroms ist eine Zeitüberschreitung aufgetreten.',
));
