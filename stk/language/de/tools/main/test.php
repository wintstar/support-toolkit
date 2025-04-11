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
	'TEST'				=> 'Allgemeine Information',
	'DATABASE_INFO'		=> 'Datenbankserver',
	'DBMS'				=> 'Datenbank-Typ',
	'PHP_INFO'			=> 'Informationen über php',
	'PHP_VERSION'		=> 'php version',
	'STK_VERSION'		=> 'Support Tookit version',
	'MBSTRING_LOADED'	=> 'Funktionen für das Arbeiten mit Multi-Byte-Zeichenfolgen (Extension php <b>mbstring</b>) wurden geladen',
	'MBSTRING_NOT_LOADED'				=> 'Funktionen für das Arbeiten mit Multi-Byte-Zeichenfolgen (Extension php <b> mbstring </b>) wurden nicht geladen',
	'ERROR_MBSTRING_NOT_LOADED_EXPLAIN'	=> 'Mbstring ist nicht in der Liste der Erweiterungen enthalten, die standardmäßig installiert werden. Dies bedeutet, dass diese Erweiterung zunächst deaktiviert ist. Um die Funktionen dieser Erweiterung zu nutzen, musst Du das Modul explizit aktivieren, um php zu konfigurieren. Bitte die Dokumentation konsultieren <a href="http://php.net/manual/ru/mbstring.configuration.php"> php </a>',
));
