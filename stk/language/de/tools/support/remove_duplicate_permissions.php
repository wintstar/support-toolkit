<?php
/**
*
* @package Support Toolkit - Duplicate Permission Remover
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DUPLICATES_FOUND'						=> 'Das Tool hat doppelte Berechtigungen gefunden und alle entfernt.',

	'NO_DUPLICATES_FOUND'					=> 'Das Tool hat die Prüfung auf doppelte Berechtigungen abgeschlossen, ohne solche zu finden.',

	'REMOVE_DUPLICATE_PERMISSIONS'			=> 'Doppelte Berechtigungen entfernen',
	'REMOVE_DUPLICATE_PERMISSIONS_CONFIRM'	=> 'Bist du sicher, dass du doppelte Berechtigungen entfernen willst?',
));
