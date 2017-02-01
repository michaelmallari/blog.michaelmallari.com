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
define('AUTH_KEY',         's@ .lMI6>Jfz_Qr]K]YP;UH+rC#nO|aZ&%]`8U$r.#i$L/6]/LE]7Pc~S@q|RedW');
define('SECURE_AUTH_KEY',  'O*SA+*-&;D.<+@$[6qc[xKn8N>}HKre/@*mknXGhXNW5gL8a2O1#qnkqCX6U]b+J');
define('LOGGED_IN_KEY',    '-J}9h9]bN*}^SeIir:q.R?E3tTmcq>3Ue[|jLJBe|c.i0# Fct0S0/&7LDU;y=xg');
define('NONCE_KEY',        'cci5?~EB:dj78eN/wnrKAr%n,=y6ll-m0U#]|w`{/C#<aO[zK}2/tLu4#VQ#yD1D');
define('AUTH_SALT',        '0,i7,/%_-iY3A_*}h/|Of,%E*pKMF[xSkOpT3aza/eh|K#I&[O/029f(1MH|6heP');
define('SECURE_AUTH_SALT', 'C-@g,tN/m$Gc 8@{/@NY7[?NrvL2N$.-6d|U#1|av52DV4TQf$9M/MT=b&Ox^.Ct');
define('LOGGED_IN_SALT',   'LE5#^TCG0x!Q-u,CQ&~C`z<doe?`Gvi,xy)@OsewPjceby;cI+Uax ~57#6X^jlX');
define('NONCE_SALT',       '|*Y+B~AmfW@_}2snJ0f%EP-UP[JdE61I%svj&%-1N9 g~-~-x)|`w{oG<7|{|h.4');

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
