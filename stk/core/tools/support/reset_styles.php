<?php
/**
*
* @package Support Toolkit
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\tools\support;

class reset_styles
{
	/**
	* Display Options
	*
	* Output the options available
	*/
	function display_options()
	{
		global $config, $stk_lang;

		$stk_lang->add_lang('acp/board', null, true);

		return array(
			'title'	=> 'RESET_STYLES',
			'vars'	=> array(
				'legend1' => 'RESET_STYLES',
				'style_id' => array('lang' => 'STYLE', 'type' => 'custom', 'methode' => [$this, 'style_select2'], 'explain' => true, 'default' => $config['default_style']),
			)
		);
	}

	/**
	* Run Tool
	*
	* Does the actual stuff we want the tool to do after submission
	*/
	function run_tool(&$error)
	{
		global $db, $request, $config, $stk_lang;

		if (!check_form_key('reset_styles'))
		{
			$error[] = 'FORM_INVALID';
			return;
		}

		$style_id = $request->variable('style_id', 0);

		if (!$style_id)
		{
			return;
		}

		$config->set('default_style', $style_id);

		$db->sql_query('UPDATE ' . USERS_TABLE . ' SET user_style = ' . $style_id);

		trigger_error($stk_lang->lang('RESET_STYLE_COMPLETE'));
	}

	function style_select2($value, $key)
	{
		return '<select name="' . $key . '">' . style_select($value) . '</select>';
	}
}
