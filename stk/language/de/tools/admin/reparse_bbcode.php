<?php
/**
*
* @package Support Toolkit - Reparse BBCode
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
// í ª ì î Ö
//

$lang = array_merge($lang, array(
	'REPARSE_ALL'				=> 'Alle BBCodes neu verarbeiten',
	'REPARSE_ALL_EXPLAIN'		=> 'Wenn diese Option aktiviert ist, werden die BBCodes des kompltten Boards neu verarbeitet. Standardmäßig werden nur die BBCodes in Beiträgen, Privaten Nachrichten und Signaturen neu verarbeitet, die schon in der Vergangenheit von phpBB verarbeitet wurden. Diese Option wird ignoriert, wenn oben spezifische Beiträge oder Private Nachrichten angegeben wurden.',
	'REPARSE_BBCODE'			=> 'BBCodes neu verarbeiten',
	'REPARSE_BBCODE_COMPLETE'	=> 'BBCodes wurden neu verarbeitet.',
	'REPARSE_BBCODE_PROGRESS'	=> 'Sschritt %1$d komplett. Fahre fort mit Schritt %2$d in Kürze...',
	'REPARSE_BBCODE_SWITCH_MODE'	=> array(
		1	=> 'Reparsing der Beiträge abgeschlossen, fahre fort mit private Nachrichten. ',
		2	=> 'Reparsing der privaten Nachrichten abgeschlossen, fahre fort mit Signaturen.',
	),
	'REPARSE_BBCODE_MODE'			=> array(
		0	=> 'Reparsing der Beiträge in Bearbeitung.',
		1	=> 'Reparsing der privaten Nachrichten in Bearbeitung.',
		2	=> 'Reparsing der Signaturen in Bearbeitung.',
	),
	'REPARSE_IDS_INVALID'			=> 'Die angegebenen IDs waren ungültig. Bitte stelle sicher, dass die IDs als kommagetrennte Liste (z.&nbsp;B. 1,2,3,5,8,13) angegeben werden.',
	'REPARSE_IDS_EMPTY'				=> 'Du hast keinen Reparsing-Modus ausgewählt. Wenn Du nicht weißt welchen Modus Du wählen sollst, wähle <strong>Alle BBCodes reparieren</strong>. ',
	'REPARSE_POST_IDS'				=> 'Spezifische Beiträge neu verarbeiten',
	'REPARSE_POST_IDS_EXPLAIN'		=> 'Um nur bestimmte Beiträge neu zu verarbeiten, gebe die IDs der Beiträge als kommagetrennte Liste an (z.&nbsp;B. 1,2,3,5,8,13).',
	'REPARSE_PM_IDS'				=> 'Spezifische Private Nachrichten neu verarbeiten',
	'REPARSE_PM_IDS_EXPLAIN'		=> 'Um nur bestimmte Private Nachrichten neu zu verarbeiten, gebe die IDs der Privaten Nachrichten als kommagetrennte Liste an (z.&nbsp;B. 1,2,3,5,8,13).',
	'REPARSE_FORUMS'				=> 'Beiträge von spezifischen Foren neu verarbeiten',
	'REPARSE_FORUMS_EXPLAIN'		=> 'Um mehrere Foren zu wählen oder einzelne Foren oder alle Foren, verwende die richtigen Kombinationen von Maus und Tastatur entsprechend deines Betriebssystems.',
	'REPARSE_SIG'					=> 'Nur Benutzersignaturen reparsen',
	'REPARSE_SIG_EXPLAIN'			=> 'wenn angekreuzt, werden BBcodes nur in den Benutzerdaten reparst.',
	'CREATE_BACKUP_TABLE'			=> 'Ein Backup erstellen',
	'CREATE_BACKUP_TABLE_EXPLAIN'	=> 'Es wird ein Backup der Datenbank-Tabelle erstellt, aus der Du die Beiträge im Falle eines Ausfalls oder Fehlers wiederherstellen kannst.'
));
