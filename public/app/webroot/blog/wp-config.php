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
define('DB_NAME', 'mosaic_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         '9^5V*)4#;9XTHZk%K}k_X>=.X&.c+c{J|=2>9/)[CM<WY-UI<I:=1fr->aHQ-jhG');
define('SECURE_AUTH_KEY',  '6@G$6[oNKm(NoC[2b3d#vsY>=PJf8iyij:E.n|>4E7MM](|C4gP<ZB0YysD-7H5v');
define('LOGGED_IN_KEY',    '#1G&DVE$iv?U,[%s?Ma-r;%J 9[>g#M5m01al|HkXJ}<}BXN{o7~z+M?9Ba|?+G?');
define('NONCE_KEY',        '/?%aXrr9p!2P,V1-VjyO_e1sD2*6#VXoYFrA _T5pPtfSV8SsQ~8Gj@zXu:DXwh+');
define('AUTH_SALT',        'ie(mOG.Q~|p-(+w7gdu(zbe%S*KNfryB$&,snkFgfD0?!$Urf{#N3!D2`dhdC{{b');
define('SECURE_AUTH_SALT', 'B[%$AYk{v-txbFgSN[jlL&df$T&Tt~0i}ndIUahP]:& *I3x+?7d.B_T5T(KjNGz');
define('LOGGED_IN_SALT',   ':]d10ce+.^V4&|p3=u;)Hk;aRp[oo%*p^rV`|nWy#Xuwm$ lF^Ssg`Q9:c/o/{8S');
define('NONCE_SALT',       'f7pnpPi7-FeeHO-l.465WhLR^~aJcVWNs?(U+eap2XHufO)Dnu7aMKqnF3a`5rwF');

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
