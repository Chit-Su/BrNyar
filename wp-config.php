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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

define('WP_HOME', 'http://54.169.160.4');

define('WP_SITEURL', 'http://54.169.160.4');

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

define('AUTH_KEY',         'i+-_%~)V%k-;-}n ,}$-S%Vh9SwvCfl-IL5+N+c$XDQP9Mp *]2Vl06!~RGFrx[y');
define('SECURE_AUTH_KEY',  '&RDV+(m-{4@aMfk6?MQ!<X%D9yNN^F]|=b@=/3`6O=moT)I@dvjFn(oNM2GK7-r-');
define('LOGGED_IN_KEY',    'pQl.y6OTW}b|}Z;OV}A]|D0#[)fu%y~5#$}QA3t-$8R/-d:PO5bl{>HjY`T)M0eq');
define('NONCE_KEY',        'M:h1vMv|<3eggb&A.-V]-!i=vqM`Nr-V*uewE+u-N+~`Je0h/`*zpDUG)[X(.L|@');
define('AUTH_SALT',        'mteCY_ti#U 5oNa;}}_zRiF&<iv_}POr?(9gK&GV(__hNB+SLH17+jUs4ooRAP s');
define('SECURE_AUTH_SALT', '/]xC|Je_s/P [Ef9`Hvp4xXK7c Y>[=FH|W||<YTn$F*LHHDeG-ewbm)vtC-KbA%');
define('LOGGED_IN_SALT',   '.suq+M6TgV(VM1ba*5K^+=;5Jb!_|,`Ybrs.t[A50{;{M6#b.JzDA).ez<|S^B|m');
define('NONCE_SALT',       '&{<X=PA?-iU+Pi%LYWH*V8(VXvlY(Ws.!N5!yf}]Y2D4pAbKt9`=kn~ I=dS _?G');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
