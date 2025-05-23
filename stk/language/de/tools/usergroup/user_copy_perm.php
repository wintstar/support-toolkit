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
	'USER_COPY_PERM'					=> 'Kopiere Benutzerrechte',
	'USER_COPY_PERM_EXPLAIN'			=> 'Beachte bitte, dass alle Berechtigungen kopiert werden: Benutzer, Moderatoren, Administratoren und lokal.',
	'COPY_USER_PERMISSIONS_EXPLAIN'		=> 'Wähle einen Benutzer aus, dessen Berechtigungen kopiert werden sollen',
	'COPY_USER_PERMISSIONS_OK'			=> 'Berechtigungen wurden erfolgreich kopiert.',
	'USERS_IDENTICAL'					=> 'Es ist nicht möglich, diese Berechtigungen zu übertragen.',
	'FIND_FROM_USER'					=> 'Benutzername, dessen Berechtigungen kopiert werden sollen.',
	'ID_FROM'							=> 'Benutzer-ID, deren Berechtigungen kopiert werden sollen.',
	'FIND_TO_USER'						=> 'Benutzername, dem Du die Berechtigungen übertragen möchtest',
	'ID_TO'								=> 'Benutzer-ID, der Du die Berechtigungen übertragen möchtest',
));
