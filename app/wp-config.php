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
define('AUTH_KEY',         '-1!d;wd?Op3FdN[sKZlyEmiXs%uGvIS+GUvH9|.S%};l}on;Jz|D:ayMfj]SE]^~');
define('SECURE_AUTH_KEY',  '1NOw*(x9U&F/= N.@n%YY!p<6N>7X*:E&/Z>|jB$aSW M%HU+wxvmIA!=r-.mivs');
define('LOGGED_IN_KEY',    '!6V(td|ww83xcm(yyK7bGJ<T*?u_AH+Y;wvG<to>OD53|ct.:l)Lrn/d&V<h@/LN');
define('NONCE_KEY',        '3|w$a7KeCAgf|w`H-$8BP!!:CT&jpzy{|]<B)9.2yU+M8e_7Z40bOoXTUl|{mO[h');
define('AUTH_SALT',        'ooW{XlFj=3tk?Y+|qiozr8Ts )J??G5,D-6wSbAyzfkUEb;{zWGk {{ _A]VJMIT');
define('SECURE_AUTH_SALT', 'aIQxtm?}5S|?f@y4.Cm.5f=zTcg7y#?kV}n:[OC1_-ybOC~9c).ro)bsSS+{Y-8[');
define('LOGGED_IN_SALT',   'j#}P0z4:}b7<O-Zj-(T@XCNo0,}u&NV{U%MSBr`gb]RH+A7D2Tsz@#cwubRE}a;)');
define('NONCE_SALT',       'zW5@yGz!0oHlNw]cFZ!Q|=)+s!QC6a/3:9}Dm9o&2+qgjAyeG>N`Xz7QW*Y&D|rd');

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
