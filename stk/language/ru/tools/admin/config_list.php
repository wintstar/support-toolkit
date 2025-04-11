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

$lang = array_merge($lang, array(
	'NO_CONFIG_TITLE'					=> 'Нет параметров',
	'NO_CONFIG_TEXT'					=> 'Нет параметров для отображения',

	'CONFIG_PURPOSE'					=> 'Назначение',
	'CONFIG_NAME'						=> 'Параметр',
	'CONFIG_VALUE'						=> 'Значение',
	'IS_DYNAMIC'						=> 'Динамическое',
	'CONFIG_CHANGED_SUCCESS'			=> 'Значения конфигурации были успешно изменены',
	'CLICK_HERE_TO_CHANGE'				=> 'Нажмите здесь, чтобы изменить значения конфигурации (изменения вступят в силу <b>немедленно!</b>)',
	'TOTAL_ITEMS'						=> 'Всего',
	'CRON_TASKS'						=> 'Планировщик cron',
	'ATTACHMENTS'						=> 'Настройки вложений',
	'AVATARS'							=> 'Настройки аватар',
	'BOARD_CONFIG'						=> 'Настройки конференции',
	'BOARD_FUNCTIONS'					=> 'Функции конференции',
	'PM'								=> 'Личные сообщения',
	'MESSAGES'							=> 'Размещение сообщений',
	'SIGNATURES'						=> 'Подписи',
	'FEED'								=> 'Каналы новостей',
	'USER_REGISTER'						=> 'Регистрация пользователей',
	'ANTI_SPAM'							=> 'Средства против спам-ботов',
	'AUTH'								=> 'Аутентификация',
	'EMAIL'								=> 'Настройки почты',
	'CONFIG_JABBER'						=> 'Настройки Jabber',
	'COOKIES'							=> 'Настройки cookies',
	'SERVER'							=> 'Настройки сервера',
	'SECURITY'							=> 'Безопасность',
	'LOAD'								=> 'Нагрузка на сервер',
	'SEARCH'							=> 'Настройки поиска',
	'MISC'								=> 'Прочее',

	'active_sessions'					=> 'Ограничить сессии',
	'allow_attachments'					=> 'Разрешить вложения',
	'allow_autologin'					=> 'Разрешить автовход',
	'allow_avatar'						=> 'Разрешить аватары',
	'allow_avatar_gravatar'				=> 'Разрешить глобально распознаваемые аватары',
	'allow_avatar_local'				=> 'Разрешить галерею аватар',
	'allow_avatar_remote'				=> 'Разрешить удаленные аватары',
	'allow_avatar_remote_upload'		=> 'Разрешить удалённую загрузку аватар:',
	'allow_avatar_upload'				=> 'Разрешить прямую загрузку аватар: ',
	'allow_bbcode'						=> 'Разрешить BBCode',
	'allow_birthdays'					=> 'Разрешить дни рождения',
	'allow_bookmarks'					=> 'Разрешить закладки на темы',
	'allow_cdn'							=> 'Разрешить использование CDN',
	'allow_emailreuse'					=> 'Разрешить повторное использование email-адреса',
	'allow_forum_notify'				=> 'Разрешить подписку на форумы',
	'allow_live_searches'				=> 'Разрешить поиск «на лету»',
	'allow_mass_pm'						=> 'Разрешить отправку ЛС нескольким пользователям или группам пользователей',
	'allow_name_chars'					=> 'Ограничения на символы в имени пользователя',
	'allow_namechange'					=> 'Разрешить смену имени пользователя',
	'allow_nocensors'					=> 'Разрешить отключение автоцензора',
	'allow_password_reset'				=> 'Разрешить восстановление пароля («Забытый пароль»)',
	'allow_pm_attach'					=> 'Разрешить вложения в личных сообщениях',
	'allow_pm_report'					=> 'Разрешить жалобы на личные сообщения',
	'allow_post_flash'					=> 'Разрешить тег BBCode <code>[FLASH]</code> в сообщениях',
	'allow_post_links'					=> 'Разрешить ссылки в обычных/личных сообщениях',
	'allow_privmsg'						=> 'Разрешить личные сообшения',
	'allow_quick_reply'					=> 'Разрешить быстрый ответ',
	'allow_sig'							=> 'Разрешить подписи',
	'allow_sig_bbcode'					=> 'Разрешить BBCode в подписях пользователей',
	'allow_sig_flash'					=> 'Разрешить использование тега BBCode [FLASH] в подписях пользователей:',
	'allow_sig_img'						=> 'Разрешить использование тега BBCode <code>[IMG]</code> в подписях пользователей',
	'allow_sig_links'					=> 'Разрешить ссылки в подписях пользователей',
	'allow_sig_pm'						=> 'Разрешить подписи в ЛС',
	'allow_sig_smilies'					=> 'Разрешить смайлики в подписях пользователей',
	'allow_smilies'						=> 'Разрешить смайлики',
	'allow_topic_notify'				=> 'Разрешить подписку на темы',
	'assets_version'					=> 'Счетчик загрузки новых css и java-скриптов при включении/отключении/удалении данных расширений',
	'attachment_quota'					=> 'Общая квота вложений:',
	'auth_bbcode_pm'					=> 'Разрешить BBCode в ЛС',
	'auth_flash_pm'						=> 'Разрешить тег BBCode <code>[FLASH]</code>',
	'auth_img_pm'						=> 'Разрешить тег BBCode <code>[IMG]</code>',
	'auth_method'						=> 'Выбрать метод аутентификации',
	'auth_oauth_bitly_key'				=> 'Ключ Bitly',
	'auth_oauth_bitly_secret'			=> 'Секретный код Bitly',
	'auth_oauth_facebook_key'			=> 'Ключ Facebook',
	'auth_oauth_facebook_secret'		=> 'Секретный код Facebook',
	'auth_oauth_google_key'				=> 'Ключ Google',
	'auth_oauth_google_secret'			=> 'Секретный код Google',
	'auth_smilies_pm'					=> 'Разрешить смайлики в ЛС',
	'avatar_filesize'					=> 'Максимальные размеры аватар (в байтах)',
	'avatar_gallery_path'				=> 'Путь к галерее аватар',
	'avatar_max_height'					=> 'Максимальная высота аватар (в пикселах)',
	'avatar_max_width'					=> 'Максимальная ширина аватар (в пикселах)',
	'avatar_min_height'					=> 'Минимальная высота аватар (в пикселах)',
	'avatar_min_width'					=> 'Минимальная ширина аватар (в пикселах)',
	'avatar_path'						=> 'Папка для загрузки аватар',
	'avatar_salt'						=> '«Соль» для физических имён файлов аватар',
	'board_contact'						=> 'Контактный email-адрес',
	'board_contact_name'				=> 'Имя контакта',
	'board_disable'						=> 'Отключить конференцию',
	'board_disable_msg'					=> 'Короткое сообщение (до 255 символов), которое будут видеть посетители, если конференция отключена',
	'board_email'						=> 'Обратный email-адрес',
	'board_email_form'					=> 'Рассылка email-сообщений через конференцию',
	'board_email_sig'					=> 'Подпись в email-сообщении',
	'board_hide_emails'					=> 'Скрывать email-адреса',
	'board_index_text'					=> 'Название конференции',
	'board_startdate'					=> 'Дата запуска конференции',
	'board_timezone'					=> 'Часовой пояс для гостей',
	'browser_check'						=> 'Проверка браузера',
	'bump_interval'						=> 'Задержка поднятия темы',
	'bump_type'							=> 'Тип значения bump_interval (d - дни, h - часы, m - минуты) ',
	'cache_gc'							=> 'Интервал очистки кеша (сек)',
	'cache_last_gc'						=> 'Дата последней очистки кеша',
	'captcha_gd'						=> 'GD картинка каптчи',
	'captcha_gd_3d_noise'				=> 'Добавить 3D-шум',
	'captcha_gd_fonts'					=> 'Использовать другие шрифты',
	'captcha_gd_foreground_noise'		=> 'Шум на переднем плане',
	'captcha_gd_wave'					=> 'Волновое искажение',
	'captcha_gd_x_grid'					=> 'Фоновый шум по горизонтали',
	'captcha_gd_y_grid'					=> 'Фоновый шум по вертикали',
	'captcha_plugin'					=> 'Установленный модуль каптчи',
	'check_attachment_content'			=> 'Проверять mime тип содержимого вложений',
	'check_dnsbl'						=> 'Проверить IP-адрес по чёрному списку DNS (DNS Blackhole List)',
	'chg_passforce'						=> 'Принудительная смена пароля',
	'confirm_refresh'					=> 'Разрешить пользователям обновлять задание теста против спам-ботов',
	'contact_admin_form_enable'			=> 'Включить страницу для связи с администрацией',
	'cookie_domain'						=> 'Домен cookie',
	'cookie_name'						=> 'Имя cookie',
	'cookie_path'						=> 'Путь cookie',
	'cookie_secure'						=> 'Безопасные cookie [ https ]',
	'cookie_notice'						=> 'Предупреждение об использовании cookie',
	'coppa_enable'						=> 'Включить COPPA',
	'coppa_fax' 						=> 'Номер факса для COPPA',
	'coppa_mail'						=> 'Почтовый адрес для COPPA',
	'cron_lock' 						=> 'Блокировка cron (выполнение заданий по расписанию)',
	'database_gc'						=> 'Интервал очистки базы данных (сек)',
	'database_last_gc'					=> 'Последняя дата очистки базы данных',
	'dbms_version'						=> 'Сервер базы данных',
	'default_lang'						=> 'Язык конференции по умолчанию',
	'default_style' 					=> 'Стиль конференции по умолчанию',
	'default_dateformat'				=> 'Формат даты',
	'delete_time'						=> 'Ограничение времени на удаление',
	'display_last_edited'				=> 'Отображать сведения о последнем редактировании',
	'display_last_subject'				=> 'Показывать заголовок последнего сообщения в списке форумов',
	'display_order'						=> 'Порядок отображения вложений',
	'edit_time'							=> 'Ограничить время редактирования',
	'email_check_mx'					=> 'Проверить правильность почтовой записи в DNS (MX Record) домена email-адреса',
	'email_enable'						=> 'Включить email-сообщения',
	'email_function_name'				=> 'Имя функции email',
	'email_force_sender'				=> 'Принудительно использовать адрес отправителя',
	'email_max_chunk_size'				=> 'Максимальный размер блока почтового пакета',
	'email_package_size'				=> 'Размер почтового пакета',
	'enable_accurate_pm_button'			=> 'Включить проверку прав доступа для отображения кнопки личного сообщения на страницах тем',
	'enable_confirm'					=> 'Использовать средства против спам-ботов при регистрации',
	'enable_mod_rewrite'				=> 'Включить URL Rewriting',
	'enable_pm_icons'					=> 'Разрешить использование значков тем в ЛС',
	'enable_post_confirm'				=> 'Использовать средства против спам-ботов при отправке сообщений гостями',
	'enable_update_hashes'				=> 'enable_update_hashes',
	'extension_force_unstable'			=> 'Проверка нестабильных версий расширений',
	'feed_enable'						=> 'Включить каналы новостей',
	'feed_forum'						=> 'Включить каналы новостей для форумов',
	'feed_http_auth'					=> 'Разрешить HTTP-аутентификацию в каналах новостей',
	'feed_item_statistics'				=> 'Включить статистику элементов в каналах новостей',
	'feed_limit_post'					=> 'Максимальное количество элементов канала новостей для отображения (сообщения)',
	'feed_limit_topic'					=> 'Максимальное количество элементов канала новостей для отображения (темы)',
	'feed_overall'						=> 'Включить общий канал новостей',
	'feed_overall_forums'				=> 'Включить каналы форумов',
	'feed_topic'						=> 'Включить каналы тем',
	'feed_topics_active'				=> 'Включить канал активных тем',
	'feed_topics_new'					=> 'Включить канал новых тем',
	'flood_interval'					=> 'Задержка флуда (сек)',
	'force_server_vars'					=> 'Принудительные настройки URL сервера',
	'form_token_lifetime'				=> 'Максимальное время для отправки формы (сек)',
	'form_token_mintime'				=> 'Минимальное время для отправки формы (сек)',
	'form_token_sid_guests'				=> 'Привязать формы к гостевым сессиям',
	'forward_pm'						=> 'Разрешить пересылку ЛС',
	'forwarded_for_check'				=> 'Проверка заголовка <var>X_FORWARDED_FOR</var>',
	'full_folder_action'				=> 'Действие по умолчанию для переполненной папки',
	'fulltext_mysql_max_word_len'		=> 'Максимум символов для индексации (Fulltext mysql)',
	'fulltext_mysql_min_word_len'		=> 'Минимум символов для индексации (Fulltext mysql)',
	'fulltext_native_common_thres'		=> 'Порог общих слов в % (Fulltext native)',
	'fulltext_native_load_upd'			=> 'Включить полнотекстовое обновление (Fulltext native)',
	'fulltext_native_max_chars'			=> 'Максимум символов для индексации (Fulltext native)',
	'fulltext_native_min_chars'			=> 'Минимум символов для индексации (Fulltext native)',
	'fulltext_postgres_max_word_len'	=> 'Максимальная длина поискового запроса: (Fulltext postgres)',
	'fulltext_postgres_min_word_len'	=> 'Минимальная длина поискового запроса: (Fulltext postgres)',
	'fulltext_postgres_ts_name'			=> 'Профиль конфигурации полнотекстового поиска',
	'fulltext_sphinx_id'				=> 'ID Sphinx Fulltext',
	'fulltext_sphinx_data_path'			=> 'Путь к папке с данными (Sphinx Fulltext)',
	'fulltext_sphinx_indexer_mem_limit'	=> 'Ограничение памяти для процесса индексирования (Sphinx Fulltext)',
	'fulltext_sphinx_host'				=> 'Сервер Sphinx:',
	'fulltext_sphinx_port'				=> 'Порт Sphinx',
	'fulltext_sphinx_stopwords'			=> 'Игнорировать общеупотребительные слова для поискового механизма Sphinx',
	'gzip_compress'						=> 'Включить сжатие GZip',
	'help_send_statistics'				=> 'Разрешить отправку статистической информации',
	'help_send_statistics_time'			=> 'Время отправки статистической информации',
	'hot_threshold'						=> 'Сообщений в популярной теме',
	'icons_path'						=> 'Путь к значкам сообщений',
	'img_create_thumbnail'				=> 'Содавать миниатюры',
	'img_display_inlined'				=> 'Показывать рисунки в сообщениях',
	'img_imagick'						=> 'Путь к программе Imagick',
	'img_link_height'					=> 'Максимальный размер загружаемых рисунков для ссылки по высоте (пикс.)',
	'img_link_width'					=> 'Максимальный размер загружаемых рисунков для ссылки по ширине (пикс.)',
	'img_max_height'					=> 'Максимальный размер загружаемых рисунков по высоте (пикс.)',
	'img_max_width'						=> 'Максимальный размер загружаемых рисунков по ширине (пикс.)',
	'img_max_thumb_width'				=> 'Максимальная ширина миниатюр (пикс.)',
	'img_min_thumb_filesize'			=> 'Минимальный размер файлов для миниатюр (байт)',
	'ip_check'							=> 'Проверка IP-адреса сессии',
	'ip_login_limit_max'				=> 'Максимальное число попыток входа для одного IP адреса',
	'ip_login_limit_time'				=> 'Время действия для попыток входа с IP адреса',
	'ip_login_limit_use_forwarded'		=> 'Ограничить число попыток входа по заголовку <var>X_FORWARDED_FOR</var>',
	'jab_enable'						=> 'Включить Jabber',
	'jab_host'							=> 'Сервер Jabber',
	'jab_package_size'					=> 'Размер пакета Jabber',
	'jab_password'						=> 'Пароль Jabber',
	'jab_port'							=> 'Порт Jabber:',
	'jab_use_ssl'						=> 'Использовать SSL для соединения (Jabber)',
	'jab_username'						=> 'Имя пользователя или ID (идентификатор) Jabber',
	'jab_allow_self_signed'				=> 'Разрешить самоподписанные SSL сертификаты',
	'jab_verify_peer'					=> 'Проверка SSL сертификата',
	'jab_verify_peer_name'				=> 'Проверка имени узла Jabber',
	'last_queue_run'					=> 'Дата последнего запуска проверки очереди сообщений',
	'ldap_base_dn' 						=> 'Основное имя LDAP [ <var>dn</var> ]',
	'ldap_email'						=> 'Email-атрибут LDAP',
	'ldap_password'						=> 'Пароль LDAP',
	'ldap_port'							=> 'Порт LDAP',
	'ldap_server'						=> 'Имя сервера LDAP',
	'ldap_uid'				 			=> 'Идентификационный номер LDAP [ <var>uid</var> ]',
	'ldap_user'		 					=> 'Пользователь LDAP [ <var>dn</var> ]',
	'ldap_user_filter'		 			=> 'Фильтр имени пользователя LDAP',
	'legend_sort_groupname'				=> 'Сортировать список групп по названию',
	'limit_load'						=> 'Ограничить нагрузку на сервер',
	'limit_search_load'					=> 'Ограничение поиска при загрузке системы',
	'load_anon_lastread'				=> 'Включить маркировку тем для гостей',
	'load_birthdays'					=> 'Включить список дней рождения',
	'load_cpf_memberlist'				=> 'Разрешить отображение дополнительных полей профиля в списке пользователей',
	'load_cpf_pm'						=> 'Показывать дополнительные поля профиля в личных сообщениях',
	'load_cpf_viewprofile'				=> 'Показывать дополнительные поля в профилях пользователей',
	'load_cpf_viewtopic'				=> 'Показывать дополнительные поля профиля на страницах тем',
	'load_db_lastread'					=> 'Включить маркировку тем на сервере',
	'load_db_track'						=> 'Включить свои темы',
	'load_jquery_url'					=> 'URL для загрузки «jQuery» и шрифта «Open Sans»',
	'load_jumpbox'						=> 'Включить отображение быстрого перехода',
	'load_moderators'					=> 'Включить отображение модераторов',
	'load_notifications'				=> 'Показывать уведомления',
	'load_online'						=> 'Включить информацию об активных пользователях',
	'load_online_guests'				=> 'Включить отображение гостей в списках активных пользователей',
	'load_online_time'					=> 'Временной диапазон онлайн-статистики (мин.)',
	'load_onlinetrack'					=> 'Включить отображение информации о пользователе «в сети/не в сети»',
	'load_search'						=> 'Включить поисковые возможности',
	'load_tplcompile'					=> 'Перекомпилировать старые шаблоны',
	'load_unreads_search'				=> 'Включить поиск непрочитанных сообщений',
	'load_user_activity'				=> 'Показать активность пользователя',
	'load_user_activity_limit'			=> 'Ограничение числа сообщений для отображения активности пользователя',

	'max_attachments'					=> 'Максимум вложений в одном сообщении',
	'max_attachments_pm'				=> 'Максимум вложений в личном сообщении',
	'max_autologin_time'				=> 'Время действия автоматического входа при использовании функции «Запомнить меня» (дней)',
	'max_filesize'						=> 'Максимальный размер загружаемого файла (килобайт)',
	'max_filesize_pm'					=> 'Максимальный размер загружаемого файла в личных сообщениях (килобайт)',
	'max_login_attempts'				=> 'Максимальное число попыток входа по имени пользователя',
	'max_name_chars'					=> 'Максимальное количество символов в именах пользователей',
	'max_num_search_keywords'			=> 'Максимальное число искомых слов',
	'max_pass_chars'					=> 'Максимальное количество символов в паролях',
	'max_poll_options'					=> 'Максимальное количество вариантов ответа в опросах',
	'max_post_chars'					=> 'Максимальное количество символов в сообщениях',
	'max_post_font_size'				=> 'Максимальный размер шрифта в сообщении',
	'max_post_img_height'				=> 'Максимальная высота изображения в сообщении (пикс.)',
	'max_post_img_width'				=> 'Максимальная ширина изображения в сообщении (пикс.)',
	'max_post_smilies'					=> 'Максимальное количество смайликов в сообщении',
	'max_post_urls'						=> 'Максимальное количество ссылок в сообщении',
	'max_quote_depth'					=> 'Максимальная глубина вложенности цитат',
	'max_reg_attempts'					=> 'Максимальное количество попыток регистрации',
	'max_sig_chars'						=> 'Максимальная длина подписи',
	'max_sig_font_size'		 			=> 'Максимальный размер шрифта в подписи',
	'max_sig_img_height'				=> 'Максимальная высота изображения в подписи',
	'max_sig_img_width'		 			=> 'Максимальная ширинаа изображения в подписи',
	'max_sig_smilies'					=> 'Максимум смайликов в подписи',
	'max_sig_urls'						=> 'Максимум ссылок в подписи',
	'mime_triggers'						=> 'Разрешенные mime-типы в загружаемых html-файлах',
	'min_name_chars'					=> 'Минимальное количество символов в именах пользователей',
	'min_pass_chars'					=> 'Минимальное количество символов в паролях',
	'min_post_chars'					=> 'Минимальное количество символов в сообщениях',
	'min_search_author_chars'			=> 'Минимальное число символов в искомых именах',
	'new_member_group_default'			=> 'При включении данной опции и при указании лимита сообщений для новых пользователей всем вновь зарегистрированным пользователям будет назначена группу по умолчанию <em>Новые пользователи</em>',
	'new_member_post_limit'				=> 'Лимит сообщений для новых пользователей',
	'newest_user_colour'				=> 'Цвет для группы <em>Новые пользователи</em>',
	'newest_user_id'					=> 'ID последнего зарегистрировавшегося пользователя',
	'newest_username'					=> 'Имя последнего зарегистрировавшегося',
	'num_files'							=> 'Количество вложений',
	'num_posts'							=> 'Сообщений',
	'num_topics'						=> 'Тем',
	'num_users'							=> 'Пользователей',
	'override_user_style'				=> 'Заменять стиль пользователя',
	'pass_complex'						=> 'Сложность пароля',
	'plupload_last_gc'					=> 'Загрузчик файлов',
	'plupload_salt'						=> '«Соль» для физических имён файлов загруженных при помощи Plupload',
	'pm_edit_time'						=> 'Ограничить время редактирования',
	'pm_max_boxes'						=> 'Максимальное количество папок для ЛС',
	'pm_max_msgs'						=> 'Максимальное количество ЛС в папке',
	'pm_max_recipients'					=> 'Максимальное разрешённое число получателей ЛС',
	'posts_per_page'					=> 'Сообщений на странице',
	'print_pm'							=> 'Разрешить печатный вид в ЛС',
	'questionnaire_unique_id'			=> 'Уникальный идентификатор, присвоенный этой инсталляции пакета phpBB',
	'queue_interval'					=> 'Интервал очистки очереди',
	'rand_seed'							=> 'Генератор псевдослучайных чисел',
	'rand_seed_last_update'				=> 'Последний запуск генератора псевдослучайных чисел',
	'ranks_path'						=> 'Путь к картинкам званий',
	'read_notification_expire_days'		=> 'Срок действия прочитанного уведомления (дней)',
	'read_notification_gc'				=> 'Интервал проверки уведомлений (сек)',
	'read_notification_last_gc'			=> 'Время последней проверки истечения срока существования уведомлений',
	'record_online_date'				=> 'Дата рекорда посещаемости',
	'record_online_users'				=> 'Рекорд посещаемости (макс. число посетителей)',
	'referer_validation'				=> 'Проверять рефёрер',
	'require_activation'				=> 'Активация учётных записей',
	'script_path'						=> 'Путь к скриптам phpBB',
	'search_anonymous_interval'			=> 'Интервал между запросами для гостей',
	'search_block_size'					=> 'Размер блока при создании поисковых индексов',
	'search_gc'							=> 'Интервал очистки результатов поиска (сек)',
	'search_indexing_state'				=> 'Статус состояние выполнения создания поисковых индексов',
	'search_interval'					=> 'Интервал между поисковыми запросами',
	'search_last_gc'					=> 'Дата последней очистки результатов поиска',
	'search_store_results'				=> 'Кэширование результатов поиска',
	'search_type'						=> 'Поисковый механизм',
	'secure_allow_deny'					=> 'Список разрешённых и запрещённых (источники загружаемых файлов)',
	'secure_allow_empty_referer'		=> 'Разрешить пустой источник перехода (настройка вложений)',
	'secure_downloads'					=> 'Включить безопасные загрузки',
	'server_name'						=> 'Имя домена',
	'server_port'						=> 'Порт сервера',
	'server_protocol'					=> 'Протокол сервера',
	'session_gc'						=> 'Интервал очиски сессий (сек)',
	'session_last_gc'					=> 'Дата последней очистки сессий',
	'session_length'					=> 'Длительность сессии (сек)',
	'site_desc'							=> 'Описание конференции',
	'site_home_text'					=> 'Название основного сайта',
	'site_home_url'						=> 'Ссылка на основной сайт',
	'sitename'							=> 'Название конференции',
	'smilies_path'						=> 'Путь к смайликам',
	'smilies_per_page'					=> 'Смайликов на странице',
	'smtp_auth_method'					=> 'Метод аутентификации для SMTP',
	'smtp_delivery'						=> 'Использовать SMTP для отправки email-сообщений',
	'smtp_host'							=> 'Адрес сервера SMTP',
	'smtp_password'						=> 'Пароль SMTP',
	'smtp_port'							=> 'Порт сервера SMTP',
	'smtp_username'						=> 'Имя пользователя SMTP',
	'smtp_allow_self_signed'			=> 'Разрешить самоподписанные SSL сертификаты',
	'smtp_verify_peer'					=> 'Проверка SSL сертификата',
	'smtp_verify_peer_name'				=> 'Проверка имени узла SMTP',
	'teampage_forums'					=> 'Показать модерируемые форумы',
	'teampage_memberships'				=> 'Показать группы',
	'topics_per_page'					=> 'Тем на странице',
	'tpl_allow_php'						=> 'Разрешить php в шаблонах',
	'upload_dir_size'					=> 'Размер всех вложений (килобайт)',
	'upload_icons_path'					=> 'Путь к значкам групп расширений',
	'upload_path'						=> 'Папка для хранения вложений',
	'update_hashes_last_cron'			=> '',
	'update_hashes_lock'				=> '',
	'use_system_cron'					=> 'Выполнять периодические задачи через системный планировщик (cron)',
	'version'							=> 'Версия phpBB',
	'warnings_expire_days'				=> 'Длительность предупреждений (дней)',
	'warnings_gc'						=> 'Интервал очистки списка предупреждений (сек)',
	'warnings_last_gc'					=> 'Дата последней очистки списка предупреждений',
	'remote_upload_verify'				=> 'Проверять сертификат загрузки',
	'allow_board_notifications' 		=> 'Разрешить уведомления',
	'allowed_schemes_links'				=> 'Разрешенные протоколы ссылок',

	'REPARSING'							=> 'Репарсинг',
	'reparse_lock'								=> 'Блокировка репарсинга (выполняется по расписанию)',
	'text_reparser.pm_text_cron_interval'		=> 'Интервал репарсинга ЛС',
	'text_reparser.pm_text_last_cron'			=> 'Дата последнего репарсинга ЛС',
	'text_reparser.poll_option_cron_interval'	=> 'Интервал репарсинга вариантов ответов в опросах',
	'text_reparser.poll_option_last_cron'		=> 'Дата последнего репарсинга вариантов ответов в опросах',
	'text_reparser.poll_title_cron_interval'	=> 'Интервал репарсинга заголовков опросов',
	'text_reparser.poll_title_last_cron'		=> 'Дата последнего репарсинга заголовков опросов',
	'text_reparser.post_text_cron_interval'		=> 'Интервал репарсинга сообщений',
	'text_reparser.post_text_last_cron'			=> 'Дата последнего репарсинга сообщений',
	'text_reparser.user_signature_cron_interval'=> 'Интервал репарсинга подписей пользователей',
	'text_reparser.user_signature_last_cron'	=> 'Дата последнего репарсинга подписей пользователей',

	'img_strip_metadata'						=> 'Удалять метаданные изображения',
	'img_quality'								=> 'Качество загружаемых изображений',

	'recaptcha_v3_key'							=> 'Ключ сайта',
	'recaptcha_v3_secret'						=> 'Секретный ключ',
	'recaptcha_v3_domain'						=> 'Домен, с которого будет загружен скрипт для проверки запроса',
	'recaptcha_v3_method'						=> 'Метод, который будет использован для проверки запроса',
	'recaptcha_v3_threshold_default'			=> 'Порог по умолчанию используется, когда другие пороги неприменимы',
	'recaptcha_v3_threshold_register'			=> 'Порог при регистрации',
	'recaptcha_v3_threshold_login'				=> 'Порог при входе',
	'recaptcha_v3_threshold_post'				=> 'Порог при отправке сообщений',
	'recaptcha_v3_threshold_report'				=> 'Порог при жалобе',

	'default_search_return_chars'				=> 'Количество символов, которым будет ограничен текст сообщений в результатах поиска',

	'feed_limit'								=> 'Максимальное количество элементов канала новостей для отображения',
	'feed_overall_forums_limit'					=> 'Максимальное количество элементов канала новостей для отображения (форумы)',
	'feed_overall_topics'						=> 'Включить канал новых тем',
	'feed_overall_topics_limit'					=> 'Максимальное количество элементов канала новостей для отображения (темы)',

	'auth_oauth_twitter_key'					=> 'Ключ Twitter',
	'auth_oauth_twitter_secret'					=> 'Секретный код Twitter',

	'load_font_awesome_url'						=> 'URL для загрузки шрифта «Font Awesome»',
	'display_unapproved_posts'					=> 'Показывать авторам их сообщения, ожидающие одобрения',
	'queue_trigger_posts'						=> 'Не используется в версиях phpBB выше 3.0.5',
	'enable_queue_trigger'						=> 'Не используется в версиях phpBB выше 3.0.5',

	'UNKNOWN'							=> '<span style="color:#FF5D00"><em>Назначение неизвестно, параметр не входит в набор стандартных для phpBB3.2.x или phpBB3.3.x</em></span>',
));
