<?php
/**
 *
 * @package Support Toolkit
 * @version $Id$
 * @copyright (c) 2010 phpBB Group
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
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
// ’ » " " …
// --------------------------------------------------------------------------------------------
// For the time being this file isn't translatable. The Support Toolkit will always force the
// English version when the "Support Request Generator" is ran.
//

$lang = array_merge($lang, array(
	'COMPILED_TEMPLATE_EXPLAIN'		=> 'Unterhalb ist deine Vorlage für die Supportanfrage. Kopiere das Template in deine Zwischenablage, danach erstellst du mit diesen Informationen ein neues Thema in den <a href="http://www.phpbb.de/go/3/supportforum">Supportforen</a>. Wenn du schon ein Thema zu diesem Problem eröffnet hast, kopiere bitte das Template in eine Antwort auf dieses Thema und erstelle kein neues Thema.',
	'COULDNT_LOAD_SRT_ANSWERS'		=> 'Der Vorlagengenerator für Supportanfragen konnte die Antworten nicht empfangen. Stelle sicher, dass du das Tool korrekt gestartet hast.',
	'SRT_GENERATOR'					=> 'Vorlagengenerator für Supportanfragen',
	'SRT_GENERATOR_LANDING'			=> 'Vorlagengenerator für Supportanfragen',
	'SRT_GENERATOR_LANDING_CONFIRM'	=> 'Willkommen beim Vorlagengenerator für Supportanfragen. Dies ist die schnellste und effizienteste Methode, unsere Vorlage für Support-Anfragen auszufüllen. Der Generator wird dir eine Reihe von acht bis zehn Fragen stellen, die dabei helfen, die meisten Probleme zu erkennen. Danach werden deine Antworten in einer Liste zusammengestellt. Diese kannst du kopieren und in dein Support-Thema einfügen.<br />Dieses STK-Tool macht das gleiche wie der <a href="http://www.phpbb.com/support/stk/">Vorlagengenerator für Supportanfragen auf www.phpbb.com</a>, versucht aber, verschiedene Fragen automatisch auszufüllen.<br /><br />Willst du den Vorlagengenerator für Supportanfragen starten?',
	'SRT_NO_CACHE'					=> 'Der Vorlagengenerator für Supportanfragen verwendet das Cache-System von phpBB, um die Informationen zwischenzuspeichern, während du durch alle Schritte gehst. Du nutzt den phpBB null-Cache, der mit diesem Tool nicht kompatibel ist. Bitte wechsel zu einem anderen Caching-Backend, um das Tool zu nutzen oder nutze die <a href="http://www.phpbb.com/support/srt/">Online-Version</a>.',
	'START_OVER'					=> 'Neu beginnen',
	'NO_ANSVER'						=> 'Antwort wird nicht zur Verfügung gestellt',
	'BY_SRT_GENERATOR'				=> 'Erstellt von Support Request Template Generator',
));

// Step 1 strings
$lang = array_merge($lang, array(
//	'STEP1_CONVERT'			=> '',
//	'STEP1_CONVERT_EXPLAIN'	=> '',
	'STEP1_MOD'				=> 'Hat Ihr Problem mit Extensions zu tun?',
	'STEP1_MOD_EXPLAIN'		=> 'Hat dieses Problem nach der Installation oder Entfernung einee Extension begonnen?',
	'STEP1_MOD_ERROR'		=> 'Supportfragen zu Extensionsbezogenen Problemen (z.B. wenn Sie gerade eine Extension installiert haben und jetzt Fehler erhalten) sollten in dem Thema veröffentlicht werden, in dem Sie die Extension heruntergeladen haben. Wenn die Extension von einer anderen Seite heruntergeladen wurde, müssen Sie dort Unterstützung suchen.<br /><br /><br /><a href="https://www.phpbb.com/community/viewforum.php?f=451">Zu den Support-Foren</a>',
	'STEP1_HACKED'			=> 'Wurde Ihr Board gehackt?',
	'STEP1_HACKED_EXPLAIN'	=> 'Wählen Sie "Ja" für diese Option, wenn Sie Unterstützung suchen, weil Ihr Board defaced/anderweitig kompromittiert wurde.',
	'STEP1_HACKED_ERROR'	=> 'Wenn Ihr Board gehackt wurde, bitten wir Sie, einen Bericht mit dem Incident Investigation Tracker zu verfassen, anstatt im Support-Forum zu posten, so dass keine privaten Informationen preisgegeben werden.<br /><br /><br />Siehe <a href="http://www.phpbb.com/community/viewtopic.php?f=46&t=543171#iit">dieser Beitrag</a> für Anweisungen dazu.',
));

// The questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS'			=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'What version of phpBB are you using?',
			'board_url'			=> 'What is your board’s URL?',
			'dbms'				=> 'Which database type/version are you using?',
			'php'				=> 'Which PHP version are you using?',
			'host_name'			=> 'Who do you host your board with?',
			'install_type'		=> 'How did you install your board?',
			'inst_converse'		=> 'Is your board a fresh install or a conversion?',
			'mods_installed'	=> 'Do you have any MODs installed?',
			'registration_req'	=> 'Is registration required to reproduce this issue?',
		),
		'step3'	=> array(
			'installed_styles'		=> 'What styles do you currently have installed?',
			'installed_languages'	=> 'What language(s) is your board currently using?',
			'xp_level'				=> 'What is your level of experience?',
			'problem_started'		=> 'When did your problem begin?',
			'problem_description'	=> 'Please describe your problem.',
			'installed_mods'		=> 'What extesions do you have installed?',
			'test_username'			=> 'What username can be used to view this issue?',
			'test_password'			=> 'What password can be used to view this issue?',
		),
	),
));

// Explain lines for the questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS_EXPLAIN'	=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'The SRT Generator couldn’t determine which phpBB version you are using, please select the correct version. To find this information, login to your board and scroll down to the bottom of the page. Click "Administration Control Panel". Click the "System" tab.',
			'board_url'			=> 'Your board URL is the address that you use to access your board. Most problems are more easily fixed when one can view your board. If you do not want to give out this information, please enter "n/a".',
			'dbms'				=> 'To determine which database version and type you are using, go to the Administration Control Panel. On the "General" tab, locate "Database server:" in the statistics table.',
			'gzip'				=> 'GZip enabled',
			'php'				=> 'To determine which PHP version you are using, go to the Administration Control Panel. On the "General" tab, click on "PHP Information", here you’ll find "PHP Version x.y.z"',
			'host_name'			=> 'Some problems experienced with phpBB boards can be attributed to particular hosts. This field should be filled with the company that is providing your webhosting package (like GoDaddy, Yahoo!, 1&1, etc.). If you are hosting the board yourself, please indicate this. Likewise, if you do not know who is hosting your board, please indicate this as well.',
			'install_type'		=> 'If you installed your board by downloading the phpBB files, uploading them to your host, then browsing to the installer, select "I installed the board by myself." If you had someone do the installation for you, select "Someone else installed my board for me." If you used an automated tool like Fantastico, select "I used a tool provided by my host."',
			'inst_converse'		=> 'If your board was a fresh install, this means your board did not exist prior to installing phpBB. If you recently updated your board from an older version of phpBB3 prior to your problem beginning, then selected "Update from a previous version of phpBB3". If it is a conversion, this means your board was installed previously as another piece of software then later converted to phpBB.',
			'mods_installed'	=> 'MODs are often the cause of many problems with phpBB. This information can help to determine the exact cause of your issue.',
			'registration_req'	=> 'Select "Yes" if one must be registered and logged in to experience this problem.',
		),
		'step3'	=> array(
			'installed_styles'		=> 'An out of date style is the cause of many problems. If you do not know which styles you have installed, go to the Administration Control Panel, then browse to the "Styles" tab.',
			'installed_languages'	=> 'An out of date language pack is the cause of many problems. If you do not know which language packs you have installed, go to the Administration Control Panel, then browse to the "System" tab. Next, select "Language packs" from the list of pages on the left.',
			'xp_level'				=> 'Please select the option that best describes you.',
			'problem_started'		=> 'Please describe the actions you took (updating your board, installing a MOD, etc.) prior to this problem becoming noticeable.',
			'problem_description'	=> 'When describing your problem, please attempt to be as detailed as possible. Include information regarding when the problem started, steps to reproduce the problem, and any other information that you deem helpful.',
			'installed_mods'		=> 'Please try to be as detailed as you can when listing your installed MODs. This information greatly helps us in determining the cause of your problem.',
			'test_username'			=> 'Please provide the username to a test account that can be used to view this issue. Do <strong>not</strong> provide this information if the user requires more than "regular user" privileges.',
			'test_password'			=> 'Please provide the password to a test account that can be used to view this issue. Do <strong>not</strong> provide this information if the user requires more than "regular user" privileges.',
		),
	),
));

// Langauge strings that are used for building dropdown boxes
$lang = array_merge($lang, array(
	'SRT_DROPDOWN_OPTIONS'	=> array(
		'step2'	=> array(
			'install_type'	=> array(
				null			=> 'Please select your answer',
				'myself'		=> 'I used the download package from phpBB.com',
				'third'			=> 'I used a download package provided by another website',
				'someone_else'	=> 'Someone else installed my board for me',
				'automated'		=> 'I used a tool provided by my host',
			),
			'inst_converse'	=> array(
				null			=> 'Please select your answer',
				'fresh'				=> 'Fresh Install',
				'phpbb_update'		=> 'Update from a previous version of phpBB3',
				'convert_phpbb2'	=> 'Conversion from phpBB2',
				'convert_phpbb30'	=> 'Conversion from phpBB3.0',
				'convert_phpbb31'	=> 'Conversion from phpBB3.1',
				'convert_other'		=> 'Conversion from another software',
			)
		),
		'step3'	=> array(
			'xp_level'		=> array(
				null			=> 'Please select your answer',
				'new_both'		=> 'New to PHP and phpBB',
				'new_phpbb'		=> 'New to phpBB but not PHP',
				'new_php'		=> 'New to PHP but not phpBB',
				'comfort'		=> 'Comfortable with PHP and phpBB',
				'experienced'	=> 'Experienced with PHP and phpBB',
			),
		),
	),
));
