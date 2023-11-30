<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'litpenz' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AYNfgn^#$!r&{gV(2nsN+%<ewAx>,Q[gOQ<IpDOLpR:lg:8LCDQ6cStZ. =[]8v=' );
define( 'SECURE_AUTH_KEY',  'r:=lhIPNJ= cGb,>/uth0A}+&o%CkdY}v>}XHC<N%D#n>#~QSMP.!lndt1BjlOTz' );
define( 'LOGGED_IN_KEY',    'nBERaC9G;u )M{R_=gWQ#3$,-|CJ,Lk92:kJ*mC|<`2ktplNBEoY}g_`<=An47vL' );
define( 'NONCE_KEY',        ') sG{?pB6-P(8-.h|$4ry]%mgQv*i?SSL:?qah+w,fA_3Y7{se4U%v;HJ]K w0!9' );
define( 'AUTH_SALT',        '~4! nm{N7p$j|xU5Sun#62;8RzXz5_)8<;^zp#35K$S@8CKfJ$S/bY/Po:d?G>ZL' );
define( 'SECURE_AUTH_SALT', 'yD1t>)W0g1.)e^:MXNm^!<VgqZ( l,0s~_2z@7P+RFU#r4SZW6Y`c7aqQg-ua<#Z' );
define( 'LOGGED_IN_SALT',   'ui=?[ a8SP Xku:Yo&07Y{=p1E^=V?.k {3L?|11C0)iJ0^Tfu-k/^zAG KfR~!!' );
define( 'NONCE_SALT',       'lIlXskSFO+$0i^O1ZnsM]WKQ&fXPu7,NkqXG[7BiqW@C$]?4.# 5rs<^#(F0vL*9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
