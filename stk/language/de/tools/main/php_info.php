<?php
/**
*
* @package Support Toolkit - Test English language Sheer
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
	'PHP_INFO'				=> 'PHP-Information',
	'PHP_INFO_EXPLAIN'		=> 'Auf dieser Seite findest du Informationen zu der auf deinem Server installierten PHP-Version. Sie enthält Details zu den geladenen Modulen, den verfügbaren Variablen und Einstellungen. Diese Informationen können bei der Problemsuche hilfreich sein. Bitte beachte, dass manche Internet-Provider die hier angezeigten Informationen aus Sicherheitsgründen einschränken. Du solltest keine Informationen von dieser Seite veröffentlichen, sofern dich nicht ein offizielles Team-Mitglied des Support-Forums dazu auffordert.',
	'NO_PHPINFO_AVAILABLE'	=> 'Es konnten keine Informationen über deine PHP-Installation ermittelt werden. phpinfo() wurde vermutlich aus Sicherheitsgründen deaktiviert.',
));
