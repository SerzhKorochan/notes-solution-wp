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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\notes-solution\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'notes_solution' );

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
define( 'AUTH_KEY',         '4F;A-,)Oxh{)v0W&S0]-lY7=Ef+!DG%YrK`wVc2n@WRrupc9W8mJ0%/t)LNuDDlV' );
define( 'SECURE_AUTH_KEY',  '96}xP+12:N?=f(>A-});Te^_e-(,OHgV`ZLDoe%wZ#X2n&|)XCMx{/fnX<.KaI>(' );
define( 'LOGGED_IN_KEY',    'r*whavxnZg[#(Di-}r@/l.sqHnQuM.XNrW! [!)t38!M0uIlK)qR5Ge}^y,h4/Eo' );
define( 'NONCE_KEY',        'Jn[iXD;70k;GgC/u7u4(Ds3ATd,h9wp72{hU2*w4sTck~#lKCa#jDc4[j:B@}t4Q' );
define( 'AUTH_SALT',        'Xj_O;uf/33&9Z(dZ(Zvu&KF5/iDw=5e00@KGnsq?9E,V9fi5Pb.:[Pb^se:35;J_' );
define( 'SECURE_AUTH_SALT', 'BJsbaB ]0KCMyb9y.% 3wfcv7$7v(HA( sb!VMR)_&~=uh0ByAA5o2FO&^/(.}h1' );
define( 'LOGGED_IN_SALT',   'MLL8pTft[o6IEZ%~/8PUGv~9_/QiJ~T$izpR-/Gv$.z5I8bTS~U6b~5!n}>ySwL/' );
define( 'NONCE_SALT',       'Fv/M0*UGNiiy^V;9Y~Z,Rj8$pdwt)SkEvz,9rAd^k<<O.$SbhUavoxOz;5po&:@J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ns_';

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

