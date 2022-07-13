<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u188140722_Qo7Hx' );

/** MySQL database username */
define( 'DB_USER', 'u188140722_zuOWO' );

/** MySQL database password */
define( 'DB_PASSWORD', '0PywqtZYQF' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'W/feXMbLwxm;JtHoDMqVenc|+[c%V7&)W}D1`zJQ; A~v2bC46>ZcG86%(!`jf6g' );
define( 'SECURE_AUTH_KEY',   'R|DITh?NDgK]lifrp7%9FkV %0igo<;*?i9 srd?I;ad=J$9$HZ&?-B?CoZmK@lz' );
define( 'LOGGED_IN_KEY',     '}a7ly:c.(J`pI3=U{1^AJ=Fm%e_eE@</?m3u%&?20%}mldF/n=LpLw|jnyJeQh[(' );
define( 'NONCE_KEY',         'lob9WDExyD;mG4;(P<{.oqnhBW|U]-^@)&S)jnIGZ@$+rbZpIbKH@|y9u*NwlywA' );
define( 'AUTH_SALT',         'ar1hi#MMrp>AWj9E>#fjYmf(`|qf+&BYNQz<-(y}[|TEb#ha{<%OvsD#aB{,~6W2' );
define( 'SECURE_AUTH_SALT',  'a5t;6}h%1_[&8V8NIMJ!A&^dhGI!-.ZL`$=[Yx4,+Z?>Pj*1]W<ZOsR<o$Z%|#q]' );
define( 'LOGGED_IN_SALT',    '5m|R4`Z.FseD]de66^Ub8=Bc-0>d2:* >y#)O3]8+u,kWdna-cDm`QOu?WTp)5/e' );
define( 'NONCE_SALT',        '(E4G+@f#xB5FL>(,?<yT<Nlq-_S9a|sKTh9$c.gp=[_G9b{b3/w&OU(yV- RvPsb' );
define( 'WP_CACHE_KEY_SALT', '}N<uMTszreD!FA4JEGkv:~v}i6`v_)`3&@o&,eauSO7@$!;DsX:rE3TT%}$bF59D' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);