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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cmsproject' );

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
define( 'AUTH_KEY',         '[V$_`JGS4Aed04?--iZ]|kNIiq{PJ{fheW;-Hj[J RYAk(0hOdQ0OhCmpgg3[Jx}' );
define( 'SECURE_AUTH_KEY',  'FP(}0q(E/AP7Sl>JK#e5WGzG *A9e[W>^Gy1{O,>_{)rfcqO9)F}Dvrbj?V[!hk;' );
define( 'LOGGED_IN_KEY',    'F!NfFo?r[a^-,CnU#r:jqK=+iUfMfW9XlYYyD9<Jb&Rwk(`TNf{a3;J-t&y*AQ<y' );
define( 'NONCE_KEY',        'S :l1T2XM,y]qd ZeNf}M.PC1D7fxyg4;u<}l4i1Lof``*=2`Tt<5CRcsWviC%dP' );
define( 'AUTH_SALT',        'N_FQ:?rHp(38;)/2s9?@+]%#i6.XKo_um#c[vi0+2$2%o^b*NU]k *ErE.f?s|p-' );
define( 'SECURE_AUTH_SALT', 'I7@<[6l;=^ulzaW)iKIwR<}QBQ]Tq<.#k,j$o.Iv8Ns!^EpvpsG#V}7-nHm])9{0' );
define( 'LOGGED_IN_SALT',   'W~0bV/$Ifl2yz4uCLJ:nJSO#ki3^MkGNCE^U_tqk%=9C^jm_7x3jTCP)%AS_9liN' );
define( 'NONCE_SALT',       'y,v/I|BrZD| (auYR?k&{*^ar9eu%L]H0vL@Wf7Xz!K/J>v^m*hfF&BACOa]BAKZ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

