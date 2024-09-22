<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Imm(.k+2;F.,^ &ee*NXzn~fWrCXgG= NWZ4%tSLR|EL{D=oqpiY[uaPEb,42o8;' );
define( 'SECURE_AUTH_KEY',  'Kh^9+[=do$S~4z=_@{UFNlBzZy+`VAHjsw9%.(cP6;6OKMHJp3nKkq|17yOGK0Nf' );
define( 'LOGGED_IN_KEY',    'WX50R@vOV*tR%zk2b%~89t}zi)*>h@h.CsWlp&9HNq2o{,qk|hqxxu<[m#WKHK6$' );
define( 'NONCE_KEY',        '-Ha@,<x-d6e#2K}F#$]jA#r-12w[76#w$^NbR*Ep?pT1 {={A}m0N?-R]k*,KJS!' );
define( 'AUTH_SALT',        'q.JlaLK (JzNhz[R/!I|@otL:a;fQ+UzLqLSwgH%Y9*g_Kur^?##:1q|q7a_Y7]O' );
define( 'SECURE_AUTH_SALT', '(xZ$,IO,[L|p6>kdE/`pxv*_e&j?ByQJhItD^v=^%32I+}xr$X^#*Ie0G*7F>n&L' );
define( 'LOGGED_IN_SALT',   ':UVa)w8,E5;|EpG-p1Z~t<%0?@GPAj9K}?P]`$3#krLNeXmS2[y IzfcE^8Mc_=Z' );
define( 'NONCE_SALT',       ' 98MJHIQ|*)Ns8U+*P7r*vX)[#s}ao_Z #wdU`iD)H%/3,lFY`0{^2QOHW.kT)Bl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
