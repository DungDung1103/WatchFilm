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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ';V98F?|`^lmbFVOJ6$z~`A#JBytX@^gH>Lk^Bh1u%)!T7JkFyn7~HoaQA__|M8..' );
define( 'SECURE_AUTH_KEY',  '5Fy 6;:nmA2tF38%QN!6FZ6Lef.:=_Qr[q;X$r~*DdOm;Q|fn65DPio6d-W6sGLv' );
define( 'LOGGED_IN_KEY',    '~/SDxyALjNt!HsmXT*@(Tx]`wRbE-~)bSS:~%v98{L_5qsVVSE<N<8 N7_k-0Q1O' );
define( 'NONCE_KEY',        '$%Vv<t1>9-pHD0ho:xY:2|vRo9[?_<pz;vp]-  uZ2p1I$93JD-Er)~&Ww8Xh]&[' );
define( 'AUTH_SALT',        'o&tT/&)WyKP1?-ynE!As2en[tFEzI^zZe(/iq]O;@?P}(bD-$*{<H~fu2@pt?[->' );
define( 'SECURE_AUTH_SALT', '6)Rq~/-?%yMXd]AG:MF:# <d5!(4|#`W%f4z:2KJ<DfVS|1b{{h+qGPtVT2(4WHS' );
define( 'LOGGED_IN_SALT',   'xa{?a=xmpOD,.7F<Rop9-2Efrd;6o(6MpDW~Fybz4%.N&`lQU^ImB#v8xX:pi6 U' );
define( 'NONCE_SALT',       'c{V!6}v;$!E)WCZ9Z`d9>}(mI6V|DQUuw3OVOShn_iYdn/6?M7FI HcP=H4t*rmz' );

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
