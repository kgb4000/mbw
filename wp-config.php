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
define('DB_NAME', 'mbweddings');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0sGrk&H83F3U6s[Q|ggHlD-As[U^H^Ws4<eQ8K#$d7,8lDR}XKQ-GT~m9z;/7(Hw');
define('SECURE_AUTH_KEY',  'Xiu48ea5qnY^7HK_mKvOLr3*DUdY)!?+okCt%*3QEar-F=;XS.+5zl%?~3)G.G-E');
define('LOGGED_IN_KEY',    '++(Bnlc+`?QU@WjA?y0<+&&x&S@P9zY6QQ<w-&b*:D8u+g)rm>Gqrq9uo.VLPZ@V');
define('NONCE_KEY',        'Y};958N|HW)SEk~|7KbB}*#)!kN=K|!z1gTKXt{c/K@X3?mUwgmx3?52-9BDy@:9');
define('AUTH_SALT',        'B>!Z|vZ-jfUi}0RGv{P)[S*HCl0:-&5LSU;jz/pr{ZDlnZl.JK](?_}&C[}&;{[r');
define('SECURE_AUTH_SALT', '5&XwNz>V>ZXx@?M+&;}0)<}RssP?U*g+xk]IUl|aruD+vNnIr0!L+}md|,/Mf528');
define('LOGGED_IN_SALT',   '-+2ngG!hEx6>39oeB|oc8FYa0Q(y:5S@^Q7g^^Z^kBPe`.5NS|5p8l4|r|; nhm5');
define('NONCE_SALT',       'D?Cq*G+]z/p(+?}]d(-|2#v.I+d3x%d^Jw-~YEB=T]^)8^ZMEt-2L-`vS(blg|>3');

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
