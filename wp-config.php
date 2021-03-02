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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test_project' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'm`FivJELrf!A>Df07#=];`.c{X~(*+j76_o>j<*[)~t^@Zs^UP3%h(=hp8H{0{cv' );
define( 'SECURE_AUTH_KEY',  '`Z37|9C5Y#+QrquzmqcI[F|#8L+ Q6[Pa_qB^<WAR`IkpTG:(Qr]E*CqCHWlYD`N' );
define( 'LOGGED_IN_KEY',    ']B2y5Ilh*Xsf}}Ub<F88E1$@:.w.L/Q?`]t(pf(=pnPJ6d%Gc9tH(&~?+ys7<?&F' );
define( 'NONCE_KEY',        'k{KVDlUmHMr(*ixTQ_Pb+,#*ke.]U,o,LOn.![lrD:z%K+J37ki|!5y$k^BT#KjH' );
define( 'AUTH_SALT',        'M+<z6>WY<Q~Gc}3l,~2o1Z,wK{tF(-.ywob1x6?jxU~f/YHqH}qKDEjpnMiuOaE-' );
define( 'SECURE_AUTH_SALT', '$uTs^1,sn[M1.}]~B3H IyFEU$4qb*!l2}8|:R2o6evJE-6vWiLa0GzPBIhkFTIf' );
define( 'LOGGED_IN_SALT',   'm4:g%u2G~LK/TXtc3YRzRHq6xeQE0vMpG?I6ko=6Qq[pK(f-avw~3oVbnI~/H>0 ' );
define( 'NONCE_SALT',       'uDEbc6Ti[`w,Hsg)l&c.b*8Ud L2(G}l2ubF_]{$&>vx2Sw3r8Y#gC+zT1Q mDfn' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
