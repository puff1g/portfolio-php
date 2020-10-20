<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'tkeriksen_db' );

/** MySQL database username */
define( 'DB_USER', 'tkeriksen_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'console.log(password)' );

/** MySQL hostname */
define( 'DB_HOST', '134.209.231.83' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ork}hAQ?w@3ML07$)+ot.V|/I5oxCp2;7:r6:gy$)duK2Cbm&urZ/7b~[[CGtuDe' );
define( 'SECURE_AUTH_KEY',  ' >8FfZ&?*Y$!qlWw|?bd1*OjBhL)=4i^xJ(f:6F(FJ8=vGQlu[&`E@cXX>x,qxsX' );
define( 'LOGGED_IN_KEY',    'yYQsPJXI<UH<I*#5Ywg;t2Mb84dgNbw[_V=XOlZ54bPa f^D9=Sflq&lWt*(sE|@' );
define( 'NONCE_KEY',        '/1tu$TYn^[C-`]|>2q=Y<f(:^fmzt`L62k9IsZKtW0(!t9N` Zq{S=*`$N+!Fy]b' );
define( 'AUTH_SALT',        '?|#>aW}2Tgq:n(8Nk~i)aMAA[ =^qx[;xeb+v+=]/j {E<=&-hh+s19oCyOLr;4C' );
define( 'SECURE_AUTH_SALT', 'v@C{M&{z-h##Ep&zm=6!Bg+!6<W:-SS|ZMZL>wJ[~s6}/Qj?QunCW=:?|O|9#RS2' );
define( 'LOGGED_IN_SALT',   ':U}=mOJ-UtP!:nXfe)f-m$~>>I2` H@}Jj!pp2|-yeDJe8b5A.#*/JCv2`i1b5!4' );
define( 'NONCE_SALT',       'Br?dL4{-vX$w*L }LC&3U{e.Kx$q`yVATu9O)T]bw&gwLkLb 2:&^Z-M)7^8x|r0' );
set_time_limit(300);
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptk_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
