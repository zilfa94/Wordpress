<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u157457806_MHOit' );

/** Database username */
define( 'DB_USER', 'u157457806_Jgn0K' );

/** Database password */
define( 'DB_PASSWORD', 'BbtHoxoaOn' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y}T>ao!M21u)E H|N,k(!w#apN6dJ^y>FX[f)OGVWdl#e!awd]|pB!6gVVHcZBRV' );
define( 'SECURE_AUTH_KEY',   '!]k&oLGRTeSzuVPB&khX-B;zE+b]qXOyO23vz,(97Ad%W9xsR.^Ir^#BOCEmEh9F' );
define( 'LOGGED_IN_KEY',     't`Dobo98]mYWH {+<)^l_yk6bXX;z3Znd.n+z.IZ((b]3NO#rMk`wi!o1sgu3-iw' );
define( 'NONCE_KEY',         'gAE:k!3jGb4tPR^D6?oU%.e6ab`?Qm6Y<UkA:[7.()E/{Q6XQ>>Pr/YCFnCfvN]i' );
define( 'AUTH_SALT',         'eKr%T{vP>fBK(uNb$b,P{Gg2PxZ5)LSra2#sYUTxFh^Bxle(.bb)} 3I)#n5FWGg' );
define( 'SECURE_AUTH_SALT',  '[mLb?uoRb0_e^a_I(oZQ(LL1&[WC%`d/VrC,Gf>.h5]ZCOz:kp?=r:Rs#LnFKo%k' );
define( 'LOGGED_IN_SALT',    '{.ljQUv>4*ROF1*Bb+x;Gl[xMHy-_3v!GUU9VvklhEheQ>?ulD-~},7~IbvF^DZ@' );
define( 'NONCE_SALT',        '1uX/+V$zC3O6vh`gg;6hJQ7n]@dahP~`2_32FLXhrZ*3f&S;P_Wk`&Rs;g}cfi1q' );
define( 'WP_CACHE_KEY_SALT', '(Rrrdw+HtC/K5Gmb1Vkm:kwf]z[/0!o,-^PrrdM{^)c.wZ,dY+0dTqR,Q.cM}!4h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '7f12bed61e6d28184e6d015d410cc703' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
