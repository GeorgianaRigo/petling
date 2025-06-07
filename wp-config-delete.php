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
define( 'DB_NAME', 'petling' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8_general_ci' );

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
define( 'AUTH_KEY',         'Hk@KR4?=Rcy2Zc&]N>h=DIno7//=cRn!. ^f|l(pDc.0_*lc8)SYxT&|Gj%!t-.O' );
define( 'SECURE_AUTH_KEY',  'kBi8>E~.i.lb<B/##YrS+*!( Ny$eWzaBhD]N5 <>3T%f91jNP@*,J:0O_)<e4 /' );
define( 'LOGGED_IN_KEY',    '@**mS8,bcOdnaS#Eo kz(R<%D*)+=<RfksXH0MS6hj,u7^t[_,%ZywB+esxGlgH2' );
define( 'NONCE_KEY',        '&W^1hxr`)Y>9){:5RU&R,K;:}8h[Q3F:JPie#~Q9Lq@]Ja_/DmN3#I`Z*`7{*8z~' );
define( 'AUTH_SALT',        'gu3:$1eg5p:t^[8UxNXTql&Qr7,7qu] >tSZH$3WPz>kY)XRD<=Lr%1CCg#6Y(BU' );
define( 'SECURE_AUTH_SALT', 'v$0r>9U$L2j;XV1=^Y:,XAu$ f4PV+yJ]k[#mD@J]ylwJfF/fN)YhNr%G>g5 [ [' );
define( 'LOGGED_IN_SALT',   'E<KgE2~}iM-s!]k&z(|g`7=>d?qu|K^|h!cZa0.|H]_gw.(`_nH+bSPO1apY/4|h' );
define( 'NONCE_SALT',       '>ePnVgaQ;2DCYm@#/B*|7Pjai{1`?o}#:*z!<N KnEJJ?^KQNV_>*f$Hzi~UCplO' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
