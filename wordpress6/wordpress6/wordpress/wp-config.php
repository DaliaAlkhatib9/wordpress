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
define( 'DB_NAME', 'wpbrief' );

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
define( 'AUTH_KEY',         '&!{M~+_Z|b-ey;3En@`5rXx,F)oRvK:WGKWX)f%B/Y,xbk`K~A2LuhLPSNf2d_tI' );
define( 'SECURE_AUTH_KEY',  'OcczNSjt9N9T::oh,{2h2jYX#%9Mw#x)s<krv|&<1l ?cxVpoqvKy/vTsNzRIBrY' );
define( 'LOGGED_IN_KEY',    ']u?tG>[G>bF]k.bb9)5ssS9SA7,+dUJS~:esa`/|X3jaov9Rr}`&vMY ?Q^+uOK~' );
define( 'NONCE_KEY',        'VFUOJJ1X-Ib%?Rg<pAc9M>A<zSM7%<jbT?{R}}]=GufXuRWYCLU9PL*bGE/f$<yf' );
define( 'AUTH_SALT',        '1n&la6mT)1&pilr6fq#+fQ7F):A832zpsZd;5hZ,dBVTDQ^bnvh%M-x |tc;k!38' );
define( 'SECURE_AUTH_SALT', '0;}9G^{u0c^&+mI}.$[f7|Xj%/q.4I35?!@.soC3<Y$g61`h~RhUr(L1:P]yg2F0' );
define( 'LOGGED_IN_SALT',   'Z|L&7qcK|Ag13j.08HBvI)WlwvM ;IXj*DBi8ss[0d*<;+r*j6$rbuq<qFG3m>-f' );
define( 'NONCE_SALT',       'WPZ{~OKFT!nQ9cY4^[ vM#}`+W0{}n)nb1-z#uJs~(iAajq^eSUGmx&1RoVkhfhg' );

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
