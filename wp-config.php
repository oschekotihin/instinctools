<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress3');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
// define('DB_HOST', '62.116.172.80');
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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5;*L2q}(LOM2W4|[@z)h!S=m$5h2A:{Qt`3yle->PSJ*c|~Q0|nB <oQa^+L.LOa');
define('SECURE_AUTH_KEY',  'eks=$D|d1:-#6%eOJ<X8lbql^n9IGGRi9qT6V0g+0_mw#g^5jOPSuVVM{m(QPc)C');
define('LOGGED_IN_KEY',    'EVUMRP+IRIdKsw8f`)= z-^V|cVBN={ZM2T0$u~U[4W,l}n9hS&i<.EhR$;~hl$^');
define('NONCE_KEY',        '+|t2|^P#xclYnR4sT5UvhfT@|WQ<stS-mv<LSkbCG1LR.d{@8Bc@bUUY%qF84K9v');
define('AUTH_SALT',        'O nQH,*|}YJ|c(O;Nz5{#,s+3jFzU6hrrZqsj5k{0xh4I8,JxoOvm+|1ITl@EIPN');
define('SECURE_AUTH_SALT', '4xN+1hVjrerZajmcd!e__:F,ne<bSRK&MPQuQk.PEs+sq61sU|$MD/fdrM$t,qB8');
define('LOGGED_IN_SALT',   '%>C3`-kLd!CFZdpP<nx._*oEDM)mG<zD-28G4=.%(a|+GUbt+}DTTlZI-O-bl5&}');
define('NONCE_SALT',       'D.-OadfRH=.~ns c8|eK@A1tyHF=WvM?-dRZR: eRO1(,2p{OwIdwX:srSn-zkbp');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
