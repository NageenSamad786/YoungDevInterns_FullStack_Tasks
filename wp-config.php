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
define( 'DB_NAME', 'SchoolManagementSystem' );

/** Database username */
define( 'DB_USER', 'nageen' );

/** Database password */
define( 'DB_PASSWORD', 'nageen123' );

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
define( 'AUTH_KEY',         ',!y[AM.+P,6%0pSQ8f-S*Ue^w1tCT#j{uB0`Z+-Utwm@N!n|}OVKPG$$5ox5CS&o' );
define( 'SECURE_AUTH_KEY',  'J*PYm;$8urT[Qar$v&O^<>e&Z$9>%VflBGR!>5HjC;7I~8@WHt.U[SVWMs!8)F?t' );
define( 'LOGGED_IN_KEY',    'I^x,AnHtX$W BKZWvmqu7uvq*C~mTG`~*/ZLtqkoE2-42>P@SMjwB;MXNCMvgfm%' );
define( 'NONCE_KEY',        '4PV93x`D*fky*2GqL(1=M)+qOs]&yy8CGSf`%z}kHiTf2P?U-7QT6YIywrUke1>%' );
define( 'AUTH_SALT',        ' 5n]V/.nlBZ8p[LT`N.F!p7VV9qNyN$92,7?cTS!)a62)PURHX2uM;j(>XmX]5p8' );
define( 'SECURE_AUTH_SALT', ',3MXA}u#+`W-Y7.!,*bi;A$E?&pqc>D)VsfDtjdrT>4w[J5*83^KWhVP4+@kIlr>' );
define( 'LOGGED_IN_SALT',   ': Caz:=`7BRO/t^7N2Z}`<M<R~u,09U<?ScnF_A)2K2w4s_=5tk#Db^hZlmW.?BE' );
define( 'NONCE_SALT',       'n:7>NJN791V.NNH,6^zSs&+*b0JjV?6#6XYo77]Q8<R/SbXT`+(`|UPOJ)jbiuz$' );

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
