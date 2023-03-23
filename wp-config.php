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
define('FS_METHOD','direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'port' );

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
define( 'AUTH_KEY',         '(JeWa/V@M5o]raoT^y[f`c[XWIbgVCqTSj51kG6#K]~Br:~I }Bo62W5s!C2nflr' );
define( 'SECURE_AUTH_KEY',  'bNO0`1Qa81I89.r*[O9}or4DBJr1~ Kvdr`[~_Y*Eadlz>u37i@~c8_q|I}-W2W2' );
define( 'LOGGED_IN_KEY',    'LbqeSHU#),pFh+uYN:A%QJFPLG9c%~LA*0/l=j%HAYVd/weLW908kNkx` LiT0!x' );
define( 'NONCE_KEY',        'vbd`sQiAH9HcTf>[;)Fbmj@1mYw{Q3n&;>V+/rovmId,5!95?Tzz,|]]lP^Crm=@' );
define( 'AUTH_SALT',        'bE^}B<>n>3~T 4F(,cg<fL+[f`#uUH9IhmYd*oy<}PVd9oO-$;@k,yNn9hkj/6B{' );
define( 'SECURE_AUTH_SALT', '$5be2D<q._rXm:*&}QzFAUp~D|23%/Wb2B+&W{fQdN$aBK_D&+;j](&bcSlqudM+' );
define( 'LOGGED_IN_SALT',   'w2dZ%4DOpgt0^?#:]]/q*q+o;km/rTGAu0b*u?XaEFE.-B9R~/ENA@j:`6s5C{o$' );
define( 'NONCE_SALT',       'f.5>xKsRVr^15!9h_0j$uv[ &J tB|5Q/v:FHD#tJA&+-$gbT+m->=#W}m6d)4q(' );

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
