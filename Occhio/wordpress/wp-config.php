<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'occhio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(I<f~8P32<kr|Qb5+sa.(f3oo*VO^jYaPe.E{xze-yWTB?jnKCpO@=Y/f~ogEU{c');
define('SECURE_AUTH_KEY',  '(]KL`p5|M-VN:_Z>|y[q}SSKZmUt-KL:~|{%yIKi(+la::0^Ta|IBKHx]hEKWK&.');
define('LOGGED_IN_KEY',    '~P=&v7OHb[Op>vg3:+M*|1HHBLs3!F{dNJ Yli8`Aj8B.r[q f,ET;<zBv=E/y>[');
define('NONCE_KEY',        '+W5,=@A,Rmp6HcE~cn}RRN@# |qi<mjM^brV=#5k_N:{#IiD(vQ<A_.&582Yvpz7');
define('AUTH_SALT',        '_ti]1TTqhm;59_|&Sb-R%3vYO>^@PAiBZA=%nKFL1jP?`wF#=&n~q47&v*SbaRT-');
define('SECURE_AUTH_SALT', 'A>T$jDo 7vn)[!]eVEzF-o>lT2)7,Ri2V-3etos+QZ>|b7syz5V RL/`.Eq4Y~IW');
define('LOGGED_IN_SALT',   'r}N?`vS[cU7@8r:Tl]Tykuq4?k rO%+]X<&jQd1=>B=3#sjZf dkS}-KN#Y.XvG)');
define('NONCE_SALT',       'JNeh}Mi^I@|t@YB^0 -I{`^HN8G%-g#EsU+?+`sn4Zr`FyB1kvL0ICo6hp~sWUFN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
