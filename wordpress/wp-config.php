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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b_&_hU@T|vwZg3V<%e?+wg?D%Ed?fY3}_pskldMu^{k%U0z,[Du/ODb:#(D(WN:Y' );
define( 'SECURE_AUTH_KEY',  '*sZ+K*^wnWc<a[`2cZ4gCS>~~z7jgNcJcWs$>umwBivO m%z.>GD?M`/_pTQ5=&*' );
define( 'LOGGED_IN_KEY',    ',1 z.)[|13NDl3Tc59JKHX**G_uKq_k*fi hKS$` /=`WUZ~{}$pQK?~VJT0`w}T' );
define( 'NONCE_KEY',        'ar.zwqMYOui0T{Hx]d14?U7&xeHUNp_v&hPgPqHk$O8M7%?w8|xKR4EH%4z4Lt*X' );
define( 'AUTH_SALT',        'K2(l6x}l}]2eA%uJV2G)PlzkSPv;^NMlW^(e+PeSHC3}r%@W7w19RpzPL]|Equ@y' );
define( 'SECURE_AUTH_SALT', '@JS*N`B..Pa3[v{{fS6mGBDeg)`9US-m,z:1-0FR9b@?@OKV9ROU4q+g~xBj^giH' );
define( 'LOGGED_IN_SALT',   '(W|Ty4-hRZ#s-;2nHijboH4|pW0C(j2y~4:0C,*.6hX0qpQbpV)0xZ{c*_(pg`L3' );
define( 'NONCE_SALT',       'hlQjV#B7e>{;u ]$83#MxkgJu`uJe[@MoPbq^WyQ:~.;=R%v{oK*NE_fyt_&l$8a' );

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
