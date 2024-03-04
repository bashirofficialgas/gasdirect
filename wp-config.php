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
define( 'DB_NAME', 'gasdirect' );

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
define( 'AUTH_KEY',         'VZzV[!mG>(/?(B^B1Zg]ZCll[Y.E[z5QyM~B3TesG6+]bjd7Xa:%H2q:.jwan%?+' );
define( 'SECURE_AUTH_KEY',  'cpuP$p/;A;]!dfM%^!s!]zY+BOakpqN7!qFf7,~8+#aW`4rJ$~M&-u<K-ikl!-rh' );
define( 'LOGGED_IN_KEY',    'h@$]5Sy;I0Iz3sU,* GO!Fi>a<K55Ae<931j)j]BAq=Wp$ rvx,H(J4hn!Ld`XuS' );
define( 'NONCE_KEY',        'G~qY1$kLuIZ6,D>lkpw$Ko@aZ6OD;WJx;){P*iw+ScQ|NrT2ek?i0P=CiM0*pN50' );
define( 'AUTH_SALT',        '~lYKQKA]IPDNsFm!]dk[!>DBB8ufYgIoJ<zBa<5KPgvsY8+~Z<7Z{l@f2mP!@HXI' );
define( 'SECURE_AUTH_SALT', 'Hu<,#=[,0/ZF0Y,^r(d@iJijX-xl-1zY-d<p`oZ#`{aM#0/0Bj~B!|^OrnsbHcl%' );
define( 'LOGGED_IN_SALT',   'O;nz&ak8q4+<wEGrkp(jl!m~<T-.x;]U9-uKD)iD(b2^R2Z54}6=5hTnqyp.L;>6' );
define( 'NONCE_SALT',       'h&LbFaOtT1UH@U->jjV(%^^h@):IpJ!C(JF9=5YYpkhu#B&l%KoaSD]o,<^@MOD7' );

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
