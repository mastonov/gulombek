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
define( 'DB_NAME', 'amalitoyone' );

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
define( 'AUTH_KEY',         's=mED!1vB5[v+~SHk/l]q8kG Yr;4Hxlii;33wjgxNFL%h2qr#%(1#8>J3!dxs$5' );
define( 'SECURE_AUTH_KEY',  'gitAM0P*@1`yDx/KZ3^7%f,HgEuj#sh30viE|c7OzY1P;LkN3RbJg(0~:QxAf1L3' );
define( 'LOGGED_IN_KEY',    '^i[%JEo.C3ALTL%]rh ^qF+I@`=sU{gl[%FY:J/-XmkStI%&R&%hXzvO5L?3d~@1' );
define( 'NONCE_KEY',        'TVa|JDAtnNvC6yrGT]0#S;_/4H6KT=4ABU}oydN5slm|mw{Ljf;<C(BrDaTxR:6J' );
define( 'AUTH_SALT',        'we[cH<]]ag^U([p9`*$XxZaB4>x,g^_L{pyP<Y8*k>.;iMK{LLz|NGA=C.g7k-#L' );
define( 'SECURE_AUTH_SALT', 'z*jv[OU*6`Kj]4 JLM_;SB]//P>*2&Az^VVYs.h=NF%9u;?O!OYP4780d}a#UTV*' );
define( 'LOGGED_IN_SALT',   'v%VkbXL*U6}XFvm&V|X9`gTIZf?_Y0/H$vTui$ 9h`7pu!lDO% :M]|/7sKl>{~y' );
define( 'NONCE_SALT',       '4K~+Xs}&.%?]rKSY4cPI}1n/~a4!-S><`+fre%9z4c<%cx.X!]9gwW,6zq, oz7u' );

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
