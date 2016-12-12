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
define('DB_NAME', 'flexmag');

/** MySQL database username */
define('DB_USER', 'anthoang');

/** MySQL database password */
define('DB_PASSWORD', 'ah13171510');

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
define('AUTH_KEY',         'wzRpegiIw=9hWUC}4q@clcsSC@9z<R2fB6dMk$v`3n7BG@:1x?2gX!rJq5GI5FE-');
define('SECURE_AUTH_KEY',  'I0iU%(j[hBl8W[DaU])kx2G[u-,Qs6eUh]G$l[cQ5bM3n+}:!wbX;#+U_kf;,%/k');
define('LOGGED_IN_KEY',    '#c=qCjwT=T~zo>ol[j[s6LUUq_9kh#)dA!.q{kZ&+|@_T_j9c`_zn/jnTMF!@QgP');
define('NONCE_KEY',        'U&>Abtg2_+ j@*f74|Z>m<I*FQuD,| g+G&f(8U<sD)Y|!#C&h8h=B-ICS,]g3}=');
define('AUTH_SALT',        '66x<DJxy/>2U7j@lD|amE EX( ,U5+rolm?M) C/|AD`~gRpxnBJ)GX(ZO=D+n;K');
define('SECURE_AUTH_SALT', '!hJmb&Oi;F<S[Mh|9F$SE.*! 7s.vrTam{{P7&scPO5EW&f}uUF,UDpba(?N^vqv');
define('LOGGED_IN_SALT',   'XOcf?NIRb>wc%_)THp5{.)swt23U(d6Fsn1-<TKO=FIhQE}Exll.@Y~+bm;IG}VI');
define('NONCE_SALT',       '/>(]0-4a;?3&J:Q Xr;@g=}<c8KCn>uv=A|2rK;kJTvo01Oe,J|iD61XMhI8R/!?');

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
