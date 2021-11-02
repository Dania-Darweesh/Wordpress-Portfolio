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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '81a7$WVrEo7MJsqyiB+Ff^Tjt;R{Kp^q&MP#KSq<F;=$,k61#+j&gK]Z]Rd8`DrB' );
define( 'SECURE_AUTH_KEY',  'p#h<b=[p?NBfhGffO4UGB:,8]uX.kKPvVu$(n<3;NSxh8;w d+t?dI+][h%rMA|n' );
define( 'LOGGED_IN_KEY',    'Z9X/ufpR`!jKb/i#G#k[w G<cDrjM>6}-NL($P)CX]+RjzxF*jA JF5z:Z;y^f)-' );
define( 'NONCE_KEY',        'z*&!PFR`v%`OM4^4/E87W1avoE]tDT{?gLI8L>fI-V6HLxFmu0gKH8.L|K>XO)a]' );
define( 'AUTH_SALT',        ')C8~8__=PK8`k!NY`+tST.Oj6aBn?WF!|i;HAd$<Eqs}+w37@b}jrd_/u~hp[F84' );
define( 'SECURE_AUTH_SALT', 'XXNL[/`K)Y@%[MD!Kc|h.?yDYJ.atDC,tMsnn=N9v`6-$JN2[(? 6{<v B1yP5[8' );
define( 'LOGGED_IN_SALT',   'gZ!.De(qM57Pju.XXBPSlf^u)]5lV[ph%}?m*>.{[t*Gzap1zb9-VW2sag6Ce2_}' );
define( 'NONCE_SALT',       '5&Xuc)K3lQD!2~o#~~-(VK8K@X*Ipz+{!18syw37K)iym>&,EvX@bcM0wI`xR8i+' );

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
