<?php
/**
*
* @package Support Toolkit - User Options English language Sheer
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
	'USERS_NOGROUPS'			=> 'Benutzer ohne Gruppen',
	'USERS_NOGROUPS_EXPLAIN'	=> 'Dies ist eine Liste von Benutzern, die aus irgendeinem Grund keiner der eingerichteten Gruppen angehören.
								Du kannst jeden Benutzer markieren und ihm eine Standardgruppe sowie eine oder mehrere andere Gruppen zuweisen, in die der Benutzer eintreten soll.',
	'LOST_GROUPS_USERS'			=> 'Benutzer, die keiner Gruppe angehören',
	'NO_USERS_FOUND'			=> 'Es wurden keine Benutzer gefunden, die keiner Gruppe angehören',
	'NO_USERS_SELECTED'			=> 'Du musst mindestens einen Benutzer auswählen.',
	'ASSIGHN_GROUPS_SUCCESS'	=> 'Ausgewählte Benutzer wurden erfolgreich zur Gruppe (zu den Gruppen) hinzugefügt.',
));
