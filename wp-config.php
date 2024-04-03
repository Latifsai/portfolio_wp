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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpres_db' );

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
define( 'AUTH_KEY',         'dIFcAi/yDSFRv>j&W`OxgHr7|lyc2x2KwVo+b)I8dBEpD3ZR_QX}{Zn 4R8aDT;C' );
define( 'SECURE_AUTH_KEY',  '6~g88&D]9a[}<;J}bf~DR7A/+.d?b.hYl_xaFR+aa:2pY1^bK|JW9T4%!S]w52TX' );
define( 'LOGGED_IN_KEY',    'G Xjv{Rg@*!sBEcICa0WA?%GqBmcg=aKu)m[H*D6%+ mt]WOzq`@?3$1a]0n&$&#' );
define( 'NONCE_KEY',        'lmvf8%92X/Aw6530J6gtiChMirScF@a=_C_s[vx*g]a%@~i<GIz)`jk%0lnQp3O ' );
define( 'AUTH_SALT',        'iQO1oK&BBxf5$n=wlVZHD$?9aU6w?1<)15NiKNw/m]xhb_8*Dodfi&MH[lH5@ U~' );
define( 'SECURE_AUTH_SALT', 'tgK!{4^51p.bEr?T]4:s 4.7Au/]2oqm]8;*Fm)ANRZ>Gi1|${?/3fA%lsmY?DLO' );
define( 'LOGGED_IN_SALT',   ';!U2ZrCd^]kDeY~3r&@.By^<U&EgNxqOD*r5t.Nc>~xZVtJ$ ,.z/y>n#b_]JmLX' );
define( 'NONCE_SALT',       'K%W`:S=mVW8Ra]o._SC7cSaZFl,qCGo%%QlcM6i8O!emEwU(ZWhfUlL+C]NS0d$f' );

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
