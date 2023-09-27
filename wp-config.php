<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cookiesdb' );

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
define( 'AUTH_KEY',         '2@&?(rvIT<`~uAt-f?{D}Hh0;nyun[ZI-G_i>N{&Gyo,we}%g9[2!Cc8P@,u240j' );
define( 'SECURE_AUTH_KEY',  '=W/~-7+GM!Gm5).h!G#2zlB)FI:k)P?#Q5BP7$W7k@Q)9A`dL4!(.<&srC.~Z3Ch' );
define( 'LOGGED_IN_KEY',    '%ljwSA<^c6an&q^<X87Qt!,d@Wo:G:YR5)jqwylQ:04W!.V[mS2I0YuyGsL7!Aq=' );
define( 'NONCE_KEY',        ')s6bUs*FDyTngH.qCKlLVFrIzYU-G~Bz6)N{v<P&a>D<H%R;kJa`6~a2:k!Kw]R&' );
define( 'AUTH_SALT',        '1{C<QMN>;[T=a: X+,>DyCGXr,t(*Q2kH1buD?(SHkzz[G:#pCI(zcTq8O_`&%9^' );
define( 'SECURE_AUTH_SALT', 'nR{Jn{G_YwkKv|t},g,J+0^03MswNdeh,9qM|#Ul <w@_uLx~R,q(]JMAw/2Z[oH' );
define( 'LOGGED_IN_SALT',   'wM@>hMC))+MI#pBF(1R#mt!|Nx>(:WZj%sjU6}KI]?~G lHL3u3Vdp`ue;}QQ~ca' );
define( 'NONCE_SALT',       ':S`PqG?!<E}Ln4!7r_n|aKrS;0bg=Ze2:vfD<vl4rz9VniXt/K&_ISP$l&_qJ`1{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
