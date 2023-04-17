<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'dbonlinesurenow' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'l1jEVn=qA{HDnPM<gto0;R[IL}Cz5o~TsPigI`O;U&E,O%yXZY?3bS4@d}Uc+XxG' );
define( 'SECURE_AUTH_KEY',  'Y.Sc9^-l$b|rB=oJvJ~yFFOuWf5hPCOTQd4!mVK$/pkLvm``r_Iux*>.fUS`U -Q' );
define( 'LOGGED_IN_KEY',    'DzMn2!_XBScnQ|K-SK M]fn-!Wa5DWydff/vQ!@zdJ!K~%KJJz ;)k<WP5w:0!>0' );
define( 'NONCE_KEY',        '[OA82!m07iI~u:GeG(?FJ!oJ%ZO_kpgY_CPNwE5m[SH-]@H7nW2S=4fP~[rwzu[i' );
define( 'AUTH_SALT',        'UdLS:Sf+hO=F(ve|!lHn9?O_~F2n-N[W]#tbZ0=b~|yXH_EB7oE&eX!W!Q+.^F)h' );
define( 'SECURE_AUTH_SALT', 'ekFV1:V@*DUD+a`<BFdF/VGljL`kZ9~QTa,GF/#O~DV6%K-Q3T!Gb&_H$PtOT5q3' );
define( 'LOGGED_IN_SALT',   '$OO93!^X]}.[pgEbzZO9Z.t.f6Xa[Gp(Du~?E^z#%m%d_Ih|c@5:.sb5$D%%(E>x' );
define( 'NONCE_SALT',       'K2D)*:iKOji@O<r_`Qo/^FY&R[ms4JMnqV36/se&wHNw:(+C&EG))Bv_hLSgoQ=2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'osn_';

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
define('WP_MEMORY_LIMIT', '256M');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
