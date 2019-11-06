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
define( 'DB_NAME', 'wpfolder' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wpfolder' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'tfRUAYjd0LK8YaGD' );

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
define( 'AUTH_KEY',         '2It[HoRV3isZ90&A4AC]& qBj/`}<gUOgo8]i._X>6%i(]|s&;&E`?&9CZMhKJ#0' );
define( 'SECURE_AUTH_KEY',  'E~zc#ad=nmGO=$Pv8FVSp[W{H[LTv?9gs3w,~F=@O2/%r:^~L+U$nwozkOK{Qv1!' );
define( 'LOGGED_IN_KEY',    'jcQsi/BeLld.rP<_h)?v/ JvPIuq-)=)~t|i*;HXUhs(/QYX{XnuKx&o4(dE~6h1' );
define( 'NONCE_KEY',        'JW~ZVAg:Grw{%r9x?G`2v^S7of9clS)A<?J4Ep5MAm,w.Ni-fKOly+U(^*I~A^p4' );
define( 'AUTH_SALT',        '9r_E*zLat(/-[>-C}kDbOr[])LY|p0TOSek8hkNgoJJBM`R7n,Yy3TWS?d)[7CJM' );
define( 'SECURE_AUTH_SALT', 'JLrbV=wMM? WQq]c&P=R)b8^}VFE_VYa;:Q^Bves39&P@#@ 8w7{n{B}u0toK$x>' );
define( 'LOGGED_IN_SALT',   'R-5}AlQpA/@`c(i=$>?=:|&+l`HCV^G76#)k`VQTz?CCDwEM};p&P:S9a[I7y,B[' );
define( 'NONCE_SALT',       'LQt,`P3nepY.CO(&^.E;g*$p3!J13mc|S2_HhHq;?T_>w+mui2toz=B+.b-+i7oj' );

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
