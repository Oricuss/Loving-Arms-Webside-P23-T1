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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',Il?PW/BqA,Mp)L/et*fDA-7o}i5:?%x|3vV/KwqNsFVw~6YT>/tP4gg5a`aY(*>' );
define( 'SECURE_AUTH_KEY',   ',[Ys)>/[x3itDi0+551/6@=naa%pKKn/C7|N`%?zyU%C{C%Vo $6)X.PE@KuNjvi' );
define( 'LOGGED_IN_KEY',     '.TPe/hV4g|_ZvU?#xKM(#!?e&eZjCc|)6_oJ4IRwL|% kJ_eXYDi%v5qV8dfq`.m' );
define( 'NONCE_KEY',         '{/On+|4B}>f[)=-PjWLG #iXNioL=rk&cN@7  p+FB}l7=-_ftLKJnK_C),l:G4H' );
define( 'AUTH_SALT',         'R(@%34ZTrwzTxeQbqg%0Ql_0ai@2=QY8|*H-yrDx[;<}o+NR!@/0-t@0]gX&>+nZ' );
define( 'SECURE_AUTH_SALT',  'SkC^kbwwWMe1Yr#N0({SLy;C0[oyZ5uzc^xB$P?zMV{HFpC=X*leKFk2dLMsg46G' );
define( 'LOGGED_IN_SALT',    'zN4u2KO)}f`8-_j_2*^}{G?Im[Uacr.&jm:1g(O`9oEqEOf`v6|LE$i;9Ia<1^<e' );
define( 'NONCE_SALT',        '~/lzg~V%v~_cnwpu_m=#<IyG*[oD4P8|b6Kl0E~!*SX$G{JP($:/o-nS51lz=+|2' );
define( 'WP_CACHE_KEY_SALT', 'd??RRelr_X 2<Z=a/rYhGAD?bt5TqGi)$6|fm)4jJf<7*-,pG%b9,}>(rBn,@e&2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
