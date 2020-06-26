<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pKwz(-KOAHq3Cl!y%xGe?m~Y_{X4t3w1TBXwF^#JphqGG%[OkUYXCG[%Xi2kn[uh' );
define( 'SECURE_AUTH_KEY',  'eNLH`(/lepb|uPap<gke}OV*r/f>#hu.5E_f[)iFKTUk!9u=+(98##DgQ`%i`>]M' );
define( 'LOGGED_IN_KEY',    'V;0f#Hykpt1Vz_(TJOJ/F|uoulT;~NP+>cJpa&C+IMiKh/RGN!Kamrm+?I9L8ujO' );
define( 'NONCE_KEY',        '5UmJ<p}y9-hoS?OA^LRGhZ|82X{q>)-%ZbUqGT~p..[pS*$vruD>nKvglb,F iTs' );
define( 'AUTH_SALT',        'z.r^}W>`op..(+R.Hr3J Y1JdZ*sFq_#67VL_Euh5xU*@V+J_,]5sf,e2C[QMG{A' );
define( 'SECURE_AUTH_SALT', 'd4pt!LP}X%5ym}y~+^ 9f7g?0.u+#oqGs@;B}vnughrj4HS<%>9!~AgtulZ-]wgm' );
define( 'LOGGED_IN_SALT',   'b#stKI$4kp]X*TEgE-mC}/5kt-NzhzQhipk>mc3{`Y!SWxj#c$[Snkz7,S2[AU/Q' );
define( 'NONCE_SALT',       'g$2d&B];|BB&j/7Us?/amM1b^`,#9P&%XadhSTa{`:#](zai2gWN>$dIlCjqVo8}' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
