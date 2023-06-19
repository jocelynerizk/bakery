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
define( 'DB_NAME', 'bakery' );

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
define( 'AUTH_KEY',         'G/o]w>2BSa9ng3]iAnCb)`or*mNZ( XME~{mz]OQukfh]yc=%oUys[2ce4TrE.rg' );
define( 'SECURE_AUTH_KEY',  'fmK_v#84H,y--9g*zeW4Ey)F} }jk[d0#iNPxjeyyLN|TIAU.2=`}r,<o#OP]3Z(' );
define( 'LOGGED_IN_KEY',    'u;mCbAAS%PLQF<V?9w;ZFT-5FzN;y&va#>$8RoLH:-<9Jk3<Yw-^u,l,I@Z(_<Nc' );
define( 'NONCE_KEY',        '>k)a&slEusDCV,6[Xwv{SW~kVl8]U{hovBNM%uTcpOExMVr6%v2+)t[^9g~7[,$X' );
define( 'AUTH_SALT',        '9t^l?ac-^ND_9ijl:#F+=DK4qGaLPKDf:}@FGlg,C,PxldKXBSkYIZL9OII;H]=O' );
define( 'SECURE_AUTH_SALT', ',W:l2V/xT?s-vO=!F5}<EsP,dihj@ 7_8vFhm)=Y:5W!.e#*2~c=1ZuF#Nt}$dg=' );
define( 'LOGGED_IN_SALT',   '22INk0g-OLW?Yn`n8?6]d-XmU*J<[ZRqg# S%8f?=)}i_$x_%*{FU*;:+{$xU!R ' );
define( 'NONCE_SALT',       'phBXlIrhk95[xn`=,e8&9xue2oh:x9(q *zLMV{6|xc~U-k7KR({[Iz[fj!tF&K~' );

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
