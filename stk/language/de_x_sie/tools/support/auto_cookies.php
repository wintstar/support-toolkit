<?php
/**
*
* @package Support Toolkit - Auto Cookies
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
	'AUTO_COOKIES'				=> 'Auto-Konfiguration Cookies',
	'AUTO_COOKIES_EXPLAIN'		=> 'Diese Tool ermöglicht es dir, die Cookie-Einstellungen deines Boards zu ändern. Die vorgeschlagenen Werte sollten in den meisten Fällen passend sein. Wenn du dir unsicher bist, welche Einstellungen richtig sind, so frage bitte im Support-Forum nach, bevor du eine Einstellung änderst. Eine fehlerhafte Einstellung kann dazu führen, dass du dich nicht mehr in deinem Board anmelden kannst.',

	'COOKIE_SETTINGS_UPDATED'	=> 'Die Cookie-Einstellungen wurden erfolgreich aktualisiert.',
	'COOKIE_DOMAIN'				=> 'Cookie Domain',
	'COOKIE_NAME'				=> 'Cookie Name',
	'COOKIE_PATH'				=> 'Cookie Pfad',
	'COOKIE_SECURE'				=> 'Cookie Sicherer Server',
	'COOKIE_SECURE_EXPLAIN'		=> 'Falls dein Server über SSL läuft, aktiviere diese Option, ansonsten lass sie deaktiviert. Wenn diese Option aktiviert ist, obwohl der Server nicht über SSL aufgerufen wird, können Fehler bei der Weiterleitung auftreten.',
));
