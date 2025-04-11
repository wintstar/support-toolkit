<?php
/**
*
* @package Support Toolkit - phpbb English language Sheer
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
	'EXTENSIONS'			=> 'Entwickeln von Extensions',
	'EXTENSIONS_EXPLAIN'	=> 'Erstellen eines Extension-Grundgerüstes. Nach Durchführung der notwendigen Aktionen wird eine minimale Extension-Struktur erstellt. Um eine vollwertige Extension zu erstellen, musst Du die generierten Dateien bearbeiten und neue hinzufügen, die für die Extension benötigt werden.',
	'DEVELOPER'				=> 'Name (nickname) des Entwicklers',
	'DEVELOPER_EXPLAIN'		=> 'Dies ist der Name der Extension, welche im ACP im Reiter <strong>&laquo;Anpassen-->Erweiterungen verwalten-->Details&raquo;</strong> zusammen mit anderen optionalen Parametern, die Du unten eingeben kannst, angezeigt wird.',
	'AUTHOR_EXPLAIN'		=> 'Vendor-Name.<br />Im Ordner ./ext/ Der Ordner wird (falls er noch nicht existiert) mit demselben Namen wie dieser Parameter erstellt. Alle Erweiterungen des Autors müssen sich in diesem Ordner befinden. Im Namen der Ordner  sind keine Bindestriche, und Unterstriche erlaubt. Der Name des Vendors sollte mindestens 3 Zeichen sein.',
	'EXT_EXPLAIN'			=> 'Extension-Name.<br />Im Ordner ./ext/_vendor_name_/ Ordner wird mit dem gleichen Namen wie dieser Parameter erstellt. Alle Ordner und Dateien dieser Extension werden in diesem Ordner abgelegt. Der Name der Extension sollte mindestens 3 Zeichen lang sein.',
	'DISPLAY_NAME'			=> 'Anzeigename',
	'DESCRIPTION'			=> 'Beschreibung',
	'VERSION'				=> 'Version der Extension',
	'DESCRIPTION_EXPLAIN'	=> 'Kurze Beschreibung der Extension.',
	'ROLE'					=> 'Entwicklerrolle',
	'ROLE_EXPLAIN'			=> 'Eine kurze Beschreibung des Autors zur Entwicklung der Extension',
	'HOMEPAGE'				=> 'Entwickler-Website',

	'EMPTY_VENDOR'			=> 'Kein Vendor-Name angegeben',
	'EMPTY_EXT_NAME'		=> 'Kein Name der Extension angegeben',
	'EMPTY_AUTHOR'			=> 'Kein Entwickler-Name angegeben (Nickname)',
	'EMPTY_DISPLAY_NAME'	=> 'Kein Anzeigename angegeben',
	'EMPTY_VERSION'			=> 'Die Version wurde nicht angegeben',
	'VENDOR_NAME_TOO_SHORT'	=> 'Der Vendor-Name muss mindestens 3 Zeichen lang sein.',
	'EXT_NAME_TOO_SHORT'	=> 'Extension-Name muss mindestens 3 Zeichen lang sein.',

	'ARE_REQUIRED'			=> '<hr>Die mit * markierten Felder müssen ausgefüllt werden.',
	'SUCCESS'				=> 'Grundgerüst der Extension erfolgreich angelegt. Jetzt kannst Du mit der Realisierung der Extension beginnen.',
	'ALREADY_EXISTS'		=> 'Diese Extension existiert bereits!',
));
