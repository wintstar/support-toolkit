<?php
/**
*
* @package Support Toolkit
* @copyright (c) 2019 phpBBGuru Sheer
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace core\tools\admin;

class prune_styles
{
	function display_options()
	{
		global $stk_root_path, $phpbb_root_path, $phpEx, $db, $template, $request, $stk_lang;

		$submit = $request->variable('sa', false);
		$list = '';
		$styles = array();

		page_header($stk_lang->lang('PRUNE_STYLES'));

		if ($submit)
		{
			$sql = 'SELECT style_id, style_name, style_path
				FROM ' . STYLES_TABLE . '';
			$result = $db->sql_query($sql);
			while ($data = $db->sql_fetchrow($result))
			{
				$styles[] = array('style_id' => $data['style_id'], 'style_path' => $data['style_path'], 'style_name' => $data['style_name']);
			}
			$db->sql_freeresult($result);
			$dir = '' . $phpbb_root_path . 'styles/';
			foreach ($styles as $key => $value)
			{
				if (!file_exists($dir . $value['style_path'] . '/style.cfg'))
				{
					$res = delete_style($styles[$key]);
					if ($res === true)
					{
						$list .= $stk_lang->lang('STYLE_UNINSTALL_SUCESS', $styles[$key]['style_name']) . '<br />';
					}
					else
					{
						$list .= $res;
					}
				}
			}

			$message = ($list)? '' . $stk_lang->lang('PRUNE_STYLES_SUCCESS') . '<br />' . $list . '' : $stk_lang->lang('PRUNE_STYLES_EMPTY');

			meta_refresh(3, append_sid("" . $stk_root_path . "index." . $phpEx . "", 'c=admin'));
			trigger_error($message);
		}

		$template->assign_vars(array(
			'U_DISPLAY_ACTION'	=> append_sid($stk_root_path . 'index.' . $phpEx, 't=prune_styles&amp;go=1'),
		));

		$template->set_filenames(array(
			'body' => 'tools/prune_styles.html',
		));

		page_footer();
	}
}
