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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'nV(PJW[]yGnIErv-lggb&CG-2YrW{j>PA^%lbF>$1vSgbXNF?a518K}@G>nlTA.~' );
define( 'SECURE_AUTH_KEY',  'ox&yzy<>+;jmsp6U?+`:,G{s.TdH!XwcW^8?~CiIJg&LgcO(ug7bOpqfsj6F0TL{' );
define( 'LOGGED_IN_KEY',    '-v/D1`Mq-4lB[fBWG||0:I>~*`l<xwWEE&8d8S#4;>[uC/Gw}q.APwFPpoqGTc[{' );
define( 'NONCE_KEY',        '/#ggghb5S!@3lT+GRRBk4`8},0!xx.yQzku?u+Zx|#7 #s)=as&A~[&=dtXn+t]I' );
define( 'AUTH_SALT',        'X50:+!H*g#v{8IIW}Sz-}m#EHoUe+cvd_T?[wA}{=qD}f<!##* X*/SK.5IKNUD2' );
define( 'SECURE_AUTH_SALT', 'az%iS}dRHQwG{5Ocow{S3ukz{G.5F>zjBgl>R~nyM0t/*^>vWBQ5Y4P_=;DUkd*(' );
define( 'LOGGED_IN_SALT',   'g^ah/.0PYfRw[n7fX~eL`{vhY4n8l$1uxw.xF2hv2qno,#Hj:h(&Ck]kMVdEY[6o' );
define( 'NONCE_SALT',       '4U!nk bUI;#i4`hx~:m4t`iv{AQO^yQneO,_ta4 CO<=n>5&nK PQ)><5ky8VB40' );

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
