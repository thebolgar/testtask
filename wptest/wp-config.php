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
define( 'DB_NAME', 'tes_tt_ask' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wptesttask' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admiN132465admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '>Zz`<BT*S9pM-_EZ,>IP!YL4x|&ZU0$gzT[xIp-UeU-sd].;XxM`lp{0IF}q8N{M' );
define( 'SECURE_AUTH_KEY',  '1]4^:se?<I6v8I;.IeJ>mCSy47h e1MSDWfn?9qx[E%A0-ITjZA lau7Dm] &gLc' );
define( 'LOGGED_IN_KEY',    'WZ`9whv_!/AhUUiE;QFJF`y(yO_dKp.L&>6l:ALdJ]<Imq>//)ys;E6,,ZR:Qq!_' );
define( 'NONCE_KEY',        '?a!k[N6sx_4,g1$U&]s+23h&3dg<;d`*oX_Tnf,?D9^alEhZq,jk#Oa1gwop(p<w' );
define( 'AUTH_SALT',        'CoD/5G16w50w7X&rT1B<51T>}FuzLqj]fhm]GGLkFL }]WwmO/!{$N]RJKYKhHv+' );
define( 'SECURE_AUTH_SALT', 'Ncw:#A.bJ_eqo[(viDEmZAFs[WU1bD7V{D:<zQ{FG_RGH?dvX,OZ9}4u4_O$,N4)' );
define( 'LOGGED_IN_SALT',   '~BW_=y1Po#}cjSW!VxAZsM3>T93R~~-4JIx`OR1x*h)y%e;C;~gu;{X2{NB9>;&o' );
define( 'NONCE_SALT',       '$:lKK48[$8s1d>TU4-j6tYD0Yo#-?a=RB}WO2ImfxTJG6{r?=^K&X3S+>Lab1ixd' );

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
