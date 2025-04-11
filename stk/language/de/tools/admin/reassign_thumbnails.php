<?php
/**
 *
 * @package Support Toolkit - Reassign Thumbnails English language Sheer
 * @copyright (c) 2017 Sheer
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
	'REASSIGN_THUMBNAILS'			=> 'Thumbnails neu erstellen',
	'REASSIGN_THUMBNAILS_CONFIRM'	=> 'Falls die Option &laquo;Thumbnails erstellen&nbsp; deaktiviert war, aber Anhänge wurden erstellt, kannst Du hier die Thumbnails für solche Anhänge erstellen lassen.<br />Weiter?',
	'REASSIGN_THUMBNAILS_PROGRESS'	=> 'Erstellen von Thumbnails im Gange. Unterbrich den Prozess nicht!',
	'REASSIGN_THUMBNAILS_FINISHED'	=> 'Thumbnail-Erstellung komplett.',
	'NO_THUMBNAILS_TO_REBUILD'		=> 'Keine Dateien, für die Du Thumbnails erstellen musst.',
	'NEED_TO_PROCESS' 				=> 'Dateien ohne Thumbnails: ',
	'THUMB'							=> '<strong>Thumbnail</strong>',
	'REBUILT'					=> 'Erstelle Thumbnails',
	'NO_NEED_REBUILT'				=> '<strong style="color: #aaa;">Kein Thumbnail benötigt</strong> für ',
	'SOURCE_UNAVAILABLE'			=> 'Datei nicht gefunden: ',
	'NO_EXTENSIONS'					=> 'There are no file extensions for group extensions <strong>Images</ strong> .',
	'NO_EXTENSIONS_GROUP'			=> 'Еxtension Gruppe <strong>Bilder</ strong> existiert nicht.',
	'IMAGES'						=> 'Bilder',
));
