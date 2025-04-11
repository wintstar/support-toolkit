<?php
/**
*
* @package Support Toolkit - DB Optimizer English language Sheer
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
	'OPTIMIZE_TABLES'			=> 'DB-Tabellen-Optimierung',
	'OPTIMIZE_TABLES_EXPLAIN'	=> 'Suche die Datenbanktabellen, die Defragmentiert und Optimiert werden müssen',
	'GO'						=> 'Optimieren',
	'FRAGMENTED'				=> 'Fragmentiert',
	'CREATE_TIME'				=> 'Erstellt',
	'UPDATE_TIME'				=> 'Letztes Update',
	'CHECK_TIME'				=> 'Bestätigt',
	'NOT_FOUND' 				=> 'Keine zu Optimierenden Tabellen gefunden',
	'TABLE_NAME'				=> 'Tabelle',
	'TABLE_SIZE'				=> 'Benutzt',
	'ALL'						=> 'Total: ',
	'SUCESS'					=> 'Ausgewählte Tabellen wurden erfolgreich optimiert',
	'NOTHING'					=> 'Nichts ausgewählt',
	'OPTIMIZER_MESSAGE'			=> '<b>Achtung!</b> Aufgrund der Tabellengröße und starken Fragmentierung kann der Optimierungsprozess erheblich Zeit in Anspruch nehmen. <br /> Bitte verlasse diese Seite nicht, sondern warte bis die Ergebnisse der Optimierung ausgegeben wurden.',
));
