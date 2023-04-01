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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'h,GMg/p*!.dFE N%m/LKLt`OZI7~jfc`iT,H|L>UM2yA[`|]EJLH Z-h.Wh}7{VQ' );
define( 'SECURE_AUTH_KEY',  '1A&pHbk?25BqM7k+mq9iv4eMXroqo+<(OR&/d0oE$wJ@8234p0KCb3+8^UuwmN~4' );
define( 'LOGGED_IN_KEY',    'CC0o/y>xW*J4ZUBQ?zK<:JE=rm(?t9xn$NkvA9L(0cln5)#D3Kdt$K1anZc-}Lue' );
define( 'NONCE_KEY',        'ld xiV],ysU$REZ[g%]Fpb}yn|<yhWYqrisBVR$`[!,{N`YU(k>{d&zMWJ;|_76!' );
define( 'AUTH_SALT',        '#{om%gSl?qs)L(-G%Wj&vk06]?8>UgQ3Y}dKn+*DYF xhfpY,>Kn=>cx.l]~ (uI' );
define( 'SECURE_AUTH_SALT', '1zm+$ZS2J~IPLQKWlK#HO,nLc<Xn-u/Vmz)ZOANz0m;_j~Ox3guHsjjBgnoPG=}L' );
define( 'LOGGED_IN_SALT',   'LA3-2dmAK?D0Qu{Y!S,)qNd}lFAM2Zg]p0lXM1JfiWcn:!Y&?/ywl%r21J fJ:z#' );
define( 'NONCE_SALT',       'D|WmO;Du_OC=h~1B2{wzr+M{Q40:lUrrR(n&TK~zOu)dx{[rv|V}2=[S(uC/dLX_' );

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
