<?php
/**
*
* @package Support Toolkit - Database Cleaner
* @version $Id$
* @copyright (c) 2009 phpBB Group
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

/**
* phpBB 3.2.0 data file
*/
class datafile_3_2_0
{
	/**
	* @var Array The bots
	*/
	var $bots = array(
		'AdsBot [Google]'			=> array('AdsBot-Google', ''),
		'Alexa [Bot]'				=> array('ia_archiver', ''),
		'Alta Vista [Bot]'			=> array('Scooter/', ''),
		'Ask Jeeves [Bot]'			=> array('Ask Jeeves', ''),
		'Baidu [Spider]'			=> array('Baiduspider', ''),
		'Bing [Bot]'				=> array('bingbot/', ''),
		'Exabot [Bot]'				=> array('Exabot', ''),
		'FAST Enterprise [Crawler]'	=> array('FAST Enterprise Crawler', ''),
		'FAST WebCrawler [Crawler]'	=> array('FAST-WebCrawler/', ''),
		'Francis [Bot]'				=> array('http://www.neomo.de/', ''),
		'Gigabot [Bot]'				=> array('Gigabot/', ''),
		'Google Adsense [Bot]'		=> array('Mediapartners-Google', ''),
		'Google Desktop'			=> array('Google Desktop', ''),
		'Google Feedfetcher'		=> array('Feedfetcher-Google', ''),
		'Google [Bot]'				=> array('Googlebot', ''),
		'Heise IT-Markt [Crawler]'	=> array('heise-IT-Markt-Crawler', ''),
		'Heritrix [Crawler]'		=> array('heritrix/1.', ''),
		'IBM Research [Bot]'		=> array('ibm.com/cs/crawler', ''),
		'ICCrawler - ICjobs'		=> array('ICCrawler - ICjobs', ''),
		'ichiro [Crawler]'			=> array('ichiro/', ''),
		'Majestic-12 [Bot]'			=> array('MJ12bot/', ''),
		'Metager [Bot]'				=> array('MetagerBot/', ''),
		'MSN NewsBlogs'				=> array('msnbot-NewsBlogs/', ''),
		'MSN [Bot]'					=> array('msnbot/', ''),
		'MSNbot Media'				=> array('msnbot-media/', ''),
		'Nutch [Bot]'				=> array('http://lucene.apache.org/nutch/', ''),
		'Online link [Validator]'	=> array('online link validator', ''),
		'psbot [Picsearch]'			=> array('psbot/0', ''),
		'Sensis [Crawler]'			=> array('Sensis Web Crawler', ''),
		'SEO Crawler'				=> array('SEO search Crawler/', ''),
		'Seoma [Crawler]'			=> array('Seoma [SEO Crawler]', ''),
		'SEOSearch [Crawler]'		=> array('SEOsearch/', ''),
		'Snappy [Bot]'				=> array('Snappy/1.1 ( http://www.urltrends.com/ )', ''),
		'Steeler [Crawler]'			=> array('http://www.tkl.iis.u-tokyo.ac.jp/~crawler/', ''),
		'Telekom [Bot]'				=> array('crawleradmin.t-info@telekom.de', ''),
		'TurnitinBot [Bot]'			=> array('TurnitinBot/', ''),
		'Voyager [Bot]'				=> array('voyager/', ''),
		'W3 [Sitesearch]'			=> array('W3 SiteSearch Crawler', ''),
		'W3C [Linkcheck]'			=> array('W3C-checklink/', ''),
		'W3C [Validator]'			=> array('W3C_Validator', ''),
		'YaCy [Bot]'				=> array('yacybot', ''),
		'Yahoo MMCrawler [Bot]'		=> array('Yahoo-MMCrawler/', ''),
		'Yahoo Slurp [Bot]'			=> array('Yahoo! DE Slurp', ''),
		'Yahoo [Bot]'				=> array('Yahoo! Slurp', ''),
		'YahooSeeker [Bot]'			=> array('YahooSeeker/', ''),
	);

	/**
	* @var Array 3.2.0 config data
	*/
	var $config = array(
		'active_sessions'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_attachments'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_autologin'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_avatar'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_avatar_remote_upload'	=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_avatar_gravatar'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_avatar_local'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_avatar_remote'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_avatar_upload'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_bbcode'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_birthdays'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_bookmarks'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_cdn'						=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_emailreuse'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_password_reset'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_forum_notify'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_live_searches'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_mass_pm'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_name_chars'				=> array('config_value' => 'USERNAME_CHARS_ANY', 'is_dynamic' => '0'),
		'allow_namechange'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_nocensors'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_pm_attach'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_pm_report'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_post_flash'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_post_links'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_privmsg'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_quick_reply'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_sig'						=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_sig_bbcode'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_sig_flash'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_sig_img'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_sig_links'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_sig_pm'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_sig_smilies'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_smilies'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allow_topic_notify'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'allowed_schemes_links'			=> array('config_value' => 'http,https,ftp', 'is_dynamic' => '0'),
		'assets_version'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'attachment_quota'				=> array('config_value' => '52428800', 'is_dynamic' => '0'),
		'auth_bbcode_pm'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'auth_flash_pm'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'auth_img_pm'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'auth_method'					=> array('config_value' => 'db', 'is_dynamic' => '0'),
		'auth_oauth_bitly_key'			=> array('config_value' => '', 'is_dynamic' => '0'),
		'auth_oauth_bitly_secret'		=> array('config_value' => '', 'is_dynamic' => '0'),
		'auth_oauth_facebook_key'		=> array('config_value' => '', 'is_dynamic' => '0'),
		'auth_oauth_facebook_secret'	=> array('config_value' => '', 'is_dynamic' => '0'),
		'auth_oauth_google_key'			=> array('config_value' => '', 'is_dynamic' => '0'),
		'auth_oauth_google_secret'		=> array('config_value' => '', 'is_dynamic' => '0'),
		'auth_smilies_pm'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'avatar_filesize'				=> array('config_value' => '6144', 'is_dynamic' => '0'),
		'avatar_gallery_path'			=> array('config_value' => 'images/avatars/gallery', 'is_dynamic' => '0'),
		'avatar_max_height'				=> array('config_value' => '90', 'is_dynamic' => '0'),
		'avatar_max_width'				=> array('config_value' => '90', 'is_dynamic' => '0'),
		'avatar_min_height'				=> array('config_value' => '20', 'is_dynamic' => '0'),
		'avatar_min_width'				=> array('config_value' => '20', 'is_dynamic' => '0'),
		'avatar_path'					=> array('config_value' => 'images/avatars/upload', 'is_dynamic' => '0'),
		'avatar_salt'					=> array('config_value' => 'abe7f18da0dd71dc66f5ac84cea7abc5', 'is_dynamic' => '0'),
		'board_contact'					=> array('config_value' => 'contact@yourdomain.tld', 'is_dynamic' => '0'),
		'board_contact_name'			=> array('config_value' => '', 'is_dynamic' => '0'),
		'board_disable'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'board_disable_msg'				=> array('config_value' => '', 'is_dynamic' => '0'),
		'board_email'					=> array('config_value' => 'address@yourdomain.tld', 'is_dynamic' => '0'),
		'board_email_form'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'board_email_sig'				=> array('config_value' => 'Thanks, The Management', 'is_dynamic' => '0'),
		'board_hide_emails'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'board_index_text'				=> array('config_value' => '', 'is_dynamic' => '0'),
		'board_timezone'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'browser_check'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'bump_interval'					=> array('config_value' => '10', 'is_dynamic' => '0'),
		'bump_type'						=> array('config_value' => 'd', 'is_dynamic' => '0'),
		'cache_gc'						=> array('config_value' => '7200', 'is_dynamic' => '0'),
		'captcha_plugin'				=> array('config_value' => 'core.captcha.plugins.nogd', 'is_dynamic' => '0'),
		'captcha_gd'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'captcha_gd_foreground_noise'	=> array('config_value' => '0', 'is_dynamic' => '0'),
		'captcha_gd_x_grid'				=> array('config_value' => '25', 'is_dynamic' => '0'),
		'captcha_gd_y_grid'				=> array('config_value' => '25', 'is_dynamic' => '0'),
		'captcha_gd_wave'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'captcha_gd_3d_noise'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'captcha_gd_fonts'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'confirm_refresh'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'check_attachment_content'		=> array('config_value' => '1', 'is_dynamic' => '0'),
		'check_dnsbl'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'chg_passforce'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'contact_admin_form_enable'		=> array('config_value' => '1', 'is_dynamic' => '0'),
		'cookie_domain'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'cookie_name'					=> array('config_value' => 'phpbb3_bhra1', 'is_dynamic' => '0'),
		'cookie_notice'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'cookie_path'					=> array('config_value' => '/', 'is_dynamic' => '0'),
		'cookie_secure'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'coppa_enable'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'coppa_fax'						=> array('config_value' => '', 'is_dynamic' => '0'),
		'coppa_mail'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'database_gc'					=> array('config_value' => '604800', 'is_dynamic' => '0'),
		'dbms_version'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'default_dateformat'			=> array('config_value' => 'D M d, Y g:i a', 'is_dynamic' => '0'),
		'default_style'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'display_last_edited'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'display_last_subject'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'display_order'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'edit_time'						=> array('config_value' => '0', 'is_dynamic' => '0'),
		'extension_force_unstable'		=> array('config_value' => '0', 'is_dynamic' => '0'),
		'delete_time'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'email_check_mx'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'email_enable'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'email_function_name'			=> array('config_value' => 'mail', 'is_dynamic' => '0'),
		'email_max_chunk_size'			=> array('config_value' => '50', 'is_dynamic' => '0'),
		'email_package_size'			=> array('config_value' => '50', 'is_dynamic' => '0'),
		'enable_confirm'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'enable_mod_rewrite'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'allow_board_notifications'		=> array('config_value' => '1', 'is_dynamic' => '0'),
		'enable_pm_icons'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'enable_post_confirm'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'feed_enable'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'feed_http_auth'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'feed_limit_post'				=> array('config_value' => '15', 'is_dynamic' => '0'),
		'feed_limit_topic'				=> array('config_value' => '10', 'is_dynamic' => '0'),
		'feed_overall_forums'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'feed_overall'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'feed_forum'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'feed_topic'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'feed_topics_new'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'feed_topics_active'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'feed_item_statistics'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'flood_interval'				=> array('config_value' => '15', 'is_dynamic' => '0'),
		'force_server_vars'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'form_token_lifetime'			=> array('config_value' => '7200', 'is_dynamic' => '0'),
		'form_token_mintime'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'form_token_sid_guests'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'forward_pm'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'forwarded_for_check'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'full_folder_action'			=> array('config_value' => '2', 'is_dynamic' => '0'),
		'fulltext_mysql_max_word_len'	=> array('config_value' => '254', 'is_dynamic' => '0'),
		'fulltext_mysql_min_word_len'	=> array('config_value' => '4', 'is_dynamic' => '0'),
		'fulltext_native_common_thres'	=> array('config_value' => '5', 'is_dynamic' => '0'),
		'fulltext_native_load_upd'		=> array('config_value' => '1', 'is_dynamic' => '0'),
		'fulltext_native_max_chars'		=> array('config_value' => '14', 'is_dynamic' => '0'),
		'fulltext_native_min_chars'		=> array('config_value' => '3', 'is_dynamic' => '0'),
		'fulltext_postgres_max_word_len'	=> array('config_value' => '254', 'is_dynamic' => '0'),
		'fulltext_postgres_min_word_len'	=> array('config_value' => '4', 'is_dynamic' => '0'),
		'fulltext_postgres_ts_name'			=> array('simple', 'is_dynamic' => '0'),
		'fulltext_sphinx_indexer_mem_limit'	=> array('config_value' => '512', 'is_dynamic' => '0'),
		'fulltext_sphinx_stopwords'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'gzip_compress'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'help_send_statistics'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'help_send_statistics_time'		=> array('config_value' => '0', 'is_dynamic' => '0'),
		'hot_threshold'					=> array('config_value' => '25', 'is_dynamic' => '0'),
		'icons_path'					=> array('config_value' => 'images/icons', 'is_dynamic' => '0'),
		'img_create_thumbnail'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'img_display_inlined'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'img_imagick'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'img_link_height'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'img_link_width'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'img_max_height'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'img_max_thumb_width'			=> array('config_value' => '400', 'is_dynamic' => '0'),
		'img_max_width'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'img_min_thumb_filesize'		=> array('config_value' => '12000', 'is_dynamic' => '0'),
		'ip_check'						=> array('config_value' => '3', 'is_dynamic' => '0'),
		'ip_login_limit_max'			=> array('config_value' => '50', 'is_dynamic' => '0'),
		'ip_login_limit_time'			=> array('config_value' => '21600', 'is_dynamic' => '0'),
		'ip_login_limit_use_forwarded'	=> array('config_value' => '0', 'is_dynamic' => '0'),
		'jab_enable'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'jab_host'						=> array('config_value' => '', 'is_dynamic' => '0'),
		'jab_password'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'jab_package_size'				=> array('config_value' => '20', 'is_dynamic' => '0'),
		'jab_port'						=> array('config_value' => '5222', 'is_dynamic' => '0'),
		'jab_use_ssl'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'jab_username'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_base_dn'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_email'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_password'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_port'						=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_server'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_uid'						=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_user'						=> array('config_value' => '', 'is_dynamic' => '0'),
		'ldap_user_filter'				=> array('config_value' => '', 'is_dynamic' => '0'),
		'legend_sort_groupname'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'limit_load'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'limit_search_load'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'load_anon_lastread'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'load_birthdays'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_cpf_memberlist'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'load_cpf_pm'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_cpf_viewprofile'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_cpf_viewtopic'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'load_db_lastread'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_db_track'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_jquery_url'				=> array('config_value' => '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'is_dynamic' => '0'),
		'load_jumpbox'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_moderators'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_notifications'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_online'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_online_guests'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_online_time'				=> array('config_value' => '5', 'is_dynamic' => '0'),
		'load_onlinetrack'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_search'					=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_tplcompile'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'load_unreads_search'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'load_user_activity'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'max_attachments'				=> array('config_value' => '3', 'is_dynamic' => '0'),
		'max_attachments_pm'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'max_autologin_time'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_filesize'					=> array('config_value' => '262144', 'is_dynamic' => '0'),
		'max_filesize_pm'				=> array('config_value' => '262144', 'is_dynamic' => '0'),
		'max_login_attempts'			=> array('config_value' => '3', 'is_dynamic' => '0'),
		'max_name_chars'				=> array('config_value' => '20', 'is_dynamic' => '0'),
		'max_num_search_keywords'		=> array('config_value' => '10', 'is_dynamic' => '0'),
		'max_pass_chars'				=> array('config_value' => '30', 'is_dynamic' => '0'),
		'max_poll_options'				=> array('config_value' => '10', 'is_dynamic' => '0'),
		'max_post_chars'				=> array('config_value' => '60000', 'is_dynamic' => '0'),
		'max_post_font_size'			=> array('config_value' => '200', 'is_dynamic' => '0'),
		'max_post_img_height'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_post_img_width'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_post_smilies'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_post_urls'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_quote_depth'				=> array('config_value' => '3', 'is_dynamic' => '0'),
		'max_reg_attempts'				=> array('config_value' => '5', 'is_dynamic' => '0'),
		'max_sig_chars'					=> array('config_value' => '255', 'is_dynamic' => '0'),
		'max_sig_font_size'				=> array('config_value' => '200', 'is_dynamic' => '0'),
		'max_sig_img_height'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_sig_img_width'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_sig_smilies'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'max_sig_urls'					=> array('config_value' => '5', 'is_dynamic' => '0'),
		'min_name_chars'				=> array('config_value' => '3', 'is_dynamic' => '0'),
		'min_pass_chars'				=> array('config_value' => '6', 'is_dynamic' => '0'),
		'min_post_chars'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'min_search_author_chars'		=> array('config_value' => '3', 'is_dynamic' => '0'),
		'mime_triggers'					=> array('config_value' => 'body|head|html|img|plaintext|a href|pre|script|table|title', 'is_dynamic' => '0'),
		'new_member_post_limit'			=> array('config_value' => '3', 'is_dynamic' => '0'),
		'new_member_group_default'		=> array('config_value' => '0', 'is_dynamic' => '0'),
		'override_user_style'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'pass_complex'					=> array('config_value' => 'PASS_TYPE_ANY', 'is_dynamic' => '0'),
		'plupload_salt'					=> array('config_value' => 'PASS_TYPE_ANY', 'is_dynamic' => '0'),
		'pm_edit_time'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'pm_max_boxes'					=> array('config_value' => '4', 'is_dynamic' => '0'),
		'pm_max_msgs'					=> array('config_value' => '50', 'is_dynamic' => '0'),
		'pm_max_recipients'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'posts_per_page'				=> array('config_value' => '10', 'is_dynamic' => '0'),
		'print_pm'						=> array('config_value' => '1', 'is_dynamic' => '0'),
		'queue_interval'				=> array('config_value' => '600', 'is_dynamic' => '0'),
		'ranks_path'					=> array('config_value' => 'images/ranks', 'is_dynamic' => '0'),
		'read_notification_expire_days'	=> array('config_value' => '30', 'is_dynamic' => '0'),
		'read_notification_gc'			=> array('config_value' => '86400', 'is_dynamic' => '0'),
		'read_notification_last_gc'		=> array('config_value' => '0', 'is_dynamic' => '1'),
		'remote_upload_verify'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'require_activation'			=> array('config_value' => '0', 'is_dynamic' => '0'),
		'script_path'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'referer_validation'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'search_block_size'				=> array('config_value' => '250', 'is_dynamic' => '0'),
		'search_gc'						=> array('config_value' => '7200', 'is_dynamic' => '0'),
		'search_indexing_state'			=> array('config_value' => '', 'is_dynamic' => '0'),
		'search_interval'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'search_anonymous_interval'		=> array('config_value' => '0', 'is_dynamic' => '0'),
		'search_type'					=> array('config_value' => 'fulltext_native', 'is_dynamic' => '0'),
		'search_store_results'			=> array('config_value' => '1800', 'is_dynamic' => '0'),
		'secure_allow_deny'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'secure_allow_empty_referer'	=> array('config_value' => '1', 'is_dynamic' => '0'),
		'secure_downloads'				=> array('config_value' => '0', 'is_dynamic' => '0'),
		'server_name'					=> array('config_value' => 'dev.localhost.com', 'is_dynamic' => '0'),
		'server_port'					=> array('config_value' => '80', 'is_dynamic' => '0'),
		'server_protocol'				=> array('config_value' => 'http://', 'is_dynamic' => '0'),
		'session_gc'					=> array('config_value' => '3600', 'is_dynamic' => '0'),
		'session_length'				=> array('config_value' => '3600', 'is_dynamic' => '0'),
		'site_desc'						=> array('config_value' => 'A short text to describe your forum', 'is_dynamic' => '0'),
		'site_home_text'				=> array('config_value' => '', 'is_dynamic' => '0'),
		'site_home_url'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'sitename'						=> array('config_value' => 'yourdomain.com', 'is_dynamic' => '0'),
		'smilies_path'					=> array('config_value' => 'images/smilies', 'is_dynamic' => '0'),
		'smilies_per_page'				=> array('config_value' => '50', 'is_dynamic' => '0'),
		'smtp_auth_method'				=> array('config_value' => 'PLAIN', 'is_dynamic' => '0'),
		'smtp_delivery'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'smtp_host'						=> array('config_value' => '', 'is_dynamic' => '0'),
		'smtp_password'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'smtp_port'						=> array('config_value' => '25', 'is_dynamic' => '0'),
		'smtp_username'					=> array('config_value' => '', 'is_dynamic' => '0'),
		'topics_per_page'				=> array('config_value' => '25', 'is_dynamic' => '0'),
		'teampage_forums'				=> array('config_value' => '1', 'is_dynamic' => '0'),
		'teampage_memberships'			=> array('config_value' => '1', 'is_dynamic' => '0'),
		'tpl_allow_php'					=> array('config_value' => '0', 'is_dynamic' => '0'),
		'upload_icons_path'				=> array('config_value' => 'images/upload_icons', 'is_dynamic' => '0'),
		'upload_path'					=> array('config_value' => 'files', 'is_dynamic' => '0'),
		'version'						=> array('config_value' => '3.1.2', 'is_dynamic' => '0'),
		'warnings_expire_days'			=> array('config_value' => '90', 'is_dynamic' => '0'),
		'warnings_gc'					=> array('config_value' => '14400', 'is_dynamic' => '0'),
		'cache_last_gc'					=> array('config_value' => '0', 'is_dynamic' => '1'),
		'cron_lock'						=> array('config_value' => '0', 'is_dynamic' => '1'),
		'database_last_gc'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'last_queue_run'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'newest_user_colour'			=> array('config_value' => 'AA0000', 'is_dynamic' => '1'),
		'newest_user_id'				=> array('config_value' => '2', 'is_dynamic' => '1'),
		'newest_username'				=> array('config_value' => '', 'is_dynamic' => '1'),
		'num_files'						=> array('config_value' => '0', 'is_dynamic' => '1'),
		'num_posts'						=> array('config_value' => '1', 'is_dynamic' => '1'),
		'num_topics'					=> array('config_value' => '1', 'is_dynamic' => '1'),
		'num_users'						=> array('config_value' => '1', 'is_dynamic' => '1'),
		'plupload_last_gc'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'rand_seed'						=> array('config_value' => '64666a229f4a29b4593b8de060adb805', 'is_dynamic' => '1'),
		'rand_seed_last_update'			=> array('config_value' => '1267911894', 'is_dynamic' => '1'),
		'record_online_date'			=> array('config_value' => '1267911901', 'is_dynamic' => '1'),
		'record_online_users'			=> array('config_value' => '2', 'is_dynamic' => '1'),
		'search_last_gc'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'session_last_gc'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'upload_dir_size'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'warnings_last_gc'				=> array('config_value' => '0', 'is_dynamic' => '1'),
		'board_startdate'				=> array('config_value' => '1267911892', 'is_dynamic' => '0'),
		'default_lang'					=> array('config_value' => 'en', 'is_dynamic' => '0'),
		'use_system_cron'				=> array('config_value' => '0', 'is_dynamic' => '0'),
	);


	/**
	* @var Array Config entries that were removed in initital setup
	*/
	var $removed_config = array(
		// No config entries in initital setup
	);

	/**
	* @var Array All default permission settings
	*/
	var $acl_options = array(
		'f_'				=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_announce'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_announce_global'	=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_attach'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_bbcode'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_bump'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_delete'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_download'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_edit'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_email'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_flash'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_icons'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_ignoreflood'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_img'				=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_list'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_noapprove'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_poll'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_post'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_postcount'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_print'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_read'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_reply'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_report'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_search'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_sigs'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_smilies'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_softdelete'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_sticky'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_subscribe'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_user_lock'		=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_vote'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'f_votechg'			=> array('is_global' => '0', 'is_local' => '1', 'founder_only' => '0'),
		'm_'				=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_approve'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_chgposter'		=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_delete'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_softdelete'		=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_edit'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_info'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_lock'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_merge'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_move'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_report'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_split'			=> array('is_global' => '1', 'is_local' => '1', 'founder_only' => '0'),
		'm_ban'				=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'm_pm_report'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'm_warn'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_'				=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_aauth'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_attach'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_authgroups'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_authusers'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_backup'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_ban'				=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_bbcode'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_board'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_bots'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_clearlogs'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_email'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_extensions'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_fauth'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_forum'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_forumadd'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_forumdel'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_group'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_groupadd'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_groupdel'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_icons'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_jabber'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_language'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_mauth'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_modules'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_names'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_phpinfo'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_profile'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_prune'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_ranks'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_reasons'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_roles'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_search'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_server'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_styles'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_switchperm'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_uauth'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_user'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_userdel'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_viewauth'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_viewlogs'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'a_words'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_'				=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_attach'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chgavatar'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chgcensors'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chgemail'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chggrp'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chgprofileinfo'	=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chgname'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_chgpasswd'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_download'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_hideonline'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_ignoreflood'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_masspm'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_masspm_group'	=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_attach'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_bbcode'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_delete'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_download'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_edit'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_emailpm'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_flash'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_forward'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_img'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_printpm'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_pm_smilies'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_readpm'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_savedrafts'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_search'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_sendemail'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_sendim'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_sendpm'			=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_sig'				=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_viewonline'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
		'u_viewprofile'		=> array('is_global' => '1', 'is_local' => '0', 'founder_only' => '0'),
	);

	/**
	* @var Array All default roles
	*/
	var $acl_roles = array(
		'ROLE_ADMIN_STANDARD'		=> array('ROLE_DESCRIPTION_ADMIN_STANDARD', 'a_', 1),
		'ROLE_ADMIN_FORUM'			=> array('ROLE_DESCRIPTION_ADMIN_FORUM', 'a_', 3),
		'ROLE_ADMIN_USERGROUP'		=> array('ROLE_DESCRIPTION_ADMIN_USERGROUP', 'a_', 4),
		'ROLE_ADMIN_FULL'			=> array('ROLE_DESCRIPTION_ADMIN_FULL', 'a_', 2),
		'ROLE_USER_FULL'			=> array('ROLE_DESCRIPTION_USER_FULL', 'u_', 3),
		'ROLE_USER_STANDARD'		=> array('ROLE_DESCRIPTION_USER_STANDARD', 'u_', 1),
		'ROLE_USER_LIMITED'			=> array('ROLE_DESCRIPTION_USER_LIMITED', 'u_', 2),
		'ROLE_USER_NOPM'			=> array('ROLE_DESCRIPTION_USER_NOPM', 'u_', 4),
		'ROLE_USER_NOAVATAR'		=> array('ROLE_DESCRIPTION_USER_NOAVATAR', 'u_', 5),
		'ROLE_MOD_FULL'				=> array('ROLE_DESCRIPTION_MOD_FULL', 'm_', 3),
		'ROLE_MOD_STANDARD'			=> array('ROLE_DESCRIPTION_MOD_STANDARD', 'm_', 1),
		'ROLE_MOD_SIMPLE'			=> array('ROLE_DESCRIPTION_MOD_SIMPLE', 'm_', 2),
		'ROLE_MOD_QUEUE'			=> array('ROLE_DESCRIPTION_MOD_QUEUE', 'm_', 4),
		'ROLE_FORUM_FULL'			=> array('ROLE_DESCRIPTION_FORUM_FULL', 'f_', 7),
		'ROLE_FORUM_STANDARD'		=> array('ROLE_DESCRIPTION_FORUM_STANDARD', 'f_', 5),
		'ROLE_FORUM_NOACCESS'		=> array('ROLE_DESCRIPTION_FORUM_NOACCESS', 'f_', 1),
		'ROLE_FORUM_READONLY'		=> array('ROLE_DESCRIPTION_FORUM_READONLY', 'f_', 2),
		'ROLE_FORUM_LIMITED'		=> array('ROLE_DESCRIPTION_FORUM_LIMITED', 'f_', 3),
		'ROLE_FORUM_BOT'			=> array('ROLE_DESCRIPTION_FORUM_BOT', 'f_', 9),
		'ROLE_FORUM_ONQUEUE'		=> array('ROLE_DESCRIPTION_FORUM_ONQUEUE', 'f_', 8),
		'ROLE_FORUM_POLLS'			=> array('ROLE_DESCRIPTION_FORUM_POLLS', 'f_', 6),
		'ROLE_FORUM_LIMITED_POLLS'	=> array('ROLE_DESCRIPTION_FORUM_LIMITED_POLLS', 'f_', 4),
		'ROLE_USER_NEW_MEMBER'	=> array('ROLE_DESCRIPTION_USER_NEW_MEMBER', 'u_', 6),
		'ROLE_FORUM_NEW_MEMBER'	=> array('ROLE_DESCRIPTION_FORUM_NEW_MEMBER', 'f_', 10),
	);

	/**
	* @var Array All default role data
	*/
	var $acl_role_data = array(
		// Admin roles
		'ROLE_ADMIN_STANDARD'		=> array(
			'OPTION_LIKE'	=> "'a_%'",
			'OPTION_IN'		=> array('a_switchperm', 'a_jabber', 'a_phpinfo', 'a_server', 'a_backup', 'a_styles', 'a_clearlogs', 'a_modules', 'a_language', 'a_email', 'a_bots', 'a_search', 'a_aauth', 'a_roles'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_ADMIN_FORUM'			=> array(
			'OPTION_LIKE'	=> "'a_%'",
			'OPTION_IN'		=> array('a_', 'a_authgroups', 'a_authusers', 'a_fauth', 'a_forum', 'a_forumadd', 'a_forumdel', 'a_mauth', 'a_prune', 'a_uauth', 'a_viewauth', 'a_viewlogs'),
			'SETTING'		=> '1',
		),
		'ROLE_ADMIN_USERGROUP'		=> array(
			'OPTION_LIKE'	=> "'a_%'",
			'OPTION_IN'		=> array('a_', 'a_authgroups', 'a_authusers', 'a_ban', 'a_group', 'a_groupadd', 'a_groupdel', 'a_ranks', 'a_uauth', 'a_user', 'a_viewauth', 'a_viewlogs'),
			'SETTING'		=> '1',
		),
		'ROLE_ADMIN_FULL'			=> array(
			'OPTION_LIKE'	=> "'a_%'",
			'OPTION_IN'		=> array(),
			'SETTING'		=> '1',
		),

		// User roles
		'ROLE_USER_FULL'			=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array(),
			'SETTING'		=> '1',
		),
		'ROLE_USER_STANDARD'		=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_viewonline', 'u_chggrp', 'u_chgname', 'u_ignoreflood', 'u_pm_flash', 'u_pm_forward'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_USER_LIMITED'			=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_attach', 'u_viewonline', 'u_chggrp', 'u_chgname', 'u_ignoreflood', 'u_pm_attach', 'u_pm_emailpm', 'u_pm_flash', 'u_savedrafts', 'u_search', 'u_sendemail', 'u_sendim'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_USER_NOPM'			=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_', 'u_chgavatar', 'u_chgcensors', 'u_chgemail', 'u_chgpasswd', 'u_download', 'u_hideonline', 'u_sig', 'u_viewprofile'),
			'SETTING'		=> '1',
		),
		'ROLE_USER_NOPM '			=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_readpm', 'u_sendpm', 'u_masspm'),
			'SETTING'		=> '0',
		),
		'ROLE_USER_NOAVATAR'		=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_attach', 'u_chgavatar', 'u_viewonline', 'u_chggrp', 'u_chgname', 'u_ignoreflood', 'u_pm_attach', 'u_pm_emailpm', 'u_pm_flash', 'u_savedrafts', 'u_search', 'u_sendemail', 'u_sendim'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_USER_NOAVATAR '		=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_chgavatar'),
			'SETTING'		=> '0',
		),
		'ROLE_USER_NEW_MEMBER'			=> array(
			'OPTION_LIKE'	=> "'u_%'",
			'OPTION_IN'		=> array('u_sendpm', 'u_masspm', 'u_masspm_group'),
			'SETTING'		=> '0',
		),
		'ROLE_FORUM_NEW_MEMBER'			=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_noapprove'),
			'SETTING'		=> '0',
		),

		// Moderator roles
		'ROLE_MOD_FULL'				=> array(
			'OPTION_LIKE'	=> "'m_%'",
			'OPTION_IN'		=> array(),
			'SETTING'		=> '1',
		),
		'ROLE_MOD_STANDARD'			=> array(
			'OPTION_LIKE'	=> "'m_%'",
			'OPTION_IN'		=> array('m_ban', 'm_chgposter'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_MOD_SIMPLE'			=> array(
			'OPTION_LIKE'	=> "'m_%'",
			'OPTION_IN'		=> array('m_', 'm_delete', 'm_edit', 'm_info', 'm_report'),
			'SETTING'		=> '1',
		),
		'ROLE_MOD_QUEUE'			=> array(
			'OPTION_LIKE'	=> "'m_%'",
			'OPTION_IN'		=> array('m_', 'm_approve', 'm_edit'),
			'SETTING'		=> '1',
		),

		// Forum roles
		'ROLE_FORUM_FULL'			=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array(),
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_STANDARD'		=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_announce', 'f_flash', 'f_ignoreflood', 'f_poll', 'f_sticky', 'f_user_lock'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_NOACCESS'		=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array(),
			'SETTING'		=> '0',
		),
		'ROLE_FORUM_READONLY'		=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_', 'f_download', 'f_list', 'f_read', 'f_search', 'f_subscribe', 'f_print'),
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_LIMITED'		=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_announce', 'f_attach', 'f_bump', 'f_delete', 'f_flash', 'f_icons', 'f_ignoreflood', 'f_poll', 'f_sticky', 'f_user_lock', 'f_votechg'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_BOT'			=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_', 'f_download', 'f_list', 'f_read', 'f_print'),
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_ONQUEUE'		=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_announce', 'f_bump', 'f_delete', 'f_flash', 'f_icons', 'f_ignoreflood', 'f_poll', 'f_sticky', 'f_user_lock', 'f_votechg', 'f_noapprove'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_ONQUEUE '		=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_noapprove'),
			'SETTING'		=> '0',
		),
		'ROLE_FORUM_POLLS'			=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_announce', 'f_flash', 'f_ignoreflood', 'f_sticky', 'f_user_lock'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
		'ROLE_FORUM_LIMITED_POLLS'	=> array(
			'OPTION_LIKE'	=> "'f_%'",
			'OPTION_IN'		=> array('f_announce', 'f_attach', 'f_bump', 'f_delete', 'f_flash', 'f_icons', 'f_ignoreflood', 'f_sticky', 'f_user_lock', 'f_votechg'),
			'NEGATE'		=> true,
			'SETTING'		=> '1',
		),
	);

	/**
	* @var Array All default extension groups
	*/
	var $extension_groups = array(
		'IMAGES'			=> array(1, 1, 1, '', 0, '', 0),
		'ARCHIVES'			=> array(0, 1, 1, '', 0, '', 0),
		'PLAIN_TEXT'		=> array(0, 0, 1, '', 0, '', 0),
		'DOCUMENTS'			=> array(0, 0, 1, '', 0, '', 0),
		'FLASH_FILES'		=> array(5, 0, 1, '', 0, '', 0),
		'DOWNLOADABLE_FILES'=> array(0, 0, 1, '', 0, '', 0),
	);

	/**
	* @var Array All default extensions
	*/
	var $extensions = array(
		'IMAGES'				=> array(
			'gif',
			'png',
			'jpeg',
			'jpg',
			'tif',
			'tiff',
			'tga',
		),
		'ARCHIVES'			=> array(
			'gtar',
			'gz',
			'tar',
			'zip',
			'rar',
			'ace',
			'torrent',
			'tgz',
			'bz2',
			'7z',
		),
		'PLAIN_TEXT'			=> array(
			'txt',
			'c',
			'h',
			'cpp',
			'hpp',
			'diz',
			'csv',
			'ini',
			'log',
			'js',
			'xml',
		),
		'DOCUMENTS'			=> array(
			'xls',
			'xlsx',
			'xlsm',
			'xlsb',
			'doc',
			'docx',
			'docm',
			'dot',
			'dotx',
			'dotm',
			'pdf',
			'ai',
			'ps',
			'ppt',
			'pptx',
			'pptm',
			'odg',
			'odp',
			'ods',
			'odt',
			'rtf',
		),
		'FLASH_FILES'			=> array(
			'swf',
		),
		'DOWNLOADABLE_FILES'	=> array(
			'mpeg',
			'mpg',
			'mp3',
			'ogg',
			'ogm',
		),
	);

	/**
	* Define the module structure so that we can populate the database without
	* needing to hard-code module_id values
	*/
	var $module_categories = array(
		'acp'	=> array(
			'ACP_CAT_GENERAL'		=> array(
				'ACP_QUICK_ACCESS',
				'ACP_BOARD_CONFIGURATION',
				'ACP_CLIENT_COMMUNICATION',
				'ACP_SERVER_CONFIGURATION',
			),
			'ACP_CAT_FORUMS'		=> array(
				'ACP_MANAGE_FORUMS',
				'ACP_FORUM_BASED_PERMISSIONS',
			),
			'ACP_CAT_POSTING'		=> array(
				'ACP_MESSAGES',
				'ACP_ATTACHMENTS',
			),
			'ACP_CAT_USERGROUP'		=> array(
				'ACP_CAT_USERS',
				'ACP_GROUPS',
				'ACP_USER_SECURITY',
			),
			'ACP_CAT_PERMISSIONS'	=> array(
				'ACP_GLOBAL_PERMISSIONS',
				'ACP_FORUM_BASED_PERMISSIONS',
				'ACP_PERMISSION_ROLES',
				'ACP_PERMISSION_MASKS',
			),
			'ACP_CAT_CUSTOMISE'		=> array(
				'ACP_STYLE_MANAGEMENT',
				'ACP_EXTENSION_MANAGEMENT',
				'ACP_LANGUAGE',
			),
			'ACP_CAT_MAINTENANCE'	=> array(
				'ACP_FORUM_LOGS',
				'ACP_CAT_DATABASE',
			),
			'ACP_CAT_SYSTEM'		=> array(
				'ACP_AUTOMATION',
				'ACP_GENERAL_TASKS',
				'ACP_MODULE_MANAGEMENT',
			),
			'ACP_CAT_DOT_MODS'		=> null,
		),
		'mcp'	=> array(
			'MCP_MAIN'		=> null,
			'MCP_QUEUE'		=> null,
			'MCP_REPORTS'	=> null,
			'MCP_NOTES'		=> null,
			'MCP_WARN'		=> null,
			'MCP_LOGS'		=> null,
			'MCP_BAN'		=> null,
		),
		'ucp'	=> array(
			'UCP_MAIN'			=> null,
			'UCP_PROFILE'		=> null,
			'UCP_PREFS'			=> null,
			'UCP_PM'			=> null,
			'UCP_USERGROUPS'	=> null,
			'UCP_ZEBRA'			=> null,
		),
	);
	var $module_categories_basenames = array(
		'UCP_PM' => 'ucp_pm',
	);

	var $module_extras = array(
		'acp'	=> array(
			'ACP_QUICK_ACCESS' => array(
				'ACP_MANAGE_USERS',
				'ACP_GROUPS_MANAGE',
				'ACP_MANAGE_FORUMS',
				'ACP_MOD_LOGS',
				'ACP_BOTS',
				'ACP_PHP_INFO',
			),
			'ACP_FORUM_BASED_PERMISSIONS' => array(
				'ACP_FORUM_PERMISSIONS',
				'ACP_FORUM_MODERATORS',
				'ACP_USERS_FORUM_PERMISSIONS',
				'ACP_GROUPS_FORUM_PERMISSIONS',
			),
		),
	);

	/**
	* @var Array All default groups
	*/
	var $groups = array(
		'GUESTS'			=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 0,
			'group_colour'			=> '',
			'group_legend'			=> 0,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 5,
		),
		'REGISTERED'		=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 0,
			'group_colour'			=> '',
			'group_legend'			=> 0,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 5,
		),
		'REGISTERED_COPPA'	=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 0,
			'group_colour'			=> '',
			'group_legend'			=> 0,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 5,
		),
		'GLOBAL_MODERATORS'	=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 0,
			'group_colour'			=> '00AA00',
			'group_legend'			=> 1,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 0,
		),
		'ADMINISTRATORS'	=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 1,
			'group_colour'			=> 'AA0000',
			'group_legend'			=> 1,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 0,
		),
		'BOTS'				=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 0,
			'group_colour'			=> '9E8DA7',
			'group_legend'			=> 0,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 5,
		),
		'NEWLY_REGISTERED'		=> array(
			'group_type'			=> 3,
			'group_founder_manage'	=> 0,
			'group_colour'			=> '',
			'group_legend'			=> 0,
			'group_avatar'			=> '',
			'group_desc'			=> '',
			'group_desc_uid'		=> '',
			'group_max_recipients'	=> 5,
		),
	);

	/**
	* @var Array All default report reasons
	*/
	var $report_reasons = array(
		'warez'		=> array('{L_REPORT_WAREZ}', 1),
		'spam'		=> array('{L_REPORT_SPAM}', 2),
		'off_topic'	=> array('{L_REPORT_OFF_TOPIC}', 3),
		'other'		=> array('{L_REPORT_OTHER}', 4),
	);

	var $acp_modules = array(
		'acp'		=> array(
				'ACP_CAT_GENERAL'		=> array(
					'ACP_INDEX',
					'ACP_QUICK_ACCESS'			=> array(
						'ACP_MANAGE_USERS',
						'ACP_GROUPS_MANAGE',
						'ACP_MANAGE_FORUMS',
						'ACP_MOD_LOGS',
						'ACP_BOTS',
						'ACP_PHP_INFO',
					),
					'ACP_BOARD_CONFIGURATION'	=> array(
						'ACP_ATTACHMENT_SETTINGS',
						'ACP_BOARD_SETTINGS',
						'ACP_BOARD_FEATURES',
						'ACP_AVATAR_SETTINGS',
						'ACP_MESSAGE_SETTINGS',
						'ACP_SIGNATURE_SETTINGS',
						'ACP_FEED_SETTINGS',
						'ACP_REGISTER_SETTINGS',
						'ACP_VC_SETTINGS',
						'ACP_VC_CAPTCHA_DISPLAY',
						'ACP_CONTACT_SETTINGS',
					),
					'ACP_CLIENT_COMMUNICATION'	=> array(
						'ACP_AUTH_SETTINGS',
						'ACP_EMAIL_SETTINGS',
						'ACP_JABBER_SETTINGS',
					),
					'ACP_SERVER_CONFIGURATION'	=> array(
						'ACP_COOKIE_SETTINGS',
						'ACP_SERVER_SETTINGS',
						'ACP_SECURITY_SETTINGS',
						'ACP_LOAD_SETTINGS',
						'ACP_SEARCH_SETTINGS',
						'ACP_HELP_PHPBB',
					),
				),
				'ACP_CAT_FORUMS'		=> array(
					'ACP_MANAGE_FORUMS'		=> array(
						'ACP_MANAGE_FORUMS',
						'ACP_PRUNE_FORUMS',
					),
					'ACP_FORUM_BASED_PERMISSIONS'	=> array(
						'ACP_FORUM_PERMISSIONS',
						'ACP_FORUM_PERMISSIONS_COPY',
						'ACP_FORUM_MODERATORS',
						'ACP_USERS_FORUM_PERMISSIONS',
						'ACP_GROUPS_FORUM_PERMISSIONS',
					),
				),
				'ACP_CAT_POSTING'		=> array(
					'ACP_MESSAGES'		=> array(
						'ACP_BBCODES',
						'ACP_MESSAGE_SETTINGS',
						'ACP_POST_SETTINGS',
						'ACP_ICONS',
						'ACP_SMILIES',
						'ACP_WORDS',
					),
					'ACP_ATTACHMENTS'		=> array(
						'ACP_MANAGE_EXTENSIONS',
						'ACP_EXTENSION_GROUPS',
						'ACP_ORPHAN_ATTACHMENTS',
						'ACP_MANAGE_ATTACHMENTS',
					),
				),
				'ACP_CAT_USERGROUP'		=> array(
					'ACP_CAT_USERS'		=> array(
						'ACP_INACTIVE_USERS',
						'ACP_MANAGE_USERS',
						'ACP_USER_PROFILE',
						'ACP_USERS_PERMISSIONS',
						'ACP_CUSTOM_PROFILE_FIELDS',
						'ACP_PRUNE_USERS',
						'ACP_MANAGE_RANKS',
						'ACP_USER_FEEDBACK',
						'ACP_USER_WARNINGS',
						'ACP_USER_PREFS',
						'ACP_USER_AVATAR',
						'ACP_USER_RANK',
						'ACP_USER_SIG',
						'ACP_USER_GROUPS',
						'ACP_USER_PERM',
						'ACP_USER_ATTACH',
					),
					'ACP_GROUPS'			=> array(
						'ACP_GROUPS_MANAGE',
						'ACP_GROUPS_POSITION',
						'ACP_GROUPS_PERMISSIONS',
						'ACP_GROUPS_FORUM_PERMISSIONS',
					),
					'ACP_USER_SECURITY'		=> array(
						'ACP_BAN_EMAILS',
						'ACP_BAN_IPS',
						'ACP_BAN_USERNAMES',
						'ACP_DISALLOW_USERNAMES',
					),
				),
				'ACP_CAT_PERMISSIONS'	=> array(
					'ACP_PERMISSIONS',
					'ACP_GLOBAL_PERMISSIONS'		=> array(
						'ACP_USERS_PERMISSIONS',
						'ACP_GROUPS_PERMISSIONS',
						'ACP_ADMINISTRATORS',
						'ACP_GLOBAL_MODERATORS',
					),
					'ACP_FORUM_BASED_PERMISSIONS'	=> array(
						'ACP_FORUM_PERMISSIONS',
						'ACP_FORUM_PERMISSIONS_COPY',
						'ACP_FORUM_MODERATORS',
						'ACP_USERS_FORUM_PERMISSIONS',
						'ACP_GROUPS_FORUM_PERMISSIONS',
					),
					'ACP_PERMISSION_ROLES'			=> array(
						'ACP_ADMIN_ROLES',
						'ACP_USER_ROLES',
						'ACP_MOD_ROLES',
						'ACP_FORUM_ROLES',
					),
					'ACP_PERMISSION_MASKS'			=> array(
						'ACP_PERMISSION_TRACE',
						'ACP_VIEW_ADMIN_PERMISSIONS',
						'ACP_VIEW_USER_PERMISSIONS',
						'ACP_VIEW_GLOBAL_MOD_PERMISSIONS',
						'ACP_VIEW_FORUM_MOD_PERMISSIONS',
						'ACP_VIEW_FORUM_PERMISSIONS',
					),
				),
				'ACP_CAT_CUSTOMISE'		=> array(
					'ACP_EXTENSION_MANAGEMENT'		=> array(
						'ACP_EXTENSIONS',
					),
					'ACP_STYLE_MANAGEMENT'			=> array(
						'ACP_STYLES',
						'ACP_STYLES_INSTALL',
					),
					'ACP_LANGUAGE'					=> array(
						'ACP_LANGUAGE_PACKS',
					),
				),
				'ACP_CAT_MAINTENANCE'	=> array(
					'ACP_FORUM_LOGS'		=> array(
						'ACP_ADMIN_LOGS',
						'ACP_MOD_LOGS',
						'ACP_USERS_LOGS',
						'ACP_CRITICAL_LOGS',
					),
					'ACP_CAT_DATABASE'		=> array(
						'ACP_BACKUP',
						'ACP_RESTORE',
						'ACP_SEARCH_INDEX',
					),
				),
				'ACP_CAT_SYSTEM'			=> array(
					'ACP_AUTOMATION'			=> array(
						'ACP_VERSION_CHECK',
					),
					'ACP_GENERAL_TASKS'			=> array(
						'ACP_BOTS',
						'ACP_MASS_EMAIL',
						'ACP_PHP_INFO',
						'ACP_MANAGE_REASONS',
					),
					'ACP_MODULE_MANAGEMENT'		=> array(
						'ACP',
						'MCP',
						'UCP',
					),
				),
				'ACP_CAT_DOT_MODS'			=> array(
				),
		),
		'ucp'	=> array(
			'UCP_MAIN'		=> array(
				'UCP_MAIN_FRONT',
				'UCP_MAIN_SUBSCRIBED',
				'UCP_MAIN_BOOKMARKS',
				'UCP_MAIN_DRAFTS',
				'UCP_MAIN_ATTACHMENTS',
				'UCP_NOTIFICATION_LIST',
			),
			'UCP_PROFILE'		=> array(
				'UCP_PROFILE_PROFILE_INFO',
				'UCP_PROFILE_SIGNATURE',
				'UCP_PROFILE_AVATAR',
				'UCP_PROFILE_REG_DETAILS',
				'UCP_PROFILE_AUTOLOGIN_KEYS',
				'UCP_AUTH_LINK_MANAGE',
			),
			'UCP_PREFS'			=> array(
				'UCP_PREFS_PERSONAL',
				'UCP_PREFS_POST',
				'UCP_PREFS_VIEW',
				'UCP_NOTIFICATION_OPTIONS',
			),
			'UCP_PM'			=> array(
				'UCP_PM_VIEW',
				'UCP_PM_COMPOSE',
				'UCP_PM_DRAFTS',
				'UCP_PM_OPTIONS',
			),
			'UCP_USERGROUPS'	=> array(
				'UCP_USERGROUPS_MEMBER',
				'UCP_USERGROUPS_MANAGE',
			),
			'UCP_ZEBRA'			=> array(
				'UCP_ZEBRA_FRIENDS',
				'UCP_ZEBRA_FOES',
			),
		),
		'mcp'	=> array(
			'MCP_MAIN'		=> array(
				'MCP_MAIN_FRONT',
				'MCP_MAIN_FORUM_VIEW',
				'MCP_MAIN_TOPIC_VIEW',
				'MCP_MAIN_POST_DETAILS',
			),
			'MCP_QUEUE'		=> array(
				'MCP_QUEUE_UNAPPROVED_TOPICS',
				'MCP_QUEUE_UNAPPROVED_POSTS',
				'MCP_QUEUE_DELETED_TOPICS',
				'MCP_QUEUE_DELETED_POSTS',
				'MCP_QUEUE_APPROVE_DETAILS',
			),
			'MCP_REPORTS'	=> array(
				'MCP_REPORTS_OPEN',
				'MCP_REPORTS_CLOSED',
				'MCP_REPORT_DETAILS',
				'MCP_PM_REPORTS_OPEN',
				'MCP_PM_REPORTS_CLOSED',
				'MCP_PM_REPORT_DETAILS',
			),
			'MCP_NOTES'		=> array(
				'MCP_NOTES_FRONT',
				'MCP_NOTES_USER'
			),
			'MCP_WARN'		=> array(
				'MCP_WARN_FRONT',
				'MCP_WARN_LIST',
				'MCP_WARN_USER',
				'MCP_WARN_POST',
			),
			'MCP_LOGS'		=> array(
				'MCP_LOGS_FRONT',
				'MCP_LOGS_FORUM_VIEW',
				'MCP_LOGS_TOPIC_VIEW',
			),
			'MCP_BAN'		=> array(
				'MCP_BAN_USERNAMES',
				'MCP_BAN_IPS',
				'MCP_BAN_EMAILS',
			),
		),
	);

	/**
	* Define the basic structure
	* The format:
	*		array('{TABLE_NAME}' => {TABLE_DATA})
	*		{TABLE_DATA}:
	*			COLUMNS = array({column_name} = array({column_type}, {default}, {auto_increment}))
	*			PRIMARY_KEY = {column_name(s)}
	*			KEYS = array({key_name} = array({key_type}, {column_name(s)})),
	*
	*	Column Types:
	*	INT:x		=> SIGNED int(x)
	*	BINT		=> BIGINT
	*	UINT		=> mediumint(8) UNSIGNED
	*	UINT:x		=> int(x) UNSIGNED
	*	TINT:x		=> tinyint(x)
	*	USINT		=> smallint(4) UNSIGNED (for _order columns)
	*	BOOL		=> tinyint(1) UNSIGNED
	*	VCHAR		=> varchar(255)
	*	CHAR:x		=> char(x)
	*	XSTEXT_UNI	=> text for storing 100 characters (topic_title for example)
	*	STEXT_UNI	=> text for storing 255 characters (normal input field with a max of 255 single-byte chars) - same as VCHAR_UNI
	*	TEXT_UNI	=> text for storing 3000 characters (short text, descriptions, comments, etc.)
	*	MTEXT_UNI	=> mediumtext (post text, large text)
	*	VCHAR:x		=> varchar(x)
	*	TIMESTAMP	=> int(11) UNSIGNED
	*	DECIMAL		=> decimal number (5,2)
	*	DECIMAL:	=> decimal number (x,2)
	*	PDECIMAL	=> precision decimal number (6,3)
	*	PDECIMAL:	=> precision decimal number (x,3)
	*	VCHAR_UNI	=> varchar(255) BINARY
	*	VCHAR_CI	=> varchar_ci for postgresql, others VCHAR
	*/
	function get_schema_struct(&$schema_data)
	{
		$schema_data['phpbb_acl_groups'] = array(
			'COLUMNS'		=> array(
				'group_id'			=> array('UINT', 0),
				'forum_id'			=> array('UINT', 0),
				'auth_option_id'	=> array('UINT', 0),
				'auth_role_id'		=> array('UINT', 0),
				'auth_setting'		=> array('TINT:2', 0),
			),
			'KEYS'			=> array(
				'group_id'		=> array('INDEX', 'group_id'),
				'auth_opt_id'	=> array('INDEX', 'auth_option_id'),
				'auth_role_id'	=> array('INDEX', 'auth_role_id'),
			),
		);

		$schema_data['phpbb_acl_options'] = array(
			'COLUMNS'		=> array(
				'auth_option_id'	=> array('UINT', NULL, 'auto_increment'),
				'auth_option'		=> array('VCHAR:50', ''),
				'is_global'			=> array('BOOL', 0),
				'is_local'			=> array('BOOL', 0),
				'founder_only'		=> array('BOOL', 0),
			),
			'PRIMARY_KEY'	=> 'auth_option_id',
			'KEYS'			=> array(
				'auth_option'		=> array('INDEX', 'auth_option'),
			),
		);

		$schema_data['phpbb_acl_roles'] = array(
			'COLUMNS'		=> array(
				'role_id'			=> array('UINT', NULL, 'auto_increment'),
				'role_name'			=> array('VCHAR_UNI', ''),
				'role_description'	=> array('TEXT_UNI', ''),
				'role_type'			=> array('VCHAR:10', ''),
				'role_order'		=> array('USINT', 0),
			),
			'PRIMARY_KEY'	=> 'role_id',
			'KEYS'			=> array(
				'role_type'			=> array('INDEX', 'role_type'),
				'role_order'		=> array('INDEX', 'role_order'),
			),
		);

		$schema_data['phpbb_acl_roles_data'] = array(
			'COLUMNS'		=> array(
				'role_id'			=> array('UINT', 0),
				'auth_option_id'	=> array('UINT', 0),
				'auth_setting'		=> array('TINT:2', 0),
			),
			'PRIMARY_KEY'	=> array('role_id', 'auth_option_id'),
			'KEYS'			=> array(
				'ath_op_id'			=> array('INDEX', 'auth_option_id'),
			),
		);

		$schema_data['phpbb_acl_users'] = array(
			'COLUMNS'		=> array(
				'user_id'			=> array('UINT', 0),
				'forum_id'			=> array('UINT', 0),
				'auth_option_id'	=> array('UINT', 0),
				'auth_role_id'		=> array('UINT', 0),
				'auth_setting'		=> array('TINT:2', 0),
			),
			'KEYS'			=> array(
				'user_id'			=> array('INDEX', 'user_id'),
				'auth_option_id'	=> array('INDEX', 'auth_option_id'),
				'auth_role_id'		=> array('INDEX', 'auth_role_id'),
			),
		);

		$schema_data['phpbb_attachments'] = array(
			'COLUMNS' => array(
				'attach_id'			=> array('UINT', NULL, 'auto_increment'),
				'post_msg_id'		=> array('UINT', 0),
				'topic_id'			=> array('UINT', 0),
				'in_message'		=> array('BOOL', 0),
				'poster_id'			=> array('UINT', 0),
				'is_orphan'			=> array('BOOL', 1),
				'physical_filename'	=> array('VCHAR', ''),
				'real_filename'		=> array('VCHAR', ''),
				'download_count'	=> array('UINT', 0),
				'attach_comment'	=> array('TEXT_UNI', ''),
				'extension'			=> array('VCHAR:100', ''),
				'mimetype'			=> array('VCHAR:100', ''),
				'filesize'			=> array('UINT:20', 0),
				'filetime'			=> array('TIMESTAMP', 0),
				'thumbnail'			=> array('BOOL', 0),
			),
			'PRIMARY_KEY'		=> 'attach_id',
				'KEYS'		=> array(
					'filetime'		=> array('INDEX', 'filetime'),
					'post_msg_id'	=> array('INDEX', 'post_msg_id'),
					'topic_id'		=> array('INDEX', 'topic_id'),
					'poster_id'		=> array('INDEX', 'poster_id'),
					'is_orphan'		=> array('INDEX', 'is_orphan'),
				),
		);

		$schema_data['phpbb_banlist'] = array(
			'COLUMNS'		=> array(
				'ban_id'			=> array('UINT', NULL, 'auto_increment'),
				'ban_userid'		=> array('UINT', 0),
				'ban_ip'			=> array('VCHAR:40', ''),
				'ban_email'			=> array('VCHAR_UNI:100', ''),
				'ban_start'			=> array('TIMESTAMP', 0),
				'ban_end'			=> array('TIMESTAMP', 0),
				'ban_exclude'		=> array('BOOL', 0),
				'ban_reason'		=> array('VCHAR_UNI', ''),
				'ban_give_reason'	=> array('VCHAR_UNI', ''),
			),
			'PRIMARY_KEY'			=> 'ban_id',
			'KEYS'			=> array(
				'ban_end'			=> array('INDEX', 'ban_end'),
				'ban_user'			=> array('INDEX', array('ban_userid', 'ban_exclude')),
				'ban_email'			=> array('INDEX', array('ban_email', 'ban_exclude')),
				'ban_ip'			=> array('INDEX', array('ban_ip', 'ban_exclude')),
			),
		);

		$schema_data['phpbb_bbcodes'] = array(
			'COLUMNS'		=> array(
				'bbcode_id'				=> array('USINT', 0),
				'bbcode_tag'			=> array('VCHAR:16', ''),
				'bbcode_helpline'		=> array('VCHAR_UNI', ''),
				'display_on_posting'	=> array('BOOL', 0),
				'bbcode_match'			=> array('TEXT_UNI', ''),
				'bbcode_tpl'			=> array('MTEXT_UNI', ''),
				'first_pass_match'		=> array('MTEXT_UNI', ''),
				'first_pass_replace'	=> array('MTEXT_UNI', ''),
				'second_pass_match'		=> array('MTEXT_UNI', ''),
				'second_pass_replace'	=> array('MTEXT_UNI', ''),
			),
			'PRIMARY_KEY'	=> 'bbcode_id',
			'KEYS'			=> array(
				'display_on_post'		=> array('INDEX', 'display_on_posting'),
			),
		);

		$schema_data['phpbb_bookmarks'] = array(
			'COLUMNS'		=> array(
				'topic_id'			=> array('UINT', 0),
				'user_id'			=> array('UINT', 0),
			),
			'PRIMARY_KEY'			=> array('topic_id', 'user_id'),
		);

		$schema_data['phpbb_bots'] = array(
			'COLUMNS'		=> array(
				'bot_id'			=> array('UINT', NULL, 'auto_increment'),
				'bot_active'		=> array('BOOL', 1),
				'bot_name'			=> array('STEXT_UNI', ''),
				'user_id'			=> array('UINT', 0),
				'bot_agent'			=> array('VCHAR', ''),
				'bot_ip'			=> array('VCHAR', ''),
			),
			'PRIMARY_KEY'	=> 'bot_id',
			'KEYS'			=> array(
				'bot_active'		=> array('INDEX', 'bot_active'),
			),
		);

		$schema_data['phpbb_config'] = array(
			'COLUMNS'		=> array(
				'config_name'		=> array('VCHAR', ''),
				'config_value'		=> array('VCHAR_UNI', ''),
				'is_dynamic'		=> array('BOOL', 0),
			),
			'PRIMARY_KEY'	=> 'config_name',
			'KEYS'			=> array(
				'is_dynamic'		=> array('INDEX', 'is_dynamic'),
			),
		);

		$schema_data['phpbb_config_text'] = array(
			'COLUMNS'		=> array(
				'config_name'		=> array('VCHAR', ''),
				'config_value'		=> array('MTEXT', ''),
			),
			'PRIMARY_KEY'	=> 'config_name',
		);

		$schema_data['phpbb_confirm'] = array(
			'COLUMNS'		=> array(
				'confirm_id'		=> array('CHAR:32', ''),
				'session_id'		=> array('CHAR:32', ''),
				'confirm_type'		=> array('TINT:3', 0),
				'code'				=> array('VCHAR:8', ''),
				'seed'				=> array('UINT:10', 0),
				'attempts'			=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> array('session_id', 'confirm_id'),
			'KEYS'			=> array(
				'confirm_type'		=> array('INDEX', 'confirm_type'),
			),
		);

		$schema_data['phpbb_disallow'] = array(
			'COLUMNS'		=> array(
				'disallow_id'		=> array('UINT', NULL, 'auto_increment'),
				'disallow_username'	=> array('VCHAR_UNI:255', ''),
			),
			'PRIMARY_KEY'	=> 'disallow_id',
		);

		$schema_data['phpbb_drafts'] = array(
			'COLUMNS'		=> array(
				'draft_id'			=> array('UINT', NULL, 'auto_increment'),
				'user_id'			=> array('UINT', 0),
				'topic_id'			=> array('UINT', 0),
				'forum_id'			=> array('UINT', 0),
				'save_time'			=> array('TIMESTAMP', 0),
				'draft_subject'		=> array('STEXT_UNI', ''),
				'draft_message'		=> array('MTEXT_UNI', ''),
			),
			'PRIMARY_KEY'	=> 'draft_id',
			'KEYS'			=> array(
				'save_time'			=> array('INDEX', 'save_time'),
			),
		);

		$schema_data['phpbb_ext'] = array(
			'COLUMNS'		=> array(
				'ext_name'			=> array('VCHAR', ''),
				'ext_active'		=> array('BOOL', 0),
				'ext_state'			=> array('TEXT', ''),
			),
			'KEYS'		=> array(
				'ext_name'		=> array('UNIQUE', 'ext_name'),
			),
		);

		$schema_data['phpbb_extension_groups'] = array(
			'COLUMNS'		=> array(
				'group_id'			=> array('UINT', NULL, 'auto_increment'),
				'group_name'		=> array('VCHAR_UNI', ''),
				'cat_id'			=> array('TINT:2', 0),
				'allow_group'		=> array('BOOL', 0),
				'download_mode'		=> array('BOOL', 1),
				'upload_icon'		=> array('VCHAR', ''),
				'max_filesize'		=> array('UINT:20', 0),
				'allowed_forums'	=> array('TEXT', ''),
				'allow_in_pm'		=> array('BOOL', 0),
			),
			'PRIMARY_KEY'	=> 'group_id',
		);

		$schema_data['phpbb_extensions'] = array(
			'COLUMNS'		=> array(
				'extension_id'		=> array('UINT', NULL, 'auto_increment'),
				'group_id'		=> array('UINT', 0),
				'extension'		=> array('VCHAR:100', ''),
		),
			'PRIMARY_KEY'		=> 'extension_id'
		);

		$schema_data['phpbb_forums'] = array(
			'COLUMNS'		=> array(
				'forum_id'				=> array('UINT', NULL, 'auto_increment'),
				'parent_id'				=> array('UINT', 0),
				'left_id'				=> array('UINT', 0),
				'right_id'				=> array('UINT', 0),
				'forum_parents'			=> array('MTEXT', ''),
				'forum_name'			=> array('STEXT_UNI', ''),
				'forum_desc'			=> array('TEXT_UNI', ''),
				'forum_desc_bitfield'	=> array('VCHAR:255', ''),
				'forum_desc_options'	=> array('UINT:11', 7),
				'forum_desc_uid'		=> array('VCHAR:8', ''),
				'forum_link'			=> array('VCHAR_UNI', ''),
				'forum_password'		=> array('VCHAR:255', ''),
				'forum_style'			=> array('UINT', 0),
				'forum_image'			=> array('VCHAR', ''),
				'forum_rules'			=> array('TEXT_UNI', ''),
				'forum_rules_link'		=> array('VCHAR_UNI', ''),
				'forum_rules_bitfield'	=> array('VCHAR:255', ''),
				'forum_rules_options'	=> array('UINT:11', 7),
				'forum_rules_uid'		=> array('VCHAR:8', ''),
				'forum_topics_per_page'	=> array('USINT', 0),
				'forum_type'			=> array('TINT:4', 0),
				'forum_status'			=> array('TINT:4', 0),
				'forum_last_post_id'		=> array('UINT', 0),
				'forum_last_poster_id'		=> array('UINT', 0),
				'forum_last_post_subject'	=> array('STEXT_UNI', ''),
				'forum_last_post_time'		=> array('TIMESTAMP', 0),
				'forum_last_poster_name'	=> array('VCHAR_UNI', ''),
				'forum_last_poster_colour'	=> array('VCHAR:6', ''),
				'forum_flags'				=> array('TINT:4', 32),
				'display_on_index'			=> array('BOOL', 1),
				'enable_indexing'			=> array('BOOL', 1),
				'enable_icons'				=> array('BOOL', 1),
				'enable_prune'				=> array('BOOL', 0),
				'prune_next'				=> array('TIMESTAMP', 0),
				'prune_days'				=> array('UINT', 0),
				'prune_viewed'				=> array('UINT', 0),
				'prune_freq'				=> array('UINT', 0),
				'display_subforum_list'		=> array('BOOL', 1),
				'forum_options'				=> array('UINT:20', 0),
				'forum_posts_approved'		=> array('UINT', 0),
				'forum_posts_unapproved'	=> array('UINT', 0),
				'forum_posts_softdeleted'	=> array('UINT', 0),
				'forum_topics_approved'		=> array('UINT', 0),
				'forum_topics_unapproved'	=> array('UINT', 0),
				'forum_topics_softdeleted'	=> array('UINT', 0),
				'enable_shadow_prune'		=> array('BOOL', 0),
				'prune_shadow_days'			=> array('UINT', 7),
				'prune_shadow_freq'			=> array('UINT', 1),
				'prune_shadow_next'			=> array('INT:11', 0),
			),
			'PRIMARY_KEY'	=> 'forum_id',
			'KEYS'			=> array(
				'left_right_id'			=> array('INDEX', array('left_id', 'right_id')),
				'forum_lastpost_id'		=> array('INDEX', 'forum_last_post_id'),
			),
		);

		$schema_data['phpbb_forums_access'] = array(
			'COLUMNS'		=> array(
				'forum_id'				=> array('UINT', 0),
				'user_id'				=> array('UINT', 0),
				'session_id'			=> array('CHAR:32', ''),
			),
			'PRIMARY_KEY'	=> array('forum_id', 'user_id', 'session_id'),
		);

		$schema_data['phpbb_forums_track'] = array(
			'COLUMNS'		=> array(
				'user_id'				=> array('UINT', 0),
				'forum_id'				=> array('UINT', 0),
				'mark_time'				=> array('TIMESTAMP', 0),
			),
			'PRIMARY_KEY'	=> array('user_id', 'forum_id'),
		);

		$schema_data['phpbb_forums_watch'] = array(
			'COLUMNS'		=> array(
				'forum_id'				=> array('UINT', 0),
				'user_id'				=> array('UINT', 0),
				'notify_status'			=> array('BOOL', 0),
			),
			'KEYS'			=> array(
				'forum_id'				=> array('INDEX', 'forum_id'),
				'user_id'				=> array('INDEX', 'user_id'),
				'notify_stat'			=> array('INDEX', 'notify_status'),
			),
		);

		$schema_data['phpbb_groups'] = array(
			'COLUMNS'		=> array(
				'group_id'				=> array('UINT', NULL, 'auto_increment'),
				'group_type'			=> array('TINT:4', 1),
				'group_founder_manage'	=> array('BOOL', 0),
				'group_skip_auth'		=> array('BOOL', 0),
				'group_name'			=> array('VCHAR_CI', ''),
				'group_desc'			=> array('TEXT_UNI', ''),
				'group_desc_bitfield'	=> array('VCHAR:255', ''),
				'group_desc_options'	=> array('UINT:11', 7),
				'group_desc_uid'		=> array('VCHAR:8', ''),
				'group_display'			=> array('BOOL', 0),
				'group_avatar'			=> array('VCHAR', ''),
				'group_avatar_type'		=> array('VCHAR:255', ''),
				'group_avatar_width'	=> array('USINT', 0),
				'group_avatar_height'	=> array('USINT', 0),
				'group_rank'			=> array('UINT', 0),
				'group_colour'			=> array('VCHAR:6', ''),
				'group_sig_chars'		=> array('UINT', 0),
				'group_receive_pm'		=> array('BOOL', 0),
				'group_message_limit'	=> array('UINT', 0),
				'group_legend'			=> array('UINT', 0),
				'group_max_recipients'	=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'group_id',
			'KEYS'			=> array(
				'group_legend_name'		=> array('INDEX', array('group_legend', 'group_name')),
			),
		);

		$schema_data['phpbb_icons'] = array(
			'COLUMNS'		=> array(
				'icons_id'				=> array('UINT', NULL, 'auto_increment'),
				'icons_url'				=> array('VCHAR', ''),
				'icons_width'			=> array('TINT:4', 0),
				'icons_height'			=> array('TINT:4', 0),
				'icons_alt'				=> array('VCHAR', ''),
				'icons_order'			=> array('UINT', 0),
				'display_on_posting'	=> array('BOOL', 1),
			),
			'PRIMARY_KEY'	=> 'icons_id',
			'KEYS'			=> array(
				'display_on_posting'	=> array('INDEX', 'display_on_posting'),
			),
		);

		$schema_data['phpbb_lang'] = array(
			'COLUMNS'		=> array(
				'lang_id'				=> array('TINT:4', NULL, 'auto_increment'),
				'lang_iso'				=> array('VCHAR:30', ''),
				'lang_dir'				=> array('VCHAR:30', ''),
				'lang_english_name'		=> array('VCHAR_UNI:100', ''),
				'lang_local_name'		=> array('VCHAR_UNI:255', ''),
				'lang_author'			=> array('VCHAR_UNI:255', ''),
			),
			'PRIMARY_KEY'	=> 'lang_id',
			'KEYS'			=> array(
				'lang_iso'				=> array('INDEX', 'lang_iso'),
			),
		);

		$schema_data['phpbb_log'] = array(
			'COLUMNS'		=> array(
				'log_id'				=> array('UINT', NULL, 'auto_increment'),
				'log_type'				=> array('TINT:4', 0),
				'user_id'				=> array('UINT', 0),
				'forum_id'				=> array('UINT', 0),
				'topic_id'				=> array('UINT', 0),
				'post_id'				=> array('UINT', 0),
				'reportee_id'			=> array('UINT', 0),
				'log_ip'				=> array('VCHAR:40', ''),
				'log_time'				=> array('TIMESTAMP', 0),
				'log_operation'			=> array('TEXT_UNI', ''),
				'log_data'				=> array('MTEXT_UNI', ''),
			),
			'PRIMARY_KEY'	=> 'log_id',
			'KEYS'			=> array(
				'log_type'				=> array('INDEX', 'log_type'),
				'forum_id'				=> array('INDEX', 'forum_id'),
				'topic_id'				=> array('INDEX', 'topic_id'),
				'reportee_id'			=> array('INDEX', 'reportee_id'),
				'user_id'				=> array('INDEX', 'user_id'),
				'log_time'				=> array('INDEX', 'log_time'),
			),
		);

		$schema_data['phpbb_login_attempts'] = array(
			'COLUMNS'		=> array(
				'attempt_ip'			=> array('VCHAR:40', ''),
				'attempt_browser'		=> array('VCHAR:150', ''),
				'attempt_forwarded_for'	=> array('VCHAR:255', ''),
				'attempt_time'			=> array('TIMESTAMP', 0),
				'user_id'				=> array('UINT', 0),
				'username'				=> array('VCHAR_UNI:255', 0),
				'username_clean'		=> array('VCHAR_CI', 0),
			),
			'KEYS'			=> array(
				'att_ip'				=> array('INDEX', array('attempt_ip', 'attempt_time')),
				'att_for'				=> array('INDEX', array('attempt_forwarded_for', 'attempt_time')),
				'att_time'				=> array('INDEX', 'attempt_time'),
				'user_id'				=> array('INDEX', 'user_id'),
			),
		);

		$schema_data['phpbb_migrations'] = array(
			'COLUMNS'		=> array(
				'migration_name'		=> array('VCHAR', ''),
				'migration_depends_on'	=> array('TEXT', ''),
				'migration_schema_done'	=> array('BOOL', 0),
				'migration_data_done'	=> array('BOOL', 0),
				'migration_data_state'	=> array('TEXT', ''),
				'migration_start_time'	=> array('TIMESTAMP', 0),
				'migration_end_time'	=> array('TIMESTAMP', 0),
			),
			'PRIMARY_KEY'	=> 'migration_name',
		);

		$schema_data['phpbb_moderator_cache'] = array(
			'COLUMNS'		=> array(
				'forum_id'				=> array('UINT', 0),
				'user_id'				=> array('UINT', 0),
				'username'				=> array('VCHAR_UNI:255', ''),
				'group_id'				=> array('UINT', 0),
				'group_name'			=> array('VCHAR_UNI', ''),
				'display_on_index'		=> array('BOOL', 1),
			),
			'KEYS'			=> array(
				'disp_idx'				=> array('INDEX', 'display_on_index'),
				'forum_id'				=> array('INDEX', 'forum_id'),
			),
		);

		$schema_data['phpbb_modules'] = array(
			'COLUMNS'		=> array(
				'module_id'				=> array('UINT', NULL, 'auto_increment'),
				'module_enabled'		=> array('BOOL', 1),
				'module_display'		=> array('BOOL', 1),
				'module_basename'		=> array('VCHAR', ''),
				'module_class'			=> array('VCHAR:10', ''),
				'parent_id'				=> array('UINT', 0),
				'left_id'				=> array('UINT', 0),
				'right_id'				=> array('UINT', 0),
				'module_langname'		=> array('VCHAR', ''),
				'module_mode'			=> array('VCHAR', ''),
				'module_auth'			=> array('VCHAR', ''),
			),
			'PRIMARY_KEY'	=> 'module_id',
			'KEYS'			=> array(
				'left_right_id'			=> array('INDEX', array('left_id', 'right_id')),
				'module_enabled'		=> array('INDEX', 'module_enabled'),
				'class_left_id'			=> array('INDEX', array('module_class', 'left_id')),
			),
		);

		$schema_data['phpbb_notification_types'] = array(
			'COLUMNS'		=> array(
				'notification_type_id'		=> array('USINT', NULL, 'auto_increment'),
				'notification_type_name'	=> array('VCHAR:255', ''),
				'notification_type_enabled'	=> array('BOOL', 1),
			),
			'PRIMARY_KEY'	=> 'notification_type_id',
			'KEYS'			=> array(
				'type'				=> array('UNIQUE', 'notification_type_name'),
			),
		);

		$schema_data['phpbb_notifications'] = array(
			'COLUMNS'		=> array(
				'notification_id'		=> array('UINT:10', NULL, 'auto_increment'),
				'notification_type_id'	=> array('USINT', 0),
				'item_id'				=> array('UINT', 0),
				'item_parent_id'		=> array('UINT', 0),
				'user_id'				=> array('UINT', 0),
				'notification_read'		=> array('BOOL', 0),
				'notification_time'		=> array('TIMESTAMP', 1),
				'notification_data'		=> array('TEXT_UNI', ''),
			),
			'PRIMARY_KEY'	=> 'notification_id',
			'KEYS'			=> array(
				'item_ident'			=> array('INDEX', 'notification_type_id', 'item_id'),
				'user'					=> array('INDEX', 'user_id', 'notification_read'),
			),
		);

		$schema_data['phpbb_oauth_accounts'] = array(
			'COLUMNS'		=> array(
				'user_id'				=> array('UINT', 0),
				'provider'				=> array('USINT', 0),
				'oauth_provider_id'		=> array('TEXT_UNI', ''),
			),
			'PRIMARY_KEY'	=> array('user_id', 'provider'),
		);

		$schema_data['phpbb_oauth_tokens'] = array(
			'COLUMNS'		=> array(
				'user_id'				=> array('UINT', 0),
				'session_id'			=> array('CHAR:32', ''),
				'provider'				=> array('VCHAR', ''),
				'oauth_token'			=> array('MTEXT', ''),
			),
			'KEYS'			=> array(
				'user_id'				=> array('INDEX', 'user_id'),
				'provider'				=> array('INDEX', 'provider'),
			),
		);

		$schema_data['phpbb_oauth_states'] = array(
			'COLUMNS'		=> array(
				'user_id'				=> array('UINT', 0),
				'session_id'			=> array('CHAR:32', ''),
				'provider'				=> array('VCHAR', ''),
				'oauth_state'			=> array('VCHAR', ''),
			),
			'KEYS'			=> array(
				'user_id'				=> array('INDEX', 'user_id'),
				'provider'				=> array('INDEX', 'provider'),
			),
		);

		$schema_data['phpbb_poll_options'] = array(
			'COLUMNS'		=> array(
				'poll_option_id'		=> array('TINT:4', 0),
				'topic_id'				=> array('UINT', 0),
				'poll_option_text'		=> array('TEXT_UNI', ''),
				'poll_option_total'		=> array('UINT', 0),
			),
			'KEYS'			=> array(
				'poll_opt_id'			=> array('INDEX', 'poll_option_id'),
				'topic_id'				=> array('INDEX', 'topic_id'),
			),
		);

		$schema_data['phpbb_poll_votes'] = array(
			'COLUMNS'		=> array(
				'topic_id'				=> array('UINT', 0),
				'poll_option_id'		=> array('TINT:4', 0),
				'vote_user_id'			=> array('UINT', 0),
				'vote_user_ip'			=> array('VCHAR:40', ''),
			),
			'KEYS'			=> array(
				'topic_id'				=> array('INDEX', 'topic_id'),
				'vote_user_id'			=> array('INDEX', 'vote_user_id'),
				'vote_user_ip'			=> array('INDEX', 'vote_user_ip'),
			),
		);

		$schema_data['phpbb_posts'] = array(
			'COLUMNS'		=> array(
				'post_id'				=> array('UINT', NULL, 'auto_increment'),
				'topic_id'				=> array('UINT', 0),
				'forum_id'				=> array('UINT', 0),
				'poster_id'				=> array('UINT', 0),
				'icon_id'				=> array('UINT', 0),
				'poster_ip'				=> array('VCHAR:40', ''),
				'post_time'				=> array('TIMESTAMP', 0),
				'post_reported'			=> array('BOOL', 0),
				'enable_bbcode'			=> array('BOOL', 1),
				'enable_smilies'		=> array('BOOL', 1),
				'enable_magic_url'		=> array('BOOL', 1),
				'enable_sig'			=> array('BOOL', 1),
				'post_username'			=> array('VCHAR_UNI:255', ''),
				'post_subject'			=> array('STEXT_UNI', '', 'true_sort'),
				'post_text'				=> array('MTEXT_UNI', ''),
				'post_checksum'			=> array('VCHAR:32', ''),
				'post_attachment'		=> array('BOOL', 0),
				'bbcode_bitfield'		=> array('VCHAR:255', ''),
				'bbcode_uid'			=> array('VCHAR:8', ''),
				'post_postcount'		=> array('BOOL', 1),
				'post_edit_time'		=> array('TIMESTAMP', 0),
				'post_edit_reason'		=> array('STEXT_UNI', ''),
				'post_edit_user'		=> array('UINT', 0),
				'post_edit_count'		=> array('USINT', 0),
				'post_edit_locked'		=> array('BOOL', 0),
				'post_visibility'		=> array('TINT:3', 0),
				'post_delete_time'		=> array('TIMESTAMP', 0),
				'post_delete_reason'	=> array('STEXT_UNI', ''),
				'post_delete_user'		=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'post_id',
			'KEYS'			=> array(
				'forum_id'				=> array('INDEX', 'forum_id'),
				'topic_id'				=> array('INDEX', 'topic_id'),
				'poster_ip'				=> array('INDEX', 'poster_ip'),
				'poster_id'				=> array('INDEX', 'poster_id'),
				'tid_post_time'			=> array('INDEX', array('topic_id', 'post_time')),
				'post_username'			=> array('INDEX', 'post_username:255'),
				'post_visibility'		=> array('INDEX', 'post_visibility'),
			),
		);

		$schema_data['phpbb_privmsgs'] = array(
			'COLUMNS'		=> array(
				'msg_id'				=> array('UINT', NULL, 'auto_increment'),
				'root_level'			=> array('UINT', 0),
				'author_id'				=> array('UINT', 0),
				'icon_id'				=> array('UINT', 0),
				'author_ip'				=> array('VCHAR:40', ''),
				'message_time'			=> array('TIMESTAMP', 0),
				'enable_bbcode'			=> array('BOOL', 1),
				'enable_smilies'		=> array('BOOL', 1),
				'enable_magic_url'		=> array('BOOL', 1),
				'enable_sig'			=> array('BOOL', 1),
				'message_subject'		=> array('STEXT_UNI', ''),
				'message_text'			=> array('MTEXT_UNI', ''),
				'message_edit_reason'	=> array('STEXT_UNI', ''),
				'message_edit_user'		=> array('UINT', 0),
				'message_attachment'	=> array('BOOL', 0),
				'bbcode_bitfield'		=> array('VCHAR:255', ''),
				'bbcode_uid'			=> array('VCHAR:8', ''),
				'message_edit_time'		=> array('TIMESTAMP', 0),
				'message_edit_count'	=> array('USINT', 0),
				'to_address'			=> array('TEXT_UNI', ''),
				'bcc_address'			=> array('TEXT_UNI', ''),
				'message_reported'		=> array('BOOL', 0),
			),
			'PRIMARY_KEY'	=> 'msg_id',
			'KEYS'			=> array(
				'author_ip'				=> array('INDEX', 'author_ip'),
				'message_time'			=> array('INDEX', 'message_time'),
				'author_id'				=> array('INDEX', 'author_id'),
				'root_level'			=> array('INDEX', 'root_level'),
			),
		);

		$schema_data['phpbb_privmsgs_folder'] = array(
			'COLUMNS'		=> array(
				'folder_id'				=> array('UINT', NULL, 'auto_increment'),
				'user_id'				=> array('UINT', 0),
				'folder_name'			=> array('VCHAR_UNI', ''),
				'pm_count'				=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'folder_id',
			'KEYS'			=> array(
				'user_id'				=> array('INDEX', 'user_id'),
			),
		);

		$schema_data['phpbb_privmsgs_rules'] = array(
			'COLUMNS'		=> array(
				'rule_id'				=> array('UINT', NULL, 'auto_increment'),
				'user_id'				=> array('UINT', 0),
				'rule_check'			=> array('UINT', 0),
				'rule_connection'		=> array('UINT', 0),
				'rule_string'			=> array('VCHAR_UNI', ''),
				'rule_user_id'			=> array('UINT', 0),
				'rule_group_id'			=> array('UINT', 0),
				'rule_action'			=> array('UINT', 0),
				'rule_folder_id'		=> array('INT:11', 0),
			),
			'PRIMARY_KEY'	=> 'rule_id',
			'KEYS'			=> array(
				'user_id'				=> array('INDEX', 'user_id'),
			),
		);

		$schema_data['phpbb_privmsgs_to'] = array(
			'COLUMNS'		=> array(
				'msg_id'				=> array('UINT', 0),
				'user_id'				=> array('UINT', 0),
				'author_id'				=> array('UINT', 0),
				'pm_deleted'			=> array('BOOL', 0),
				'pm_new'				=> array('BOOL', 1),
				'pm_unread'				=> array('BOOL', 1),
				'pm_replied'			=> array('BOOL', 0),
				'pm_marked'				=> array('BOOL', 0),
				'pm_forwarded'			=> array('BOOL', 0),
				'folder_id'				=> array('INT:11', 0),
			),
			'KEYS'			=> array(
				'msg_id'				=> array('INDEX', 'msg_id'),
				'author_id'				=> array('INDEX', 'author_id'),
				'usr_flder_id'			=> array('INDEX', array('user_id', 'folder_id')),
			),
		);

		$schema_data['phpbb_profile_fields'] = array(
			'COLUMNS'		=> array(
				'field_id'				=> array('UINT', NULL, 'auto_increment'),
				'field_name'			=> array('VCHAR_UNI', ''),
				'field_type'			=> array('VCHAR:100', ''),
				'field_ident'			=> array('VCHAR:20', ''),
				'field_length'			=> array('VCHAR:20', ''),
				'field_minlen'			=> array('VCHAR', ''),
				'field_maxlen'			=> array('VCHAR', ''),
				'field_novalue'			=> array('VCHAR_UNI', ''),
				'field_default_value'	=> array('VCHAR_UNI', ''),
				'field_validation'		=> array('VCHAR_UNI:64', ''),
				'field_required'		=> array('BOOL', 0),
				'field_show_on_reg'		=> array('BOOL', 0),
				'field_hide'			=> array('BOOL', 0),
				'field_no_view'			=> array('BOOL', 0),
				'field_active'			=> array('BOOL', 0),
				'field_order'			=> array('UINT', 0),
				'field_show_profile'	=> array('BOOL', 0),
				'field_show_on_vt'		=> array('BOOL', 0),
				'field_show_novalue'	=> array('BOOL', 0),
				'field_show_on_pm'		=> array('BOOL', 0),
				'field_show_on_ml'		=> array('BOOL', 0),
				'field_is_contact'		=> array('BOOL', 0),
				'field_contact_desc'	=> array('VCHAR', ''),
				'field_contact_url'		=> array('VCHAR', ''),
			),
			'PRIMARY_KEY'	=> 'field_id',
			'KEYS'			=> array(
				'fld_type'			=> array('INDEX', 'field_type'),
				'fld_ordr'			=> array('INDEX', 'field_order'),
			),
		);

		$schema_data['phpbb_profile_fields_data'] = array(
			'COLUMNS'		=> array(
				'user_id'				=> array('UINT', 0),
				'pf_phpbb_interests'	=> array('MTEXT', ''),
				'pf_phpbb_occupation'	=> array('MTEXT', ''),
				'pf_phpbb_facebook'		=> array('VCHAR', ''),
				'pf_phpbb_twitter'		=> array('VCHAR', ''),
				'pf_phpbb_location'		=> array('VCHAR', ''),
				'pf_phpbb_youtube'		=> array('VCHAR', ''),
				'pf_phpbb_googleplus'	=> array('VCHAR', ''),
				'pf_phpbb_icq'			=> array('VCHAR', ''),
				'pf_phpbb_skype'		=> array('VCHAR', ''),
				'pf_phpbb_website'		=> array('VCHAR', ''),
				'pf_phpbb_wlm'			=> array('VCHAR', ''),
				'pf_phpbb_yahoo'		=> array('VCHAR', ''),
				'pf_phpbb_aol'			=> array('VCHAR', ''),
			),
			'PRIMARY_KEY'	=> 'user_id',
		);

		$schema_data['phpbb_profile_fields_lang'] = array(
			'COLUMNS'		=> array(
				'field_id'				=> array('UINT', 0),
				'lang_id'				=> array('UINT', 0),
				'option_id'				=> array('UINT', 0),
				'field_type'			=> array('VCHAR:100', ''),
				'lang_value'			=> array('VCHAR_UNI', ''),
			),
			'PRIMARY_KEY'	=> array('field_id', 'lang_id', 'option_id'),
		);

		$schema_data['phpbb_profile_lang'] = array(
			'COLUMNS'		=> array(
				'field_id'				=> array('UINT', 0),
				'lang_id'				=> array('UINT', 0),
				'lang_name'				=> array('VCHAR_UNI', ''),
				'lang_explain'			=> array('TEXT_UNI', ''),
				'lang_default_value'	=> array('VCHAR_UNI', ''),
			),
			'PRIMARY_KEY'	=> array('field_id', 'lang_id'),
		);

		$schema_data['phpbb_ranks'] = array(
			'COLUMNS'		=> array(
				'rank_id'				=> array('UINT', NULL, 'auto_increment'),
				'rank_title'			=> array('VCHAR_UNI', ''),
				'rank_min'				=> array('UINT', 0),
				'rank_special'			=> array('BOOL', 0),
				'rank_image'			=> array('VCHAR', ''),
			),
			'PRIMARY_KEY'	=> 'rank_id',
		);

		$schema_data['phpbb_reports'] = array(
			'COLUMNS'		=> array(
				'report_id'				=> array('UINT', NULL, 'auto_increment'),
				'reason_id'				=> array('USINT', 0),
				'post_id'				=> array('UINT', 0),
				'user_id'				=> array('UINT', 0),
				'user_notify'			=> array('BOOL', 0),
				'report_closed'			=> array('BOOL', 0),
				'report_time'			=> array('TIMESTAMP', 0),
				'report_text'			=> array('MTEXT_UNI', ''),
				'pm_id'					=> array('UINT', 0),
				'reported_post_enable_bbcode'=> array('BOOL', 1),
				'reported_post_enable_smilies'=> array('BOOL', 1),
				'reported_post_enable_magic_url'=> array('BOOL', 1),
				'reported_post_text'	=> array('MTEXT_UNI', ''),
				'reported_post_uid'		=> array('VCHAR:8', ''),
				'reported_post_bitfield'=> array('VCHAR:255', ''),
			),
			'PRIMARY_KEY'	=> 'report_id',
			'KEYS'			=> array(
				'post_id'			=> array('INDEX', 'post_id'),
				'pm_id'				=> array('INDEX', 'pm_id'),
			),
		);

		$schema_data['phpbb_reports_reasons'] = array(
			'COLUMNS'		=> array(
				'reason_id'				=> array('USINT', NULL, 'auto_increment'),
				'reason_title'			=> array('VCHAR_UNI', ''),
				'reason_description'	=> array('MTEXT_UNI', ''),
				'reason_order'			=> array('USINT', 0),
			),
			'PRIMARY_KEY'	=> 'reason_id',
		);

		$schema_data['phpbb_search_results'] = array(
			'COLUMNS'		=> array(
				'search_key'			=> array('VCHAR:32', ''),
				'search_time'			=> array('TIMESTAMP', 0),
				'search_keywords'		=> array('MTEXT_UNI', ''),
				'search_authors'		=> array('MTEXT', ''),
			),
			'PRIMARY_KEY'	=> 'search_key',
		);

		$schema_data['phpbb_search_wordlist'] = array(
			'COLUMNS'		=> array(
				'word_id'			=> array('UINT', NULL, 'auto_increment'),
				'word_text'			=> array('VCHAR_UNI', ''),
				'word_common'		=> array('BOOL', 0),
				'word_count'		=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'word_id',
			'KEYS'			=> array(
				'wrd_txt'			=> array('UNIQUE', 'word_text'),
				'wrd_cnt'			=> array('INDEX', 'word_count'),
			),
		);

		$schema_data['phpbb_search_wordmatch'] = array(
			'COLUMNS'		=> array(
				'post_id'			=> array('UINT', 0),
				'word_id'			=> array('UINT', 0),
				'title_match'		=> array('BOOL', 0),
			),
			'KEYS'			=> array(
				'un_mtch'			=> array('UNIQUE', array('word_id', 'post_id', 'title_match')),
				'word_id'			=> array('INDEX', 'word_id'),
				'post_id'			=> array('INDEX', 'post_id'),
			),
		);

		$schema_data['phpbb_sessions'] = array(
			'COLUMNS'		=> array(
				'session_id'			=> array('CHAR:32', ''),
				'session_user_id'		=> array('UINT', 0),
				'session_last_visit'	=> array('TIMESTAMP', 0),
				'session_start'			=> array('TIMESTAMP', 0),
				'session_time'			=> array('TIMESTAMP', 0),
				'session_ip'			=> array('VCHAR:40', ''),
				'session_browser'		=> array('VCHAR:150', ''),
				'session_forwarded_for'	=> array('VCHAR:255', ''),
				'session_page'			=> array('VCHAR_UNI', ''),
				'session_viewonline'	=> array('BOOL', 1),
				'session_autologin'		=> array('BOOL', 0),
				'session_admin'			=> array('BOOL', 0),
				'session_forum_id'		=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'session_id',
			'KEYS'			=> array(
				'session_time'		=> array('INDEX', 'session_time'),
				'session_user_id'	=> array('INDEX', 'session_user_id'),
				'session_fid'		=> array('INDEX', 'session_forum_id'),
			),
		);

		$schema_data['phpbb_sessions_keys'] = array(
			'COLUMNS'		=> array(
				'key_id'			=> array('CHAR:32', ''),
				'user_id'			=> array('UINT', 0),
				'last_ip'			=> array('VCHAR:40', ''),
				'last_login'		=> array('TIMESTAMP', 0),
			),
			'PRIMARY_KEY'	=> array('key_id', 'user_id'),
			'KEYS'			=> array(
				'last_login'		=> array('INDEX', 'last_login'),
			),
		);

		$schema_data['phpbb_sitelist'] = array(
			'COLUMNS'		=> array(
				'site_id'		=> array('UINT', NULL, 'auto_increment'),
				'site_ip'		=> array('VCHAR:40', ''),
				'site_hostname'	=> array('VCHAR', ''),
				'ip_exclude'	=> array('BOOL', 0),
			),
			'PRIMARY_KEY'		=> 'site_id',
		);

		$schema_data['phpbb_smilies'] = array(
			'COLUMNS'		=> array(
				'smiley_id'			=> array('UINT', NULL, 'auto_increment'),
				'code'				=> array('VCHAR_UNI:50', ''),
				'emotion'			=> array('VCHAR_UNI:50', ''),
				'smiley_url'		=> array('VCHAR:50', ''),
				'smiley_width'		=> array('USINT', 0),
				'smiley_height'		=> array('USINT', 0),
				'smiley_order'		=> array('UINT', 0),
				'display_on_posting'=> array('BOOL', 1),
			),
			'PRIMARY_KEY'	=> 'smiley_id',
			'KEYS'			=> array(
				'display_on_post'		=> array('INDEX', 'display_on_posting'),
			),
		);

		$schema_data['phpbb_styles'] = array(
			'COLUMNS'		=> array(
				'style_id'				=> array('UINT', NULL, 'auto_increment'),
				'style_name'			=> array('VCHAR_UNI:255', ''),
				'style_copyright'		=> array('VCHAR_UNI', ''),
				'style_active'			=> array('BOOL', 1),
				'style_path'			=> array('VCHAR:100', ''),
				'bbcode_bitfield'		=> array('VCHAR:255', 'kNg='),
				'style_parent_id'		=> array('UINT:4', 0),
				'style_parent_tree'		=> array('TEXT', ''),
			),
			'PRIMARY_KEY'	=> 'style_id',
			'KEYS'			=> array(
				'style_name'		=> array('UNIQUE', 'style_name'),
			),
		);

		$schema_data['phpbb_teampage'] = array(
			'COLUMNS'		=> array(
				'teampage_id'			=> array('USINT', NULL, 'auto_increment'),
				'group_id'				=> array('UINT', 0),
				'teampage_name'			=> array('VCHAR_UNI', ''),
				'teampage_position'		=> array('UINT', 0),
				'teampage_parent'		=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'teampage_id',
		);

		$schema_data['phpbb_topics'] = array(
			'COLUMNS'		=> array(
				'topic_id'					=> array('UINT', NULL, 'auto_increment'),
				'forum_id'					=> array('UINT', 0),
				'icon_id'					=> array('UINT', 0),
				'topic_attachment'			=> array('BOOL', 0),
				'topic_reported'			=> array('BOOL', 0),
				'topic_title'				=> array('STEXT_UNI', '', 'true_sort'),
				'topic_poster'				=> array('UINT', 0),
				'topic_time'				=> array('TIMESTAMP', 0),
				'topic_time_limit'			=> array('TIMESTAMP', 0),
				'topic_views'				=> array('UINT', 0),
				'topic_status'				=> array('TINT:3', 0),
				'topic_type'				=> array('TINT:3', 0),
				'topic_first_post_id'		=> array('UINT', 0),
				'topic_first_poster_name'	=> array('VCHAR_UNI:255', '', 'true_sort'),
				'topic_first_poster_colour'	=> array('VCHAR:6', ''),
				'topic_last_post_id'		=> array('UINT', 0),
				'topic_last_poster_id'		=> array('UINT', 0),
				'topic_last_poster_name'	=> array('VCHAR_UNI', ''),
				'topic_last_poster_colour'	=> array('VCHAR:6', ''),
				'topic_last_post_subject'	=> array('STEXT_UNI', ''),
				'topic_last_post_time'		=> array('TIMESTAMP', 0),
				'topic_last_view_time'		=> array('TIMESTAMP', 0),
				'topic_moved_id'			=> array('UINT', 0),
				'topic_bumped'				=> array('BOOL', 0),
				'topic_bumper'				=> array('UINT', 0),
				'poll_title'				=> array('STEXT_UNI', ''),
				'poll_start'				=> array('TIMESTAMP', 0),
				'poll_length'				=> array('TIMESTAMP', 0),
				'poll_max_options'			=> array('TINT:4', 1),
				'poll_last_vote'			=> array('TIMESTAMP', 0),
				'poll_vote_change'			=> array('BOOL', 0),
				'topic_visibility'			=> array('TINT:3', 0),
				'topic_delete_time'			=> array('TIMESTAMP', 0),
				'topic_delete_reason'		=> array('STEXT_UNI', ''),
				'topic_delete_user'			=> array('UINT', 0),
				'topic_posts_approved'		=> array('UINT', 0),
				'topic_posts_unapproved'	=> array('UINT', 0),
				'topic_posts_softdeleted'	=> array('UINT', 0),
			),
			'PRIMARY_KEY'	=> 'topic_id',
			'KEYS'			=> array(
				'forum_id'			=> array('INDEX', 'forum_id'),
				'forum_id_type'		=> array('INDEX', array('forum_id', 'topic_type')),
				'last_post_time'	=> array('INDEX', 'topic_last_post_time'),
				'fid_time_moved'	=> array('INDEX', array('forum_id', 'topic_last_post_time', 'topic_moved_id')),
				'topic_visibility'	=> array('INDEX', 'topic_visibility'),
				'forum_vis_last'	=> array('INDEX', array('forum_id', 'topic_visibility', 'topic_last_post_id')),
			),
		);

		$schema_data['phpbb_topics_posted'] = array(
			'COLUMNS'		=> array(
				'user_id'		=> array('UINT', 0),
				'topic_id'		=> array('UINT', 0),
				'topic_posted'	=> array('BOOL', 0),
			),
			'PRIMARY_KEY'		=> array('user_id', 'topic_id'),
		);

		$schema_data['phpbb_topics_track'] = array(
			'COLUMNS'		=> array(
				'user_id'		=> array('UINT', 0),
				'topic_id'		=> array('UINT', 0),
				'forum_id'		=> array('UINT', 0),
				'mark_time'		=> array('TIMESTAMP', 0),
			),
			'PRIMARY_KEY'		=> array('user_id', 'topic_id'),
			'KEYS'		=> array(
				'forum_id'		=> array('INDEX', 'forum_id'),
				'topic_id'		=> array('INDEX', 'topic_id'),
			),
		);

		$schema_data['phpbb_topics_watch'] = array(
			'COLUMNS'		=> array(
				'topic_id'			=> array('UINT', 0),
				'user_id'			=> array('UINT', 0),
				'notify_status'		=> array('BOOL', 0),
			),
			'KEYS'			=> array(
				'topic_id'			=> array('INDEX', 'topic_id'),
				'user_id'			=> array('INDEX', 'user_id'),
				'notify_stat'		=> array('INDEX', 'notify_status'),
			),
		);

		$schema_data['phpbb_user_group'] = array(
			'COLUMNS'		=> array(
				'group_id'			=> array('UINT', 0),
				'user_id'			=> array('UINT', 0),
				'group_leader'		=> array('BOOL', 0),
				'user_pending'		=> array('BOOL', 1),
			),
			'KEYS'			=> array(
				'group_id'			=> array('INDEX', 'group_id'),
				'user_id'			=> array('INDEX', 'user_id'),
				'group_leader'		=> array('INDEX', 'group_leader'),
			),
		);

		$schema_data['phpbb_user_notifications'] = array(
			'COLUMNS'		=> array(
				'item_type'			=> array('VCHAR:255', ''),
				'item_id'			=> array('UINT', 0),
				'user_id'			=> array('UINT', 0),
				'method'			=> array('VCHAR:255', ''),
				'notify'			=> array('BOOL', 1),
			),
		);

		$schema_data['phpbb_users'] = array(
			'COLUMNS'		=> array(
				'user_id'					=> array('UINT', NULL, 'auto_increment'),
				'user_type'					=> array('TINT:2', 0),
				'group_id'					=> array('UINT', 3),
				'user_permissions'			=> array('MTEXT', ''),
				'user_perm_from'			=> array('UINT', 0),
				'user_ip'					=> array('VCHAR:40', ''),
				'user_regdate'				=> array('TIMESTAMP', 0),
				'username'					=> array('VCHAR_CI', ''),
				'username_clean'			=> array('VCHAR_CI', ''),
				'user_password'				=> array('VCHAR:255', ''),
				'user_passchg'				=> array('TIMESTAMP', 0),
				'user_email'				=> array('VCHAR_UNI:100', ''),
				'user_email_hash'			=> array('BINT', 0),
				'user_birthday'				=> array('VCHAR:10', ''),
				'user_lastvisit'			=> array('TIMESTAMP', 0),
				'user_lastmark'				=> array('TIMESTAMP', 0),
				'user_lastpost_time'		=> array('TIMESTAMP', 0),
				'user_lastpage'				=> array('VCHAR_UNI:200', ''),
				'user_last_confirm_key'		=> array('VCHAR:10', ''),
				'user_last_search'			=> array('TIMESTAMP', 0),
				'user_warnings'				=> array('TINT:4', 0),
				'user_last_warning'			=> array('TIMESTAMP', 0),
				'user_login_attempts'		=> array('TINT:4', 0),
				'user_inactive_reason'		=> array('TINT:2', 0),
				'user_inactive_time'		=> array('TIMESTAMP', 0),
				'user_posts'				=> array('UINT', 0),
				'user_lang'					=> array('VCHAR:30', ''),
				'user_timezone'				=> array('VCHAR:100', ''),
				'user_dateformat'			=> array('VCHAR_UNI:30', 'd M Y H:i'),
				'user_style'				=> array('UINT', 0),
				'user_rank'					=> array('UINT', 0),
				'user_colour'				=> array('VCHAR:6', ''),
				'user_new_privmsg'			=> array('INT:4', 0),
				'user_unread_privmsg'		=> array('INT:4', 0),
				'user_last_privmsg'			=> array('TIMESTAMP', 0),
				'user_message_rules'		=> array('BOOL', 0),
				'user_full_folder'			=> array('INT:11', -3),
				'user_emailtime'			=> array('TIMESTAMP', 0),
				'user_topic_show_days'		=> array('USINT', 0),
				'user_topic_sortby_type'	=> array('VCHAR:1', 't'),
				'user_topic_sortby_dir'		=> array('VCHAR:1', 'd'),
				'user_post_show_days'		=> array('USINT', 0),
				'user_post_sortby_type'		=> array('VCHAR:1', 't'),
				'user_post_sortby_dir'		=> array('VCHAR:1', 'a'),
				'user_notify'				=> array('BOOL', 0),
				'user_notify_pm'			=> array('BOOL', 1),
				'user_notify_type'			=> array('TINT:4', 0),
				'user_allow_pm'				=> array('BOOL', 1),
				'user_allow_viewonline'		=> array('BOOL', 1),
				'user_allow_viewemail'		=> array('BOOL', 1),
				'user_allow_massemail'		=> array('BOOL', 1),
				'user_options'				=> array('UINT:11', 230271),
				'user_avatar'				=> array('VCHAR', ''),
				'user_avatar_type'			=> array('VCHAR:255', ''),
				'user_avatar_width'			=> array('USINT', 0),
				'user_avatar_height'		=> array('USINT', 0),
				'user_sig'					=> array('MTEXT_UNI', ''),
				'user_sig_bbcode_uid'		=> array('VCHAR:8', ''),
				'user_sig_bbcode_bitfield'	=> array('VCHAR:255', ''),
				'user_jabber'				=> array('VCHAR_UNI', ''),
				'user_actkey'				=> array('VCHAR:32', ''),
				'user_newpasswd'			=> array('VCHAR:255', ''),
				'user_form_salt'			=> array('VCHAR_UNI:32', ''),
				'user_new'					=> array('BOOL', 1),
				'user_reminded'				=> array('TINT:4', 0),
				'user_reminded_time'		=> array('TIMESTAMP', 0),
			),
			'PRIMARY_KEY'	=> 'user_id',
			'KEYS'			=> array(
				'user_birthday'				=> array('INDEX', 'user_birthday'),
				'user_email_hash'			=> array('INDEX', 'user_email_hash'),
				'user_type'					=> array('INDEX', 'user_type'),
				'username_clean'			=> array('UNIQUE', 'username_clean'),
			),
		);

		$schema_data['phpbb_warnings'] = array(
			'COLUMNS'		=> array(
				'warning_id'			=> array('UINT', NULL, 'auto_increment'),
				'user_id'				=> array('UINT', 0),
				'post_id'				=> array('UINT', 0),
				'log_id'				=> array('UINT', 0),
				'warning_time'			=> array('TIMESTAMP', 0),
			),
			'PRIMARY_KEY'	=> 'warning_id',
		);

		$schema_data['phpbb_words'] = array(
			'COLUMNS'		=> array(
				'word_id'				=> array('UINT', NULL, 'auto_increment'),
				'word'					=> array('VCHAR_UNI', ''),
				'replacement'			=> array('VCHAR_UNI', ''),
			),
			'PRIMARY_KEY'	=> 'word_id',
		);

		$schema_data['phpbb_zebra'] = array(
			'COLUMNS'		=> array(
				'user_id'				=> array('UINT', 0),
				'zebra_id'				=> array('UINT', 0),
				'friend'				=> array('BOOL', 0),
				'foe'					=> array('BOOL', 0),
			),
			'PRIMARY_KEY'	=> array('user_id', 'zebra_id'),
		);
	}
}
