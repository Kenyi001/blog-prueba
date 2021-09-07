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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'm3ap`~6NH,gaVNwO)*.V@POz|pixPeTO|a(_an!Y5^muTl_6_?:>jhH!)hqnSF|x' );
define( 'SECURE_AUTH_KEY',  '~13:-[ScCBF|fX3PP8jXYm?<1$7+]GS  F$RbMNM<wrFeDy6BNLq5lHY%6+_>7(|' );
define( 'LOGGED_IN_KEY',    '=3#{m2)v{@.hl^+mvuh+b:j!yZ}U:vz<X?L;qly Ze2i~3 edj0U?}1$,[3+|?lT' );
define( 'NONCE_KEY',        '2a.=n|@XbCS5u`zFDVY-0hP$_i{{4kr&RF1wfA2sdf#Xm=Iwn=#79JmYPSyU(2!9' );
define( 'AUTH_SALT',        'DME`s058P{8FveL,wkXW%Ys.CqhpWVP*dd8VI_&ok220eZYJLJD++^?0-?=u2jGW' );
define( 'SECURE_AUTH_SALT', '[~e;aXy~)Fw6@}?s xC})im#t{5BbIjXb-GU}3/e8GfcE8rzLt:n/sIws/!H1QOk' );
define( 'LOGGED_IN_SALT',   '$|86;,o|ey>$/&E}#-J)FNjX;xZ#ML|`$j>_i;C<*eJA1>ZL9; {q%d7fe}BZ(ob' );
define( 'NONCE_SALT',       'tswN=&9n<]N^z>2o[S]z,_:D0gB^e>w/zlKB YwyCE@H%:$g-%khj O}m(dxR|Ie' );

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
