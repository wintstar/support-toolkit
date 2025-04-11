<?php
/**
*
* @package Support Toolkit - Orphaned posts/topics
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
	'AUTHOR'					=> 'Autor',
	'FORUM_NAME'				=> 'Forum Name',
	'NEW_TOPIC_ID'				=> 'Neue Topic ID',
	'POST_ID'					=> 'Post ID',
	'TOPIC_ID'					=> 'Topic ID',

	'DELETE_EMPTY_TOPICS'		=> 'Lösche alle ausgewählten Themen, indem Du auf diese Schaltfläche klickst. (Kann nicht rückgängig gemacht werden!)',
	'EMPTY_TOPICS'				=> 'Leere Themen',
	'EMPTY_TOPICS_EXPLAIN'		=> 'Dies sind Themen, die keine Beiträge enthalten.',
	'NO_EMPTY_TOPICS'			=> 'Keine leeren Themen gefunden',
	'NO_TOPICS_SELECTED'		=> 'Keine Themen ausgewählt',

	'ORPHANED_POSTS'			=> 'Verwaiste Beiträge',
	'ORPHANED_POSTS_EXPLAIN'	=> 'Dies sind Beiträge, die nicht mit einem Thema verbunden sind. Gib eine neue Themen-ID an, damit der Beitrag mit diesem Thema verknüpft wird.',
	'NO_ORPHANED_POSTS'			=> 'Keine verwaistne Beiträge gefunden',
	'NO_TOPIC_IDS'				=> 'Keine Themen-IDs vorhanden',
	'NONEXISTENT_TOPIC_IDS'		=> 'Die folgenden Zielthemen-IDs existieren nicht: %s.<br />Bitte überprüfe die angegebenen Themen-IDs.',
	'REASSIGN'					=> 'Neu zuordnen',

	'DELETE_SHADOWS'			=> 'Lösche alle ausgewählten Schattenthemen, indem Du auf diese Schaltfläche klickst. (Kann nicht rückgängig gemacht werden!)',
	'ORPHANED_SHADOWS'			=> 'Verwaiste Schattenthemen',
	'ORPHANED_SHADOWS_EXPLAIN'	=> 'Dies sind Schattenthemen, deren Zielthema nicht mehr existiert.',
	'NO_ORPHANED_SHADOWS'		=> 'Es wurden keine verwaisten Schattenthemen gefunden',

	'POSTS_DELETED'				=> '%d Beiträge gelöscht',
	'POSTS_REASSIGNED'			=> '%d Beiträge neu zugewiesen',
	'TOPICS_DELETED'			=> '%d Themen gelöscht',
	'ORPHANED_FORUM_POSTS'			=> 'Beiträge nicht mit Foren verknüpft',
	'ORPHANED_FORUM_POSTS_EXPLAIN'	=> 'Diese Nachrichten sind nicht mit einem bestimmten Forum verknüpft, daher wird davon ausgegangen, dass sie nicht mit einem bestimmten Thema verknüpft sind. Gib eine neue Themen-ID an, damit der Beitrag mit diesem Thema verknüpft wird.',
	'NO_FORUM_ORPHANED_POSTS'		=> 'Keine unverknüpften Beiträge gefunden',
	'NO_POSTS_SELECTED'				=> 'Keine Beiträge ausgewählt',

	'ORPHANED_TOPICS'				=> 'Verwaiste Themen',
	'NO_ORPHANED_TOPICS'			=> 'Keine verwaisten Themen gefunden',
	'NEW_FORUM_ID'					=> 'Neue Forum ID',
	'TOPICS_REASSIGNED'				=> '%d Themen neu zugeordnet',
	'ORPHANED_TOPICS_EXPLAIN'		=> 'Dies sind Themen, die nicht mit einem Forum verknüpft sind. Gib eine neue Forum-ID an, damit das Thema mit dem Forum verknüpft wird.',
	'NO_FORUMS_IDS'					=> 'Keine Forum-IDs vorhanden',
	'NONEXISTENT_FORUMS_IDS'		=> 'Die folgenden Zielforen-IDs existieren nichtt: %s.<br />Bitte überprüfe die angegebenen Foren-IDs.',
));
