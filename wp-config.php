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
define( 'DB_NAME', 'ringomediatest1' );

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
define( 'AUTH_KEY',         'R3n@YJm?gitO.E>%_)i`0$-}`4=$?5P9-!W1@}d)TeqY!vMz6fQuzJ>AWSBx.{K+' );
define( 'SECURE_AUTH_KEY',  'g`!1Aa3B$X[OA1tq+Y4<Z$M) pvnJYW*o4T #x&[2[IrQc8n5er;cgVA&L?%ue++' );
define( 'LOGGED_IN_KEY',    'jT>6Z4Vo3K)K}e?W7Gx9Ol_l)z 4$k7W5g,b.n,!].kMSb$d3uO@(ksZ?l3@}bg>' );
define( 'NONCE_KEY',        'zng2Upd5;:(D0fWx:/O|u0bdXRw@S_}F0Yw0qP7f,(dRcxn[RfhLRr!mMEdI#^+c' );
define( 'AUTH_SALT',        'InS6ttZh$p;q4DJPponF6kK{ G#v~J=qtBX,;<*hRtU|Z 7]ORq{IyR8-a6,|LQr' );
define( 'SECURE_AUTH_SALT', '.M@J.E[I+#]urF*r5KI97){z-<%Fpj@vh&jI%rz!MAV]^9jX6&R{HZ:sL%RX~-}`' );
define( 'LOGGED_IN_SALT',   '1nmIAau+78$zPq/GqxVp_R`iuXl_+)AeH^.:{Ij )8o5B]M.r*Sav1~ADf*}Af=^' );
define( 'NONCE_SALT',       'LR^B?;9L*v6J=k*SgfP,Wbo6sc}^rXrmeoGI8m!IFkhF/5+!Ph?4:pCKiKub &t/' );

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
