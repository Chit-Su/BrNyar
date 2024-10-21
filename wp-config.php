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

define('WP_HOME', 'http://18.140.55.128');

define('WP_SITEURL', 'http://18.140.55.128');

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
define('AUTH_KEY',         'AGtG-0HjLh?Da<bxEnv4k}ks4] e~ZZ{hOnrE^+X@*|M/hTLAjl!>,Sd0qAJ(`ZU');
define('SECURE_AUTH_KEY',  'gdcs4T:U^4/54H-]hdx3w$;<7=#|c1HSe2Gd.ac?4H(iAQ|>2`bQi*NdNseHA#&G');
define('LOGGED_IN_KEY',    '<-Xo!1b)a=lH-Wb|8e2UP(<]lN!K_zh8F+Lm:cTYHH(uku3?Yi=_RlF{G,IsFj*k');
define('NONCE_KEY',        '-=jovwl/l?~gIux|sx@=b<+eNgs)_9Y3{*Cnlbi:sr.xp_1cDhJ.2+b/:jL_? !0');
define('AUTH_SALT',        'qpj1K&P0.Tvxmw)/YgjF>r>MgmPr6I=+E7?|a`|[#sL-YFy&Tw(9G<vL~|@?-J8?');
define('SECURE_AUTH_SALT', '8xX8#x)BXNw9_vH~)P`)`mvViJ),b|s|xj3LxF+QSIH 12E v9J_~?qqtb`P1PgX');
define('LOGGED_IN_SALT',   'ZQ,c-kz&~cT{-`Cn(}*?hNZy.E(kFF.#07ni+&o+POkMW:+f0zq7RKYic&$mz?6j');
define('NONCE_SALT',       'tTuy#mMtpxwEL>WX-Cj5V!+:?9VcHl+Cc%XW3*=(rIP{XG@zZ-]GzYl.zN7{+?hg');

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
