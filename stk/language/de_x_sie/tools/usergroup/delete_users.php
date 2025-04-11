<?php
/**
*
* @package Support Toolkit - Delete Usetrs English language Sheer
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @
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
	'DELETE_USERS'				=> 'Benutzer entfernen',
	'DELETE_USERS_EXPLAIN'		=> 'Hier kannst Du Benutzer löschen, die keine Beiträge haben und sich in der angegebenen Zeit nicht im Forum angemeldet haben (inaktiv waren).',
	'INACTIVE_PERIOD'			=> 'Inaktivitätszeitraum',
	'DELETE_USERS_SUCESS'		=> 'Benutzer wurden erfolgreich entfernt.',
	'DELETE_USERS_NOT_FOUND'	=> 'Zu entfernenden Benutzer nicht gefunden.',
	'DELETE_USERS_CONFIRM'		=> 'Möchtest Du diese Benutzer wirklich löschen?<br />(<strong>Achtung!</strong>Das Entfernen einer großen Anzahl von Benutzern kann sehr lange dauern. Verlasse oder schließe diese Seite nicht, bis der Vorgang abgeschlossen ist.)',
));
