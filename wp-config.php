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
define( 'DB_NAME', 'ideas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'java' );

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
define( 'AUTH_KEY',         'BHf(PUe15}Z R44`joF12AN6kDso_lN#!da+kPxs_RVws{~Ecv<IkVT|W_dh<D1_' );
define( 'SECURE_AUTH_KEY',  'M{6MG5{Wb-S$~~evKA6-VmXwShoU#<G{Kw?u JgIGBaT;o*]{6op7FKV[/b^+aZ]' );
define( 'LOGGED_IN_KEY',    'x]nVmJC<T4Qebh1,fcCVXL1,=BMazKuJ*Ke.]g);U/AP8f|(mYg.OpAO)#3c^42,' );
define( 'NONCE_KEY',        'em_1}.Sz0D+oyEYHa6~9$csHFkq/1.0O_r.qesXT,  ?=TF:seqW>VIi  m}35K7' );
define( 'AUTH_SALT',        'Da25H)(#=c8JgoS;w&.CcRH6*||vlxvrzHmO5$ReAFl/5zOZjKz2xv${4|Zs(5J^' );
define( 'SECURE_AUTH_SALT', 'odRlkEip>E->FAI0W!LY+p##>d<=^(yodi9OJWe6p;K^s.VXP1=l-`C_m95i2.Eq' );
define( 'LOGGED_IN_SALT',   '1?07DfEuS$Mb9[1o0(3/U|/kLS8,}eP-pPwEC1^wjg+sX+Z`G:(ldae/^k*vU5)N' );
define( 'NONCE_SALT',       'f#1Vv12ea=B+lW!c{bhzSDlJgo8Ru#(WqD0+(.z!DR9KT%Y&_cJ!t3@e[Yd5 1by' );

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
