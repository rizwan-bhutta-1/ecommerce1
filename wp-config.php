<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'firstone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'n{.n5oy#QJ~PV)_v%~}I3jI@c93dT9r,QQ,#y0{(l3jqR_[EP&[UL}dq*Y%6`d)!' );
define( 'SECURE_AUTH_KEY',  ':@U*d2KD2tT<Mj97/W+b5]2c)AnyV Wbg66#s(s3/:z9ClV ~Zy&V]}^p$SdA_2l' );
define( 'LOGGED_IN_KEY',    '#9jAO^8q`o^| pFsVGwllDyC^1O8cgJEQ6y^z${PWcd7qG=#DAyHuu`$kns=$,[G' );
define( 'NONCE_KEY',        'R5!uCAD2aGi4@RkwnrmB@dI*y(#u62LUq0mzH`B&W6}J9a|.m+DF;cQ4MSubWP>w' );
define( 'AUTH_SALT',        ';lq5?y^L{n9@c}}{!%kRBU[3~3Z@^dSd6fSO`;&P{xK%1+2ZZ:vy,#deOB!b,lAu' );
define( 'SECURE_AUTH_SALT', 'Qrc+abG:|{Pa0k0]&M`HsZ,fnBZg,`+wtS)5-:|R`wnt~q9Gf%=Y}Q2La/?$A?o8' );
define( 'LOGGED_IN_SALT',   'rnh/MyBy+8 8`U$_Cj]6P<zLMBA4j[9n0S;({gPoGyY7K0E&v93|u^GnC%b |hFa' );
define( 'NONCE_SALT',       'uR.pd!=FCF:j82L1IhZB0rH7bDk}>JZq74QQJL^8k)x%zpO1wrpRfcdyc?gQ?i(j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
