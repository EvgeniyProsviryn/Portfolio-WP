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
define('DB_NAME', 'folio_web');

/** Имя пользователя MySQL */
define('DB_USER', 'vroot');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vroot');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+j&QD 3.u6FC|7JV|Vzy8hdHu:F&+fna+{k0ZO]B&A2Mb*_bH B&l};Eqq>CY~ZN');
define('SECURE_AUTH_KEY',  'u#Pplm0p!5106)b;iLp$z)@.G;Z4$Tna%pI90+F`g3GTOaI sOd+s|jg?dr((1^e');
define('LOGGED_IN_KEY',    ')h%SLrATH|e&;80v(EzHw1rWlaTd#sFL_E=F.IE)A%PUstX?a</WNoFe-{t>wHzm');
define('NONCE_KEY',        '}K;#h!)Xju9qAm 8p[5X-%q`:pks4l`ca:0^<]<u]gz&4{|1Q0<3l*4h)BS-j^Zg');
define('AUTH_SALT',        '{7#M_*n4dN~Vd!32tmQ.j Et)WA!6C_65/6$v:j;9+j28Hj{V(sxxm{]_473mMuE');
define('SECURE_AUTH_SALT', '>a(cJ3BuS1i-znGSQZ`XSX|IUx7-b(Eq6#p(3MRQv-q#&q[Av*j4Dz?fd}@pl,.(');
define('LOGGED_IN_SALT',   'x8fFiDj$v9$8m*Lm/2;var_vrQ$sZkFJHB;EwFfD6r21:7|6vs)Y6mE@~;X|$2vY');
define('NONCE_SALT',       'UBdgx9+{XZ-5ysqhlt|JEx)=pI!{?HUM8h._53Fwv/>,+:+|?YG/xo #OZod+e+O');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
