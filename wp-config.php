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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'customtheme' );

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
define( 'AUTH_KEY',         '2S&J$Eg-gq|k>&5k*adw%Mxy>l&%K*tW=m$kIMF%m3UfN`k)7uU!D:EK &M1 _[r' );
define( 'SECURE_AUTH_KEY',  'Z_~.8[1`s@GqrCu$B<C}gM1x06@9bCay2hrOq@,.Uq){dH|aP~(d#zsu0Mv7<ib4' );
define( 'LOGGED_IN_KEY',    'b*GQ>9XHgNgW$[YRn<KJpqhR:6|${MZlW}HIt]`C1e,0i#>Z[7zwU9hWRz;zX!-n' );
define( 'NONCE_KEY',        ':A-Rjbo-ueGl~zU[P wBBT];XmC-^&vK+No;8R#wn283&#3ukLG5;[yf(jk/W-<a' );
define( 'AUTH_SALT',        '?+aX/] $1+!<A7@x4MV,+>z}9Gyu*eG:#/T/t9matR9aIeqQ0D17])R4Oj}y[?qY' );
define( 'SECURE_AUTH_SALT', 'H8!r,x4=-AZ3C!/]r49Kx^CxbU||,bV=]bI*!AfT<D9{#ReZ-M*^^O$qE9FT`+2?' );
define( 'LOGGED_IN_SALT',   'B-G{Q5ZK%DYO@X!k0?P>b-E9x1iI!scn3Syo|qOd<0aZWI%BPwJyGCyYVwAi~  *' );
define( 'NONCE_SALT',       'wi>R,s83t4^Mh K$2<qyySh:FkLDC=*@VMW8D1~h,I1>RU><O%8PAdQ%:,G 4[sX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
