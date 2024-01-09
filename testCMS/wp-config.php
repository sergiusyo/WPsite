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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'qL|SzN{|QjsY{gc:.R=<#&GfWNkpKg`uoM]jXM#i`FYt;VOYEA](auFydG&<,|jN' );
define( 'SECURE_AUTH_KEY',  'bWHr/2aZ,P2OX^HTf$Nnd?uy19^{;2TFv[N3Wqwr@MJcZ<*38%d~*xE#K[y,*d;{' );
define( 'LOGGED_IN_KEY',    'X!Z.Nc0FK2]_]+Uq-uN{u#)#WG`^ _McWsODJMCruBZzt^A&Sf$+qT87ee] Mdcf' );
define( 'NONCE_KEY',        'k8K>o41TX]&u}{.*d+0%PzxQg%~^=c~gu7UL&FY__S22`Aoh}xQfI:F+d:>QSNqK' );
define( 'AUTH_SALT',        '/j/%?k|GtKWi]])j5t/hsaUi@IJTT#(fn%M!@weBdr65$!u#pM.  JbA7Nny/u.V' );
define( 'SECURE_AUTH_SALT', ',Kg,vAW)[0)yt8.P]54Fb<ECAOV|:fc{Zp*$vy~Q8J0Jn(e??#XInF70qs&#u.Vr' );
define( 'LOGGED_IN_SALT',   ',Fx+T#Ox?0OnH7-%abp~H4$giD7K}D&[n|U6[JwBI(~.LwRO8KDg`rra^da;IJqb' );
define( 'NONCE_SALT',       '8# t2BVXn_p7qO6NJ`qS-:wIce7/K{?7hiS78z8Oz5 8`fH!@yGk*s){Wui8K-^=' );

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
