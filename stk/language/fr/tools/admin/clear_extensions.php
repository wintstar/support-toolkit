<?php
/**
 *
 * @package Support Toolkit - Clear Extensions French language
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_EXTENSIONS'				=> 'Gérer les extensions',
	'CLEAR_EXTENSIONS_EXPLAIN'		=> 'Depuis cette page il est possible de gérer les extensions <strong>installées</strong>.',
	'EXT_PATH'						=> 'Chemin relatif pour le répertoire ' . PHPBB_ROOT_PATH . 'ext/',
	'MISSING_PATH'					=> 'Répertoire manquant',
	'S_ACTIVE'						=> ' (activée) ',
	'S_OFF'							=> ' (désactivée) ',
	'EXT_NAME'						=> 'Nom de l’extension',
	'CLICK_TO_CLEAR'				=> 'Les données des extensions installées et sélectionnées seront supprimées de la base de données et les extensions seront désactivées, mais les données liées à ces extensions, telles que les tables ou les valeurs de configuration, ne seront pas supprimées. Pour les supprimer, utiliser <b>OUTILS DE SUPPORT</b> -> Nettoyeur de base de données',
	'CLICK_TO_OFF'					=> 'Les extensions sélectionnées qui seront désactivées',
	'OFF_EXT'						=> 'Désactiver',
	'CLEAR_EXT_SUCCESS'				=> 'Les extensions sélectionnées ont été supprimées.',
	'CLICK_TO_ON'					=> 'Les extensions sélectionnées seront activées.',
	'ON_EXT'						=> 'Activer',
	'ON_EXT_SUCCESS'				=> 'Les extensions sélectionnées ont été activées avec succès !',
	'OFF_EXT_SUCCESS'				=> 'Les extensions sélectionnées ont été désactivées.',
	'NO_EXT_SELECTED'				=> 'Aucune extension sélectionnée !',
	'EXT_DELETE'					=> 'Supprimer les extensions',
	'EXT_DELETE_CONFIRM'			=> 'Confirmer la suppression de ces extensions.',
	'EXT_OFF'						=> 'Désactiver les extensions',
	'EXT_OFF_CONFIRM'				=> 'Confirmer la désactivation de ces extensions.',
	'EXT_MISSING_PATH'				=> 'L’extension « %s » n’est pas compatible.<br />',
	'NO_COMPOSER'					=> 'Fichier non trouvé : ' . PHPBB_ROOT_PATH . 'ext/%s/composer.json',
	'NO_EXTENSIONS_TITLE'			=> 'Extensions',
	'NO_EXTENSIONS_TEXT'			=> 'Aucune extension n’est installée',

	'EXT_VERSIONCHECK_FAIL'			=> 'The information about the current version could not be called up.',
	'EXT_NOT_UP_TO_DATE'			=> 'New version',
	'EXT_INSTALL_VERSION'			=> 'Installed version',
	'EXT_DIR'						=> 'Directory',
	'EXT_DIR_EXIT'					=> 'Directory is available',
	'EXT_DIR_NO_EXIT'				=> 'Directory is not available',
	'EXT_STATUS'					=> 'Status',
	'EXT_STATUS_ON'					=> 'Activated',
	'EXT_STATUS_OFF'				=> 'Deactivated',
	'EXT_COMPOSER'					=> 'composer.json',
	'VALID'							=> 'Valid',
	'NOT_VALID'						=> 'Not valid',

	'EXT_JSON_ERROR_NONE'					=> 'No error has occurred in file: %s.json',
	'EXT_JSON_ERROR_DEPTH'					=> 'The maximum stack depth has been exceeded in file: %s.json',
	'EXT_JSON_ERROR_STATE_MISMATCH'			=> 'Invalid or malformed JSON in file: %s.json',
	'EXT_JSON_ERROR_CTRL_CHAR'				=> 'Control character error, possibly incorrectly encoded in file: %s.json',
	'EXT_JSON_ERROR_SYNTAX'					=> 'Syntax error in file: %s.json',
	'EXT_JSON_ERROR_UTF8'					=> 'Malformed UTF-8 characters, possibly incorrectly encoded in file: %s.json',
	'EXT_JSON_ERROR_RECURSION'				=> 'One or more recursive references in the value to be encoded in file: %s.json',
	'EXT_JSON_ERROR_INF_OR_NAN'				=> 'One or more NAN or INF values in the value to be encoded  in file: %s.json',
	'EXT_JSON_ERROR_UNSUPPORTED_TYPE'		=> 'A value of a type that cannot be encoded was given in file: %s.json',
	'EXT_JSON_ERROR_INVALID_PROPERTY_NAME'	=> 'A property name that cannot be encoded was given in file: %s.json',
	'EXT_JSON_ERROR_UTF16'					=> 'Malformed UTF-16 characters, possibly incorrectly encoded in file: %s.json',
	'EXT_JSON_ERROR_UNKNOWN'				=> 'Unknown error in file: %s.json',
	'EXT_NO_JSON'							=> 'The required file %s.json with the extension “%s” could not be found',
));
