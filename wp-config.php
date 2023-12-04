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
define( 'DB_NAME', 'u1538455_mozaika62' );

/** Database username */
define( 'DB_USER', 'u1538455_default' );

/** Database password */
define( 'DB_PASSWORD', '8eHZIi9Y633RE2pp' );

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
define( 'AUTH_KEY',         'oo0Y%J,+KYu*y)Qe)LBD42P$6.F!Yhd9yTu-K]hn%s$RCO-eFp(gr+NhR^/yuQr<' );
define( 'SECURE_AUTH_KEY',  't~66$,,]>8o)<DZx,VzPjm,A:Is;7O#k=w@D=;)6fDCJ=bmGt,+12(iZdR%8VWF.' );
define( 'LOGGED_IN_KEY',    'ri<m&ntOsT)#DoX%- N`c}|L>)(CRUjP;uZpveMjh61b0%_ENE-TgAE?gG&2>468' );
define( 'NONCE_KEY',        ';6l_:=la J@xsLi+_XpPS%sT[FRI z#T*wRe>|W_HufYGbKaeLna4v[uvy,0&,`_' );
define( 'AUTH_SALT',        '|&1l8cM<DTT5vil|XzPEFM $Y}ix]VEA@1^E?+2TJK?(,$G$TUPhVr-*$-Q;.UHK' );
define( 'SECURE_AUTH_SALT', '}1Nz-)K~UZuXC34tb5jpB_VVd6 :/JP7Vrb%Uk=4>UX#H?zO|Ax7lqTkv9:XN/YQ' );
define( 'LOGGED_IN_SALT',   'nq(N]3)C,JkL,34i6O1^$;$B+upCL`?y6E{8V5~~V->I~j0Z^W}Sx*H!246~0+m~' );
define( 'NONCE_SALT',       '77-qhM[x&>4(&kv_xXaprDl.}{agk7<yw7p=6*LGly;!xTqKIQTj<`1o[`FITE5#' );

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
