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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jadem-tech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+1>lq:y4*?]nj*6J.$ZXJR8J_cBIMs<Yy!(aOs{:@:64)W~7kD0?@9j0RAR/*S_1' );
define( 'SECURE_AUTH_KEY',  '&QE3%|b`a72X6=)`2bzgbA<4k$]l7_{LNZ#G@3Fm)vk}ZaBOhcz Aa>C(ZqF$*LV' );
define( 'LOGGED_IN_KEY',    'Ij|qYmGrbH<?knMh^N42!PuyGXtBR8dlPE SbY)#DdJDKOLa|B^{7pu%3>|Js$7$' );
define( 'NONCE_KEY',        'L A#Z:8&+K>yAvRiAE5!td_KF`/Ee|Y/Zl}=}b-@A82m^^bU)z=9,/{:]wq.Xb#y' );
define( 'AUTH_SALT',        'og/K-eD{ygW~98MV~vScD,-&ag/!^_!^(rz~0ue[}SbkL]SG}^c|C$7R761ey!hp' );
define( 'SECURE_AUTH_SALT', 'QFI]bw(l@sl{S(W77O98YX!~.(fk 6:M3*7-ObGyX9Gn2^(M3UT6Yb +g?L)[Qz2' );
define( 'LOGGED_IN_SALT',   'mriS[9WZ{A c|6J*ilQM~l +4-0R,t(Td^B+7^Tpf,a**o#HP;..1Jl}#um^bl7|' );
define( 'NONCE_SALT',       '#C ?b4D@Ao`DO/odUiGM/~+q7Apj._18P$bL>q&gXKSONOqy;3.)<dm1UlR2+*VV' );

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
