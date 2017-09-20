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
define('DB_NAME', 'homework');

/** MySQL database username */
define('DB_USER', 'simonamilos');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'RJL%[Mr)J6?[=P&jy9;O*M8y=Cutv;ZAh9Z$o<lH:^hmQjDce!pTH:Kidm79B[58');
define('SECURE_AUTH_KEY',  '0aXY4+/4lODwKkR@I`s}1UDD/<^Q$^;>!Y!@L#<vjK=cgH>MHd9xH.9(f9G?889q');
define('LOGGED_IN_KEY',    'Q&@Wsx&3P-YWACh|=@6bhpUAeTFlR=>-xcDq?FcglUD_1cXIMVn17m(3NpLBjiMo');
define('NONCE_KEY',        '-qn1*=h*HIR2J=8Zu^n<mB:W3r=9hzE};Y/_,Q]!;h0#!a4(fY1tEaH=]udW.[hM');
define('AUTH_SALT',        '_iO:55RBTWHJP1-+(|hy8^AZGw.!)[HiwI&A_snyeNXcr^*Z`syQ1k13j8xB>+ze');
define('SECURE_AUTH_SALT', 'l>4eLM2b6ZlDRASdycgc]b%~fk-sMV]8aqhGcAfadh@$p|57[xi&@-?,K[m:`E8q');
define('LOGGED_IN_SALT',   '=X0+ic.z:LN+<5nBRvC_}MP6 LKB_HYAzf}$edHnIG!/<!{1CA-AzX9u|&,0J :2');
define('NONCE_SALT',       '7pMx./joK*3[2rU<_cM5c4iXGE;5l$HjBPcvw}ue3PN61S^-MO@jvD_+c_yze5M=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
