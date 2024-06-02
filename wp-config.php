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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-carvilla' );

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
define( 'AUTH_KEY',         '.r0a?qL@e&tw!S<mwK:eA1o6LdELK6[ST>$a(Y]8mMBg.fZ5-XEX6vUR$K0.&c<A' );
define( 'SECURE_AUTH_KEY',  'C.%B9v;ScIK5TP{sMtZ%6MC!D[Ir0zI(@paM+*B&B^|9*,@tNSs@2)<dKEmwLQ`?' );
define( 'LOGGED_IN_KEY',    'V^m{}R.;nR?C6Kq7(<>=MEcn~^20L/:*;@W{{h,+j~<z5d<`TI[Mj0J:pH }gs2H' );
define( 'NONCE_KEY',        '-@tq_.KUmt1}x,~T#vCG.% #(9]Wz;ATsSxb,I+:h{p,W}.]{UBKsKE)e8&0%:Rt' );
define( 'AUTH_SALT',        't*T;=m#B`UH7Sdr=.8ip.YGq20DK%mF&-b((sp] l)Y8?$k_6VwFj; oE55e%M6p' );
define( 'SECURE_AUTH_SALT', '2o:&C1a|/~NvM93>b{DJ0^=NhiM8f#k3CQ)l`q3u3~E6)W0iJJRv|` DzIk{6v{@' );
define( 'LOGGED_IN_SALT',   'o%)[S&a~Mj`|*Q6238o#Z4EG+gea)~_`  2sj:/=s?>}:=~ZspUN]/@3l<ST)rf0' );
define( 'NONCE_SALT',       ':!>)}/@&RM7;w9PQT@_Ly!4[-3r/{lvJSWgUFpVE=3R6~0R1X1L,k(%HtN}b!B%x' );

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
