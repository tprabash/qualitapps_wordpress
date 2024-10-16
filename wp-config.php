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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cQQ6%ar;)b<R#4$Am1I{}+:RAlWwyE2/Ho.e| ok[P?l~7$468Dkr@|11QuM_i:2' );
define( 'SECURE_AUTH_KEY',  'm?AXD[H-c[,}hmt]o9L/7{X`-5q<3}Op@x;zaRr,p/;3nR[#l _(x*?O69l=FdzQ' );
define( 'LOGGED_IN_KEY',    'TQRG0}TG^1;gA*{DZs6#STF!$64DGlL]@* sqP1x!4#CVvrEBGb>I2^+jX,=DVYM' );
define( 'NONCE_KEY',        'ESb#LD`KQ+C{PW(sGlj1 uPn2Aj=YmtQDHFz9dc??ysHPQATCGs;[R7V]s+L3fFP' );
define( 'AUTH_SALT',        'tu:RwX-EaXWyE_*[0[68pIc n@dsT=;q+ErawB>L$X4INssM_ck~zdB-}D,e(<tc' );
define( 'SECURE_AUTH_SALT', 'OlVs]G.DTNm1|PqJ}9QK|XcbCL~0y*C}@-JcLI{aY/4b4mHwdxC XfV;I59 1f.V' );
define( 'LOGGED_IN_SALT',   '2^hb@3]$Jed8}R*lO{f4GC dDOMSH_k1$eC-HBMgi XUL2g%H,.~S=-PIx>|;YFE' );
define( 'NONCE_SALT',       '8r;^Wb/@fBjf>TG`{=QyBF&n>zcW;AczwTI<G=x.{U31q9pea-@CG}w0!:c|gehf' );

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
