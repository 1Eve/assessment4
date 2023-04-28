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
define( 'DB_NAME', 'assessment4' );

/** Database username */
define( 'DB_USER', 'assess' );

/** Database password */
define( 'DB_PASSWORD', 'assess' );

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
define( 'AUTH_KEY',         'c-:`QV?g8~EU1hPcy_VIPD_qE8sc(H;|r!>(gn.z1fmU^8{b7][2cHD9I=_t=qhG' );
define( 'SECURE_AUTH_KEY',  '#@V8NJ|3u{u`U-xS,$~!i`sEx6ipa]qQ%{[M,[pd@Z0H3t+k5s`W}Y+`0 %Wq3YC' );
define( 'LOGGED_IN_KEY',    'jPq~RHrILa?b%/nhq=67A4*&`Cg~|rq>>5;07C[)v;0.y>oMSsEKBwA+1B0a:.%{' );
define( 'NONCE_KEY',        '?:(5dIblh1J%dz{Ob0>eE^X;GNH_S.&?ET*N}Zk[W{kD-kpgZpIegR9Y[`9}`;RK' );
define( 'AUTH_SALT',        ';Yk83P]`2};2~dCM/5:To2;.jJ$2TyQX=]!#9UX>P%OcSxzkOom`|YeDg9G_DGKN' );
define( 'SECURE_AUTH_SALT', 'W76Os<N--W?_NTE|)Q.=og={`^]xiw!C^m^y S/Bd5E%hG3ATEeb!vZ;T].-]E!x' );
define( 'LOGGED_IN_SALT',   'WAlK8ir<B}w8.JW$$rIx*Npr$H^~Fm9Q^X3!Y03cBFW3Bm0v*kzx;rHuvw&M0Q,|' );
define( 'NONCE_SALT',       'LSy{]`5JSPTE=aiaC[ UTyq] S1>fUqzyvVW%$~4f@sv/jd|N9QHaC)iv qw]aS_' );

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
