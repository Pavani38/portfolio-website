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
define( 'DB_NAME', 'portfolio-website-using-wordpress_db' );

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
define( 'AUTH_KEY',         '4Ak8~#rBd;&3)!Z[jueKWy;n}6_JMnF.kMJl}b@J:SBm+CyPG4$~|u]BNykGUyNz' );
define( 'SECURE_AUTH_KEY',  '<Jp^NG%`s`js(Em-SpQJ?#KDNJ|b(/EFA2RMG[P+-BB_TE[Or0A-}&:q6.|,`VI]' );
define( 'LOGGED_IN_KEY',    'Mw^<2^7O1f@NXVDNS7I3VzjQO]SChM>1BJ8@Q9=ew)bi)p%[xP#usjT=~.@/=l|Q' );
define( 'NONCE_KEY',        '*NEPArN*9 gq@*o6hqu^WHi%>PxZzG#uHZnPV8:bV>7EH`tRxc;LXu$VU-]);uik' );
define( 'AUTH_SALT',        'j2-*w1^{ ]N*!RMqshBJJA42|0l+AJ~A3<IWNV1GyTvrgyZUot;oD I3{QBOZC>|' );
define( 'SECURE_AUTH_SALT', 'M~GvyI=(qC$:JzmHjeMe.@FPYp7#;X8M%w;@<-%/-B/rc~bu,?>ak+9}Z_Roi).j' );
define( 'LOGGED_IN_SALT',   'f*Euu>?-dsNC4wSt {BJw]?bgN~bYBkzg{#n*vtxu2#X>1IvpWHS|85u;GCEQ$c3' );
define( 'NONCE_SALT',       'X,okR{mR@fEHb rCJPk?}8;56;Oq]17/?K}!Tz9Q`2(IiuG6;D<RjoX@vK*I:OdJ' );

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
