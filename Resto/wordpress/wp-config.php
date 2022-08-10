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
define( 'DB_NAME', 'resto' );

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
define( 'AUTH_KEY',         '@!Ae/OiLU5<ySy{kf>vif^#9E~Y6x:l_gfJ4d?* :$t4l!U`XaB.0I>>]F)K!EM$' );
define( 'SECURE_AUTH_KEY',  '}+AhUf[5nCfhh!V){vGeS]P~u!GYKKAuqb=>9@Flj[2^V}5#1_3u4)@d*B^@`d2u' );
define( 'LOGGED_IN_KEY',    ' h4sv{XB?Xj~sv5>bQj-J/%1!tq(f;9F3kgqYz^,[7(PGj0azrouf5{J9WCEsd:5' );
define( 'NONCE_KEY',        'B-]ynPh#%vtu~-Dr6d2zaeYot30P(4l7${|$QF&24d6 {Fm@`oD5zQB7;-@8lEa}' );
define( 'AUTH_SALT',        'Qz@wXWw*`9_$.:7trm34h`)B)V|S1uQmR@j;ZYU5.qh<ZUrUCgJ?54,EMmbZA#aG' );
define( 'SECURE_AUTH_SALT', 'd<t)U($^0mf4=o$5Hxyd]T !}!N&(-es{|S~N#)NAI8A2n3pkI/:]/2VA$g8W,Ye' );
define( 'LOGGED_IN_SALT',   'S-.`Rxz]mNYo3C9+:;XkrYSHd(t|*1^lG~,ZF*T6L0i&mvb[6xaR2FwWe#@D@J.(' );
define( 'NONCE_SALT',       'k0 gvST5A(F/u#/;M$9 B1m bHFS<i<n[Q)P*l61@XspyPT;x,REA2#@wKlDY<]c' );

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
