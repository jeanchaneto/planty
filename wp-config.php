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
define( 'AUTH_KEY',         '< U>Ic;dlBfAy64&jGUj i~MFQn[wB.NG3tVGn^^0oAI+U(JY?&h]e].%=vWRF$`' );
define( 'SECURE_AUTH_KEY',  'd@s_ 31`U(v(Cn+ojZ{uA{R~c2j7b<T]3@g!g$`_k2x?b!<VLWDs>P<2@do,CBr+' );
define( 'LOGGED_IN_KEY',    '61KD%zt%|25N[nb&HDzMU&= W-?]0ONMMy2(j=F>7?OiCYPE#HMEleFyt|~ HW{.' );
define( 'NONCE_KEY',        '&ogQ@6r,0%(`jM`=4r` rZuIa,HgL>]2b&wXMYz)y#Rr@@|:g}8Cx`>f[[Res=lt' );
define( 'AUTH_SALT',        '85#&)r-2ji9NCITCbmvv5s+]RYS?OG$<l|8DhC(U,wEpKH*z2@C bi TJ)}=-yHx' );
define( 'SECURE_AUTH_SALT', 'Z+d`G.e!BL.Rd-3RHZl!]QJSRd{K<F7iRP%I*30{w%G;h]dHCD5=3&7~pEZzk)5>' );
define( 'LOGGED_IN_SALT',   'fn)=L(M}DJBoa3({6)#;[D0SOl{bYv&igmfP`p;OA>_n{_7,-1*+/B+ !nXH=V6J' );
define( 'NONCE_SALT',       '[IFeaI;P?6af9B8P<tbLgX>r5]! Gyk JOEIC&d`5Fh5m={= ]w[86Jy#[ev,jAy' );

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
