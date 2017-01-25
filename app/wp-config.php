<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('MYSQL_DBNAME') );

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_URI') );

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
define('AUTH_KEY',         '#X$t^A-VyM?L;Z7b n4UrOb^-+42T8 COBSh#z;3-)aUUfa1>%TcR)|MWT%}1)k%');
define('SECURE_AUTH_KEY',  ';|C%N]rRb_w-[M|HV03OGOo@59DTE;~ NBL`E(0~4)OQx<%od9={-y_h/yuX=Z/Q');
define('LOGGED_IN_KEY',    'A]Mu|&p;3fDJQt<kk(eop44d791go+MkSC.+T~P7Q.9Ex!j!zzy #_U;Mcu}eD:5');
define('NONCE_KEY',        'wZi|kv?g[,F3+?GNrwi<p@}^b1 Dwex?0:[sIb#8Vk]Z.w|OL,CB|u8+^n%)m|~_');
define('AUTH_SALT',        ')y;A_-4!n[|$yKw};TiLbsng?,R+[4k&+tA17~k]X`@+w.z7/0m<w7-8YOMR!UQS');
define('SECURE_AUTH_SALT', '$jbma[A|$V)G|{.<a2ac&}*S`-m+iozRuPBI*u/K$uqZ_;{3q)v4J.LEj>:j3hd]');
define('LOGGED_IN_SALT',   '^.Jc:*MI%dw*=t$-*B<K@hi0 kGWk>j/|Xz=($_(UlI[?v]Y/S2JQ}hRVJLO4|gK');
define('NONCE_SALT',       '%@8+T{<`oc#|s2Qx&+ywN8UwUx7%gngr_!M_O^fa|`+a*}p9iJrGqFD9El13V((l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog_mm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
