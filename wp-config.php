<?php
define('WP_CACHE', true);

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
define( 'DB_NAME', 'newdatabase' );

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
define( 'AUTH_KEY',         '.H&(g[+wJzr{g,SR|svQ6bRxWNyr[]:6UZe<+DZ-!:/-=^v:Xj>yXMJdREh7Gwr3' );
define( 'SECURE_AUTH_KEY',  'YY)Dp0.([@Ue>_BkhCgN)bGEMUlC]nLf9Lk(9I`*CXJ4GZWsCx]s6{3lx)cCa&rj' );
define( 'LOGGED_IN_KEY',    '~mDZo<)wW<vk`ef:p=3T)j$/0Ex5/>!A.?U*5U+d?(sT.vu2ySm0P.a;sSU;yi]G' );
define( 'NONCE_KEY',        't8k@>o#<M1w8~uv.Hdn:rXnfs#PWSsj7!1P7Aj+v@Y aAe$/ ~O5~[^*XC1YL)zG' );
define( 'AUTH_SALT',        't4qaA*TaXG|7+P976KCZ{0fha;2^q-[w/bSVOJ@M*sZ{ MU w2M]SLF<j=,`mcT`' );
define( 'SECURE_AUTH_SALT', 'MXWn+l86I9)8~9-5y7=_- ]xCB kyK!>^7u///)Uwg9W0h(|y~3`]^Pr<2/qTHNy' );
define( 'LOGGED_IN_SALT',   ';29c,mjaee{^GW$qiaH3lOMHzye&JfM|sh+BLp<<C`G|OtD:=grwNht<)7_sG-4F' );
define( 'NONCE_SALT',       'BtO^*`KHN.kHBQodsVy^ T:>!pmi<!.{-73|l<FCvXC=YU-&$7v_ -<Aa1J+5A.D' );

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
