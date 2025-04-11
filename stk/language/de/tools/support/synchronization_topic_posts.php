<?php
/**
*
* @package Support Toolkit - Synchronization topics/posts English language Sheer
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
	'SYNCHRONIZATION_TOPIC_POSTS'			=> 'Themen Synchronization',
	'SYNCHRONIZATION_TOPIC_POSTS_EXPLAIN'	=> 'Mit diesem Tool können Sie die tatsächliche Anzahl der Einträge in der <em>_topics</em> Tabelle wiederherstellen.',
	'TOPICS_NOT_SYNCHRONIZED'				=> 'Themen, die eine Synchronisierung erfordern',
	'TOPIC_ID'								=> 'Themen ID',
	'TOPIC_TOTAL_POSTS'						=> 'Gesamtanzahl der Beiträge<br />von Tabelle %s',
	'TOPIC_TOTAL_POSTS_TITLE'				=> 'Genehmigt + nicht genehmigt + gelöscht',
	'POSTS_TOTAL'							=> 'Die tatsächliche Anzahl der Beiträge<br />von Tabelle %s',
	'FROM_TABLE'							=> '<br />von Tabelle %s',
	'NO_NOT_SYNCHRONIZED_TOPICS'			=> 'Nicht gefunden',
	'SYNCHRONIZING_TOPICS'					=> 'Synchronisieren',
	'TOPIC_LAST_POST_ID'					=> 'Letzte post ID',
	'MAX_POST_ID'							=> 'Letzte ID',
	'TOPICS_SINCRONIZED'					=> '%d Wurde erfolgreich synchronisiert',
));
