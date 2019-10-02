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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wosite' );

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
define( 'AUTH_KEY',         'f2^U`:6bJw9?^K5 yGve:;+hUfwnqhrrkxG0P2 S:9Jys-)>_^Ycj~-xqB-en`)i' );
define( 'SECURE_AUTH_KEY',  'oU5sg8i|/U-9[U<JrOhQ&7/j?rh.~gkq0l-@(2~ThnI3SL(!)p`,6eUGB6^G2m<7' );
define( 'LOGGED_IN_KEY',    'NwI19?(E+tSHBQzUcclIW^1`MLi0DlS|OPq1LV(atufO1^@eOm@WR$ 4sV({%Xw8' );
define( 'NONCE_KEY',        'k2nvfk|a(<x%v7Y$|_7VMJly.P1!O=3{!&_~kw=Q*pYKIL[t9k#dY-X&N`/P6&=(' );
define( 'AUTH_SALT',        'BV(N|y1`@@bEQJ.%!&d|a:v(dLs|h/F)W?ytS)<nY_tA$>-t1$Bg~eD8=/NJ]TFB' );
define( 'SECURE_AUTH_SALT', '8Z`_%cx$tK Rb? KBtZln^ER>eg:G({dCDX$JIGljGm%@LDL^:|5)FE<H~12`s/_' );
define( 'LOGGED_IN_SALT',   '1a45rnWF|_;vB}.GRH7[e(@dl,dmZ0vgnqGz1)C_|8z:p<,+2wK[n*&;ySTEJIzA' );
define( 'NONCE_SALT',       'i~rLGK~~R53L^v{<%<HnCl~mxQyo_wpNiV(z2ooygJ$i_|M`Ak!iiB=9%EQD3h+X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'www_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
