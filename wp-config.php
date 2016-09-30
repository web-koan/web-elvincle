<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'elvincledb');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'elvincleuser');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'pr0b1t14nd1t0');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@w@-fZrAjzWj>wQQ@MFEKG `~7c0&JToeGi?t o2/?nz@TVutS )$]p{.K8zV~?Z');
define('SECURE_AUTH_KEY',  'FzP#H/[no8Zv0e1||y[oSC&VkV`< U{V]p.&Cm:3v4`J>c+)%oRM8ahK3|@x&}^i');
define('LOGGED_IN_KEY',    'y_wb8H(x, :0%d3uV^ab17d_wO:W2O[U+oAL|!E+xh8k+O8S^.h9QPsSkFb[hz+z');
define('NONCE_KEY',        ')7bi9ZsR*2:o3NV7tk:ppCI.k:8Db`Dx[k@CQAftQs,pPF_f*xw]Lrfg<1qi=k(}');
define('AUTH_SALT',        'rxRT__W|FnNzWX02r;cw&-9f*>u-|%pSTP4&Zc@Qm[v.g !Ab-+sc|#,*OFKH>p%');
define('SECURE_AUTH_SALT', '[3oWH`?<o(~97ILmca<-AA%f+3n%`p%{Mzyl3GUExK`~->/(-ytCuWYqq3:R{^|j');
define('LOGGED_IN_SALT',   'l!hU|YA`?2QW3zqE4%LL&c-U5gvcIe1{id?#H#V<-~CtA:&TR&*d>#!XJIguP]L8');
define('NONCE_SALT',       ')7*a]badvTd7c!>DU[hZm@>ncro&gM+|8JG8@.}t^7|V%lC>@k&_MItWU>aXIXOI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
