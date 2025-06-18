<?php
/**
*
* @package Support Toolkit
* @version $Id$
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace core\erk;

class erk
{
	/**
	* @var Array Tools that are autoran
	*/
	var $autorun_tools = array();

	/**
	* @var Array Tools that are manually invoked
	*/
	var $manual_tools = array();

	/**
	* @var string Location for the tools
	*/
	var $tool_path;

	/**
	* Initialise critical repair.
	* This method loads all critical repair tools
	* @return void
	*/
	function initialise()
	{
		global $stk_root_path, $phpbb_root_path, $phpEx;

		// Load functions_admin.php if required
		if (!function_exists('filelist'))
		{
			include $phpbb_root_path . 'includes/functions_admin.' . $phpEx;
		}

		// Set the path
		$this->tool_path = $stk_root_path . 'core/repair/';

		$filelist = filelist($this->tool_path, '', $phpEx);

		foreach ($filelist as $directory => $tools)
		{
			if ($directory != 'autorun/')
			{
				if (sizeof($tools))
				{
					foreach ($tools as $tool)
					{
						$this->manual_tools[] = substr($tool, 0, strpos($tool, '.'));
					}
				}
			}
			else
			{
				if (sizeof($tools))
				{
					foreach ($tools as $tool)
					{
						$this->autorun_tools[] = substr($tool, 0, strpos($tool, '.'));
					}
				}
			}
		}

		return true;
	}

	/**
	* Run a manual critical repair tol
	* @param	String	$tool The name (file/class) of the tool
	* @return	mixed	The result of the tool
	*/
	function run_tool($tool)
	{
		static $tools_loaded = array();

		if (isset($tools_loaded[$tool]))
		{
			return ($return) ? $tools_loaded[$tool] : true;
		}

		try {
			// Construct the class
			$class = new \ReflectionClass("\\core\\repair\\{$tool}");
			$tools_loaded[$tool] = $class->newInstance();
		} catch (Exception $e) {
			trigger_error(sprintf($lang['INCORRECT_CLASS'], $e), E_USER_ERROR);
		}

		return $tools_loaded[$tool];
	}

	/**
	* Run all the automatic critical repair tools
	* @return void
	*/
	function autorun_tools()
	{
		static $tools_loaded = array();

		foreach ($this->autorun_tools as $tool)
		{
			if (isset($tools_loaded[$tool]))
			{
				return ($return) ? $tools_loaded[$tool] : true;
			}

			try {
				// Construct the class
				$class = new \ReflectionClass("\\core\\repair\\autorun\\{$tool}");
				$tools_loaded[$tool] = $class->newInstance();
			} catch (Exception $e) {
				trigger_error(sprintf($lang['INCORRECT_CLASS'], $e), E_USER_ERROR);
			}

			return $tools_loaded[$tool];
		}
	}

	/**
	 * Trigger an error message, this method *must* be called when an ERK tool
	 * encounters an error. You can not rely on msg_handler!
	 * @param	String|Array	$msg				The error message or an string array containing multiple lines
	 * @param	Boolean			$redirect_stk		Show a backlink to the STK, otherwise to the ERK
	 * @return	void
	 */
	function trigger_error($msg, $redirect_stk = false)
	{
		global $stk_root_path, $phpbb_root_path, $phpEx, $user, $lang;

		if (!is_array($msg))
		{
			$msg = array($msg);
		}

		// Send headers
		header('HTTP/1.1 503 Service Unavailable');
		header('Content-type: text/html; charset=UTF-8');

		// Build the page
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="imagetoolbar" content="no" />
		<title>Support Toolkit :: Emergency Repair Kit</title>
		<link href="<?php echo $stk_root_path; ?>style/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo $stk_root_path; ?>style/erk_style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body id="errorpage">
		<div id="wrap">
			<div id="page-header">
				<p>
					<?php
					if ($redirect_stk)
					{
						echo '<a href="' . $stk_root_path . '">' . $lang['SUPPORT_TOOL_KIT_INDEX'] . '</a> &bull; ';
					}
					else
					{
						echo '<a href="' . $stk_root_path . 'erk.'.$phpEx.'">' . $lang['CAT_ERK'] . '</a> &bull; ';
					}
					?>
					<a href="<?php echo $phpbb_root_path; ?>"><?php echo $lang['FORUM_INDEX'] ?></a>
				</p>
			</div>
			<div id="page-body">
				<div id="acp">
					<div class="panel">
						<span class="corners-top"><span></span></span>
							<div id="content">
								<h1><?php echo $lang['CAT_ERK'] ?></h1>
								<?php
								foreach ($msg as $m)
								{
									echo "<p>{$m}</p>";
									$pos = strripos($m, 'Undefined index: user_id');
									if($pos)
									{
										$msg = sprintf($lang['ANONYMOUS_MISSING'], ''.$stk_root_path.'erk.'.$phpEx.'');
										?><hr><?php
										echo $msg;
										?><hr><?php
									}
								}
								?>
								<p>
									<?php
									if ($redirect_stk)
									{
										$msg = sprintf($lang['RELOAD_STK'], $stk_root_path);
										echo $msg;
									}
									else
									{
										$msg = sprintf($lang['RELOAD_ARK'], ''.$stk_root_path.'erk.'.$phpEx.'');
										echo $msg;
									}
									?>
								</p>
							</div>
						<span class="corners-bottom"><span></span></span>
					</div>
				</div>
			</div>
			<div id="page-footer">
				Support Toolkit for phpBB &copy;</a><br />
				Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Limited - maintained by &copy; <a href="https://github.com/wintstar/support-toolkit/discussions">wintstar</a>
			</div>
		</div>
	</body>
</html>
<?php
		// Make sure we exit, can't use any phpBB stuff here
		exit;
	}
}
