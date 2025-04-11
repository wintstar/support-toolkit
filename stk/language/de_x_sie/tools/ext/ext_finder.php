<?php
/**
*
* @package Support Toolkit - Ext Finder English language Sheer
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
	'EXT_TABLE_FINDER'			=> 'Tabellen',
	'EXT_TABLE_FINDER_EXPLAIN'	=> 'Hier kannst Du Informationen über eine Extension erhalten, die diese Tabelle verwendet:',
	'TABLE'						=> 'Tabelle',

	'EXT_COLUMN_FINDER'			=> 'Spalten',
	'EXT_COLUMN_FINDER_EXPLAIN'	=> 'Hier kannst Du Informationen über eine Extension erhalten, die diese Spalte verwendet:',
	'COLUMN'					=> 'Spalte',

	'EXT_CONFIG_FINDER'			=> 'Konfiguration',
	'EXT_CONFIG_FINDER_EXPLAIN'	=> 'Hier kannst Du Informationen über eine Extension erhalten, die diesen Konfigurations-Parameter verwendet:',
	'CONFIG'					=> 'Parameter',

	'EXT_MODULE_FINDER'			=> 'Module',
	'EXT_MODULE_FINDER_EXPLAIN'	=> 'Hier kannst Du Informationen über eine Extension erhalten, die dieses Modul verwendet:',
	'MODULE'					=> 'Module',

	'EXT_PERM_FINDER'			=> 'Berechtigungen',
	'EXT_PERM_FINDER_EXPLAIN'	=> 'Hier kannst Du Informationen über eine Extension erhalten, die diese Berechtigung verwendet:',
	'PERMISSION'				=> 'Berechtigung',

	'PATH'				=> 'PFAD, RELATED ./ext',
	'INFO'				=> 'INFO (Name/Version  - Beschreibung)',
	'NOT_IN_EXT'		=> '<em>Element ist nicht Teil einer Extension, der Eintrag ist unbekannt</em>',

	'EXTRA_EXPLAIN'		=> 'Der Status der Erweiterung, der Name, die Version und die Kurzbeschreibung. Aktive Erweiterung <b style="color: #282">grün hervorgehoben</b>.',
));
