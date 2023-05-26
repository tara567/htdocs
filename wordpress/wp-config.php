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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'HZ(MdJ@vV`3WYZF8sr]B+{=4vP^S* mY[VzKoXY^FA[ ,/ARgN(/Ro^;F.-x_zcg' );
define( 'SECURE_AUTH_KEY',  ';6ZtAu~mbTa# Jlyoumq{|,C_IR%_e3R}P20 C0>Loj2STB}GrdU3w$-_LrSCUn{' );
define( 'LOGGED_IN_KEY',    'liK5kW_U3ir9 ^i}s>:zD0i~?B}:3bQS<%wuU4R&[+-Qs=bt*u/A-]Kb~[g%O)kd' );
define( 'NONCE_KEY',        'R*gu*espQD!2<H5NA+JqFK7EZ 2J5^8ACeVEvCvlB<9%-L*m=?WJV rH.(J7(7-~' );
define( 'AUTH_SALT',        'kpR95/vRlzocJu(k*H 2R8e`O:k7a=VTqk!`,r0k{V<Y><MCaYx*:2Lgs6L7I,#%' );
define( 'SECURE_AUTH_SALT', '~UP7]q;r0<et^iT_mv,Ea9y(tv83ZZCT5V|1{HGWws|cM1lLRX[GJkV4qI#k?}F>' );
define( 'LOGGED_IN_SALT',   'mH0$Uf11x_!9`;Z-@K`F3R]vweHr,Wtru>Z)K<2:+PY5~a[;fR%&@k^jbD}^,z 0' );
define( 'NONCE_SALT',       'f0 cit;pE#OX2%WtTA`8W4x^rT6etm*1} VXR^`5~Gm7!eom^0oqQ_|LFsY#*Sb+' );

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
