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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressDB');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'user220');

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
define('AUTH_KEY',         'tno|ZBaI8/]M[xfbuC9eciB_n3l$3-O/5|i:/~55hz{%:XS*GesLW!_<k-)$$*Ke');
define('SECURE_AUTH_KEY',  '5Lrk=L.i:2nQ2^uxpTEG~E5{?lY9AKM]d/SJ]7ghxtd-+U]+%VEDwJBk2@L ;M+[');
define('LOGGED_IN_KEY',    '!Ky|Th06E(*Vh!4D3|LA9FMPsd29yFh0i)B8JH-I2e{p vDa= A_4[}&J+u}JPOi');
define('NONCE_KEY',        '+|78*BlkTx62QlRKzd=G!3AFN#0P!e30VE+h|mgIRfL1x.aUi*7kBlYu9LFsg2D(');
define('AUTH_SALT',        'wj!CWi:k$zOws`|(7+EmFGB[2.RG+2s%|(/*oy(71O3M@Y<5l)N)=8&3y/iGPi6&');
define('SECURE_AUTH_SALT', 'B3>3>kHGP7D=-FA-pZh]E3F!+I(<d|Cqw0|UF`:*d=, viGV^JE/lwTO(-|g~L{n');
define('LOGGED_IN_SALT',   'E)h>_Gx+~%|V^gy9_y_YNu+FuYx&JA@1fak|7jk^Qu!jpl=7*vQ{zy{$q5Gq}uZH');
define('NONCE_SALT',       ':^JKCa(q~%~5Hd@z%qf[tivSxn{$-$Gy3D8-ES|C|Gpzz]Tw GH@L~opA!:qA3S5');

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
