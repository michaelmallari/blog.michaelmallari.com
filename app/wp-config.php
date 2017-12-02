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
define('AUTH_KEY',         'pgJ-&vm=UE+&%$Z(GJ6&Z3}@z>@YmqSt^5xJN,qx@1[?l^}hj)&V_B05kq|_ea7C');
define('SECURE_AUTH_KEY',  '&RG&P^HBH:9Z]? 6GT+Mj8()XsWQ@L_S4C0iZ)H+]eKTR[qDX4O7leb/A^m9c,+P');
define('LOGGED_IN_KEY',    'Oez$6P%T<&cqDOosA6_w-@^yns0<OT;)TL|HT:(7B,08|;Ohz*?aQk:U/+8qgU~.');
define('NONCE_KEY',        '.@zS,pZrB#M/Fs~-`ihWVbBhU]LW7Fuh+XCW_V-ykHH/)|u^p|3eSh9_*vFK=4@x');
define('AUTH_SALT',        '6W^Kwx ii*,^m<>lguIT?+MH+V>?,G!Q|`lQByG~I/=VA])~_8.zYJ&c{koEK>aT');
define('SECURE_AUTH_SALT', 'brfcR|.$YAB4+rK[XYPl]K+p(,2<0-c#tvS;`i JP7T|j$Py=alx9t6FNyGg-*YK');
define('LOGGED_IN_SALT',   'z ,vv)7tW>U3E||-or;py&CZv6Y<M_IUc^;g@s*p$K.%mI|PjD<;H2yEx76 es-H');
define('NONCE_SALT',       'v|bXB0+zpDQvhw6@GW4Nb(rH8+PHDzPQ3.yK-9/?9:yzk#&(*e1%YQuN1-.k6vl%');

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
