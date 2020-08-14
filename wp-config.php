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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tropicalknitex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k1)G!Y8CnK`^Wc2tIv~[ !t/jD+QD,(IcFeP{*$Q&1Tk5.#!M*C7j1a!h$CWQ&rG' );
define( 'SECURE_AUTH_KEY',  'NRgE?ifzYiWgU$?h.N?e3bP]Q)<hQ:.wGISrwjGMcV,L<[d{Z$/GbX(nv>r*!aXh' );
define( 'LOGGED_IN_KEY',    'AhVoSkeRgJ60ZM{irR]dZy93:n|`HvP3{tPR$u7qL&^lf1-:rPj)CswQtKor=?({' );
define( 'NONCE_KEY',        '22,=$}7px4HnFo`:#CwOGuW96J88_75z/6d|0iMg2+-IN:cs&!dU&^:~Oy,(E nb' );
define( 'AUTH_SALT',        '}zlI#>Yx*W9KH8JyO~#NPudr(>-Hg.q?{$6qg>7}}2N!^Md/0>b[^@K9NCD(`b]g' );
define( 'SECURE_AUTH_SALT', 'crOCM&T5z@4@9vJv`LqiX1,UdX*R)HXqXmHbUg>sdN{;Z4n]RIjbRxM?/rC@Ai~>' );
define( 'LOGGED_IN_SALT',   '0WccP^s_8wxme2p:0)MD3<d;:dm{:OjDTfbWE{a<*=.}M# TDiWlmOX-@4?=8X _' );
define( 'NONCE_SALT',       'X),&<K&kCMV&F+~W&rp%E:B;22`Vz58wu)AGj{N;Fh]}KDuYG]c/ E>-V/GX7.Fn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
