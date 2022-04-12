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
define( 'AUTH_KEY',         'A.34<P~;P4.TCCJ|/N;<WftAyrBE0@KKO>UPzE%KbF6fC?lLlOq,.,O0|fWVv-4T' );
define( 'SECURE_AUTH_KEY',  '/TD|ZX}9VR9MPVpiUy*pAF],=VwT.@Y$3#K`PW3P{!S??!B*0fbqiyOXZWuUiMBB' );
define( 'LOGGED_IN_KEY',    'Q~`3NpbQWFWg(;;Kz`g0bA+aN[?JcafDGm]PYq((ri,#`SYuOszEG^amfVg?uV=S' );
define( 'NONCE_KEY',        'V6 wz7tY.MAUL7m%SEI99vJ5K3#o= O))FII,tVlgNwKhh#G:4jTy/1akI9qc%77' );
define( 'AUTH_SALT',        'in**y%e&UhYPS]Hyj!QZmO;W~jPb_K16*GB<F ~qU*7^0@jk{+7P,U*2eKk/DZ&=' );
define( 'SECURE_AUTH_SALT', ']XE^/s;0u7J*Z,qdZ&b30PM^+cr$-9[dd_1cB(|wiuE1b hc%c_j}}*&Ps}p;}Z}' );
define( 'LOGGED_IN_SALT',   '43]I Ny-s7M<`3dMEPp09Mcl7v@%t4IBWH6v3`.L)c!LY,h)HNyWULSJ1gTN5,`^' );
define( 'NONCE_SALT',       '$`o|.^A5CQC.?|C8kSbo41:MF@~/8hKA8<7F2`x}imMR/T/<o{uNug<d<gB0QOY0' );

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
