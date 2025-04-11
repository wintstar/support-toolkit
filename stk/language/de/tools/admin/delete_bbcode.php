<?php
/**
 *
 * @package Support Toolkit - Prune Styles Russian language Sheer
 * @copyright (c) 2019 phpBBGuru Sheer
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
	'DELETE_BBCODE'						=> 'Entfernen von BBCodes',
	'DELETE_BBCODE_PROGRESS'			=> 'Verarbeitet %1$d von %2$d ...',
	'DELETE_BBCODES'					=> 'Entfernen von BBCodes in Bearbeitung',
	'DELETE_BBCODE_COMPLETE'			=> 'Entfernen der BBCodes abgeschlossen.',
	'IDS_EMPTY'							=> 'Du hast keinen BBcodes clearing mode ausgewählt. Wenn Du nicht weißt, wie man einen Modus auswählt, markiere das Kästchen <strong>BBCode überall löschen</strong>. ',
	'DELETE_BBCODE_POST_IDS'			=> 'Entfernen von bb-Codes nur unter den aufgelisteten Beiträgen durchführen',
	'DELETE_BBCODE_POST_IDS_EXPLAIN'	=> 'Gib die Post-IDs in einer durch Komma getrennten Liste an (z. B. 1,2,3,5,8,13).',
	'DELETE_BBCODE_FORUMS'				=> 'Entfernen von BBCodes nur in ausgewählten Foren durchführen',
	'DELETE_BBCODE_FORUMS_EXPLAIN'		=> 'Um mehrere Foren auszuwählen, wähle die für Deinen Computer und Browser geeignete Kombination von Maus und Tastatur aus.',

	'DELETE_BBCODE_SELECT'				=> 'Wähle den gewünschten bb-Code',
	'DELETE_BBCODE_ALL'					=> 'BBCode überall löschen.',
	'DELETE_BBCODE_ALL_EXPLAIN'			=> 'Wenn diese Option angekreuzt ist, wird der BBCode überall entfernt. Diese Option wird ignoriert, wenn bestimmte Beiträge oder Foren oben angegeben sind. Bitte beachte, dass dieses Tool das Potential hat, Deine Datenbank irreparabel zu beschädigen, daher <strong>stelle sicher dass dDu ein Backup der Datenbank angelegt hast</strong>. Beachte außerdem, dass die Fertigstellung dieses Tools einige Zeit in Anspruch nehmen kann.',



));
