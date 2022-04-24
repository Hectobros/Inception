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
define( 'DB_PASSWORD', '$PASSWORDDB' );

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
define( 'AUTH_KEY',         ';0yP@!vO.v2P0CusP|z-pGejmdvel3cf>P=Ix38$N^MKmZ>5>L/<gVOzabC_{YGE' );
define( 'SECURE_AUTH_KEY',  '_v{cRk!3mOqCkuFY/qQplxBMQ)~a`=[~uCBs]XG5Xok-/G~x[W7v#!FZ;|VwV2?f' );
define( 'LOGGED_IN_KEY',    'cnJ@/P6I9F$@-lgZFZ F2yz^ ({BMK->|kUy$sx_VGH>_GENaZ+I.{f5@ITNk%:~' );
define( 'NONCE_KEY',        'y@A9,+MI;^M8{3 0!)wF@ef*grqL _(ic,3Lc{;PnG]O`xqyON)-j_z@?DVBeI)E' );
define( 'AUTH_SALT',        'X{yv|1u@S-T`.qE)U};oiOM)rqb8deqpw/8%,#X8Y%lqJa[t;wNYvSGn~hgg4>Kp' );
define( 'SECURE_AUTH_SALT', '(pW-9>wne)DlKVv2SX V,+LE|-jg@~Eq3YnOC:5O*jFLCND7=PK{oU@[v(jh}V4s' );
define( 'LOGGED_IN_SALT',   'o7#xW5,7$I|>B{I%UYsI_B9D-.]1g8FL)+j<,k.92Dda6NKf%3,0`0V!jR>th;?o' );
define( 'NONCE_SALT',       '<0/q}=vj[k!E^V8@4TJWAzc {n4h6HQ39~.{X)sMpnp50^HgO-(eTf_/;l3Pcj]Y' );

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

