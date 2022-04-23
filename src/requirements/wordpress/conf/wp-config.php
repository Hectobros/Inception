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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '34M5,Z`{3hX1HKyx4<P6+T|^r9SW:EK7M5a,/}^,+<ye[wwC#z?M,`cte#V>KjVw' );
define( 'SECURE_AUTH_KEY',  '}8+C[Mij[Ay;V.1B.aP+GGKwKy944,l9M[jW >7F{y-(.|;fkg<]s3!d<{Z]Yw8-' );
define( 'LOGGED_IN_KEY',    '[r^&J6tx&uD=mz?Y{Yw!nq@ QFon_)5O*K5F5KMRAX4^fvAO9`CGUVW$(m^<E!Cq' );
define( 'NONCE_KEY',        '=R9 ]QIAIm]$k~vnXFW;~zB}V<P@+TXOt_L+Tp.bMILX<;/2( WuwheM!><jey1i' );
define( 'AUTH_SALT',        'AA|=YM-znbF7vaU|0PdYpo=;SN-j_p|%8G@HPZ]@JL~oW5.{+sXk<2Kd(,!G4|=.' );
define( 'SECURE_AUTH_SALT', ' O~jt[;Zg>r|yyhTz&VVzm-9RjE?WroYzh1|q,eyZ|sBe{j}T#74Eggw!j*+K4*[' );
define( 'LOGGED_IN_SALT',   'L{a-q)sNh/&[w?fW[>RvQ.#pi`b=[cLFJ#G&T2/;PAhy?oPmWVb``]~/A-%Uf/O?' );
define( 'NONCE_SALT',       'ur$1b$>7b8qbmF-v(TI$u6|,&nx:I}nMX-vDCbw2Vf`9-rE-gYwgvdM=-XCO:d &' );

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
