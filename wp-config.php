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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '#AI<`#W +Zi*3mQHMRxN$SEWV 7hq=sDwLD{bY6.+pgz$[Vq?=c?t%Tldk@pi/}/' );
define( 'SECURE_AUTH_KEY',  'k{ vu*>nBfX#BCUR~NWYjPh?58_!3F-7o>SaB5K^J5P,]XGSHK{TL2djUn%@;9vg' );
define( 'LOGGED_IN_KEY',    'G9<Pwvs(%n-Rv;9J+PWJYHq(c,pX4jff+`d)uH2?TtR}&aW4V@t){N!N&#{j.66L' );
define( 'NONCE_KEY',        'q]<<5tiC(x[`Wgp- n<Gwy|2+Ot7kL9 +#wxfXKG1;J!=m8sS{M~uN${1Ck( .eD' );
define( 'AUTH_SALT',        '`=P1xyrPdI8mnDAtj <i.WOAi_*(9ii~*9BfW)zkmUPBycM|[!>?O vk=B(;_B9k' );
define( 'SECURE_AUTH_SALT', '_zI<az}[Y!]H~`@>^(|{A#M68B~A6r]2,|yXj6M_0<lEi(V[KXGJxcqnP`~5bVc|' );
define( 'LOGGED_IN_SALT',   'V.fz#1tKsqgI#vj+bg8{sBu:,GrA(L7Ex,GP(YevI*Fl3a8)w_VWGkPN;W$SF/NM' );
define( 'NONCE_SALT',       'ys,7gu`h<SKHxBo7+Ih$u:rO7!b10aIP9dZbbG+;}d.gVr%V8.;ZB](NC)!hDRNo' );

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
