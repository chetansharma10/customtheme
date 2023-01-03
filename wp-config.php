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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'customtheme' );

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
define( 'AUTH_KEY',         '*`=wS~>]!3cm6i~5lt,R$#&{PXS.3,*`A}gJ6nwKqFMh-AY8$v*)o9M49Ql+X#*>' );
define( 'SECURE_AUTH_KEY',  'Ive<0HunCkoa^,x`v!eN1nBOB|tu)=}?BAr{0uf7-01>dXRQ:4G{2LC&4Dmh76TM' );
define( 'LOGGED_IN_KEY',    'OmXM&:TVeHQub4Xo+PfB@az0xYAsfZ#`0Ecp@G=N(]M/ngL>FCK`,Q^kfad#IdZ9' );
define( 'NONCE_KEY',        'TY]Ojo]zw*T@73T;/pgl?Y-!Su>`8 6p@+t.<U_`RBeDX?*@aX_{VL/Pr#f`^O)I' );
define( 'AUTH_SALT',        '[_Er.#pE|OfGz7?k`4xqxUDdp2fv,27,3:x=~DK$7Y^jl%RrAdb%^ S qZVUV`(I' );
define( 'SECURE_AUTH_SALT', 'N%~X1<IvoMy,BfC5:ti%X;bi 3<:h(Ee]mO,r9Uefg$y(p-(y<#{XcN_L~y`N}I8' );
define( 'LOGGED_IN_SALT',   'R9OmuPbL-%Q49Bmpyt-lZUdSzv4<]2{li5$uUIXLpmW4ABjxjbh}A*7^h~Ir>k4k' );
define( 'NONCE_SALT',       'T@6NxZW}(PQNYZg{vYTl>CtjC|u_<a%ER<Y4>NEBQa}:Pm!9bT~-2W#;jA{L56-T' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
