<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace core\language;

/**
 * Helper class for language file related functions
 */
class language_file_helper
{
	/**
	 * @var string	Path to STK's root
	 */
	protected $stk_root_path;

	/**
	 * Constructor
	 *
	 * @param string	$stk_root_path	Path to STK's root
	 */
	public function __construct($stk_root_path)
	{
		$this->stk_root_path = $stk_root_path;
	}

	/**
	 * Returns available languages
	 *
	 * @return array
	 */
	public function get_available_languages()
	{
		$dir = $this->stk_root_path . '/language';

		$finder = array_diff(
			scandir($dir), 
			array(
				'.',
				'..',
				'index.htm',
				is_file($dir),
				is_link($dir)
			)
		);

		$available_languages = array();
		foreach ($finder as $file)
		{
			$path = realpath($dir) . '/' . $file . '/' . 'iso.txt';
			$info = file($path);

			$available_languages[] = array(
				// Get the name of the directory containing iso.txt
				'iso' => $path,
				'dir' => $file,

				// Recover data from file
				'name' => trim($info[0]),
				'local_name' => trim($info[1]),
				'author' => trim($info[2])
			);
		}

		return $available_languages;
	}
}
