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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'gQwj3qsqF~DzFj^8eYx6f_`^F3k; A9:/%0(qr8@;M6T^SmR|.~$.dxI^3[B9L3x' );
define( 'SECURE_AUTH_KEY',  'fcmAlsf(~LHt}zuN67?YLI,@N|OCxCgr8N<Ur TjH|CY*%kRVz,fr[Eq:d*lG9@V' );
define( 'LOGGED_IN_KEY',    '{6oYq`KdCFLXXW*/P?q+e@$P9iW{E%I;X>p?gt[0,?FJZD7#v1RO3j##)_%^QD9 ' );
define( 'NONCE_KEY',        'qI{}V7X+4JM&U5]B<-*0]%+ZL>h>+OOu(LCp`6=|}mm=*+C|7kkfAvxra[b>4[g@' );
define( 'AUTH_SALT',        'D{.+5qB:Zp$X:PF1*}XM`b3@03fw2f8) V:-/#1M29tqs#>x6F#x}1q2R/Sn2Y6T' );
define( 'SECURE_AUTH_SALT', '.V?/6K 7Ld%-o1#mHf6Unkb;trba?v`oPh>G4<M|8[2okTCNF|GadR9lvV,[J?NO' );
define( 'LOGGED_IN_SALT',   '{uSI[L%ER5~!1$sS7KhXS9M@+Zy;6BG1bR0Egxsk)Em^Ow6~{u0RJ13ny1gO8-k ' );
define( 'NONCE_SALT',       '$DQ.bqA@vpPQj[{$^IOmb2>D}N8C0Tiui{!)yp[J6$O/Q07f(G3hGo`FE|*s4zEn' );

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
