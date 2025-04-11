<?php
/**
 *
 * @package Support Toolkit - Prune Avatars English language Sheer
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
	'PRUNE_AVATARS'				=> 'Prüfen von Avatar-Dateien',
	'PRUNE_AVATARS_EXPLAIN'		=> 'Dieses Tool prüft die Existenz von ungenutzten Avatar-Dateien (<em>Dateien von Avatar-Galerien werden nicht geprüft</ em>). Wenn Dateien vorhanden sind, werden sie entfernt. Fortsetzen?',
	'PRUNE_AVATARS_FINISHED'	=> 'Keine unnötigen Avatar Dateien gefunden.',
	'PRUNE_AVATARS_PROGRESS'	=> 'Überprüfung unnötiger Dateien in Bearbeitung. Unterbreche den Vorgang nicht!<br />Folgende Dateien wurden gelöscht:',
	'PRUNE_AVATARS_FAIL'		=> '<br />Die folgenden Dateien konnten nicht entfernt werden:',
));
