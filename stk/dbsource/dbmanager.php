<?php

define('IN_PHPBB', true);

$stk_root_path = (defined('STK_ROOT_PATH')) ? STK_ROOT_PATH : './../';
$db_source_path = (defined('DB_SOURCE_PATH')) ? DB_SOURCE_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

require $stk_root_path . 'config.' . $phpEx;

function adminneo_instance()
{
	global $stk_config;

	class CustomAdmin extends \AdminNeo\Admin
	{
	}

	// Define configuration.
	$config = [
		"navigationMode" => $stk_config['navigation_mode'],
		"preferSelection" => $stk_config['prefer_selection'],
		"recordsPerPage" => $stk_config['records_per_page'],
	];

	// Enable plugins.
	$plugins = [
		new \AdminNeo\JsonPreviewPlugin(),
		new \AdminNeo\XmlDumpPlugin(),
		new \AdminNeo\FrameSupportPlugin(),
	];

	// Use factory method to create CustomAdmin instance.
	return CustomAdmin::create($config, $plugins);
}

// Include AdminNeo file.
include $db_source_path . 'adminneo.' . $phpEx;
