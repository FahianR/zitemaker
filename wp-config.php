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
define( 'DB_NAME', 'zitemaker_db' );

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
define( 'AUTH_KEY',         '8$h!cDh3.oLk2]&oa06P,tC.s00^>5d[H%_l, u-xcLIm4XH]WXM8Ve,:t<-Vr=,' );
define( 'SECURE_AUTH_KEY',  'i*eYrj/5t?IB>;g3^lJ%B$//Mm.%G&1&c|/QcA81_VWfT>edfxJtK]5{-,#H,3DS' );
define( 'LOGGED_IN_KEY',    'xmYd^X=mU;f[VQ$To$7*JpQ7ocPVSbK@ SZ6(GII~n>hQq]vxtl{R@G+}Ur^WJso' );
define( 'NONCE_KEY',        '}v`KfAd5frs:wU.e/-=y.5l5G4x=Cp|V;hkfMs[0&^<zqVn6.sTQ,kXKvER>20EK' );
define( 'AUTH_SALT',        'l0u,Qo`Q$`pIZ`Mx8PqFR)Cva$}^hA@AvE-[ty^4v:M8,B#^/j7E6w^DJRF*xs.C' );
define( 'SECURE_AUTH_SALT', '.O!jn3W=4}}gW7}Jae@fkcH[U+> [)=~`0$IBkuH/(=^j][x+};jn4Z8sH<V`Jy.' );
define( 'LOGGED_IN_SALT',   'm+A;O[sPR6[3)`MW|`c+Z%F[Mt>t9k&oRA}|GZ@[a({mjOy}F8^Y1&D[yEEwQ4iH' );
define( 'NONCE_SALT',       'NBXKVm O?233WxWjik^ov`E}C+{QSE%o+2]ohbY]=L?Fj[K589QeOow:u-wP] |;' );

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
