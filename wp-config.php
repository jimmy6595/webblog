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
define( 'DB_NAME', 'jimmywebdb' );

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
define( 'AUTH_KEY',         ':bhFfFfeG#SBZw<V`I *sx(@8bt,rmm#wg%X)}CH|)hbM{*[(I{9[bDm?CK*^Gww' );
define( 'SECURE_AUTH_KEY',  '+i+!xGxJ3-^{azxegB]ES3@uADaH.H:>wFs cidBJjA(hy1:Z6_F+PcF&Ru*@!3l' );
define( 'LOGGED_IN_KEY',    'c0+snEM%[h!VK@^Fop2D*uo}PQEQXaRBN)G%7m-wgE0_rej>OZh;:/c1rVT=23mo' );
define( 'NONCE_KEY',        'g >Lu4!7Y/@qieoC[^)J^d;a1T~D=qhituMN[sm_vtf!%H7xxPy}m=S4Ae O Y1j' );
define( 'AUTH_SALT',        'q]>sy^9<CKlOIDpOmR[/OOsA]p)4nnnl]nyU!m5vNCi9@>.{;IGu_j>o2b?`PK0U' );
define( 'SECURE_AUTH_SALT', 'Z &l<]!E%d9uaNnaaL^ t}i44 gIXS#CgqJF{*KhT,Xiu1:3e=S.jnsgrSsa{2L=' );
define( 'LOGGED_IN_SALT',   'GzfrA>b.}3u!zeC>-M:FKQYD?P.ycvhvwn_JJGo:G5,6CF^!xZdk2?<%YdUL#,$p' );
define( 'NONCE_SALT',       'T&;envF,7Swo]z;kLl)9Uducw&-<RIm6lzea*KC5{*=poVh(tC#L*SQyT!.dnLjW' );

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
