<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', '2020-tim' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D9aT)%*{WN$QhGo@}sHeQStPmdFNOUp,]foFfZ#N,_1&pm%cdBxT&!*+X30<Y*CN' );
define( 'SECURE_AUTH_KEY',  ';5~}F8WxFAr(%b[OFo)L7ns6$c0i%Xc7} Qstsx6we({ng+lt[(WBb=.hT=AB0i ' );
define( 'LOGGED_IN_KEY',    'yJDVk%/AW4dE$v;zC3.s~lkS|&B@+_&dcl<DA3z^2*v#GC8>2<xwk=bxr(Tc{|2h' );
define( 'NONCE_KEY',        'D^V!)4?B##%j-;I>(h.7#W]`Xuk1A$9X!B70m8^g^U%.}N6i#QXdH=@3%|3z?kE6' );
define( 'AUTH_SALT',        'li&[w8dx;VnTOcpxVFDDpZ5dGtEmt8*P1A&FMVLP%|<PTdU0]i=(%D-~FUR%cT]K' );
define( 'SECURE_AUTH_SALT', 'VLB?VZIYu/n/nJ2#+)0g^INnS!1zy%B?&uYV5B4a};}7h5nS[B=?5~mG31P@dXgj' );
define( 'LOGGED_IN_SALT',   ';&sI++$Ti(?pR#6wG9>X$OVJ_@a&</h7{w!_%3ysuVinbZlb ![2QuZ~u]RT, x&' );
define( 'NONCE_SALT',       '8*PZP/o:=/*)*HR)#G>?F&k!T7twl]aB6_>U:,R(@:es4=nY{Hf+/ZUP{5;i*)}d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
