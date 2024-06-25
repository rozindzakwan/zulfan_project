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
define( 'DB_NAME', 'project_zulfan' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '172.17.0.1:3306' );

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
define( 'AUTH_KEY',         'Z[0Gwn)mF<ye2Z<O(ncN<,&oI5=tSN)B4&`MmtVg[7;ff?U4I:s]w)XZO=yd![@!' );
define( 'SECURE_AUTH_KEY',  '2ESFAk)~Gl)ho+:#QTiiQva9e}$Ybmidth0vu+$fZd6p*cm]+R>r8pBX;?C(tv8n' );
define( 'LOGGED_IN_KEY',    '#kSqKvZsd,MAXE}I-.:0(V;rHe<5mfMJ-3!e8/jyM?R{m(v{@~P=K$Iw.V2npvol' );
define( 'NONCE_KEY',        'YdBU!%b3Yg+(wT[!snxI#p2mdGymBPe8CgL3qAQ0Osr3F7W:OpS{pVTqn!MN+)X5' );
define( 'AUTH_SALT',        '=yR>k|{$W[Y4Z,9YXfAGNBts Y% C%I)VQ?shXHm*Sr=ET|S&Li#jbr3j mx_XI0' );
define( 'SECURE_AUTH_SALT', '}&>I_}?/.CVtiVbsFNb8ztwePz)lKANqlS#=>d]$fR 6) k5fZpf)u%o niE&lvE' );
define( 'LOGGED_IN_SALT',   'n$sf(Z+PEi/Q$e(+uy.{-Uc|:(k8%B R)PnV5*c3I{(nGs>2I<UK[ZuZXex}/G&q' );
define( 'NONCE_SALT',       'Y) Tk$*_~.5K6^2*x&rZ%,eM[e80O>VnYt`-a[5O]u%,w@sJ%9~qh|5QcBy0jGVM' );

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
