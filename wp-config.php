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
define( 'DB_NAME', 'womez_womez' );

/** MySQL database username */
define( 'DB_USER', 'rajerr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'R@jerr2013' );

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
define( 'AUTH_KEY',         'D-lj5WT8AK0~SO0v>6m5;g}(8vqV7nPR3Z:tTl>ss85sI1E&Z_J65e^+`)}?;nt%' );
define( 'SECURE_AUTH_KEY',  'l40$jUm*f_^g4CQd8W7f(;gjd~&$~u{d(r_*Iri}2lt9({;tXc#aVZZMnO/C]o*F' );
define( 'LOGGED_IN_KEY',    'gf;TLZZ1utjq>3pfMHC2zG5k0_I&c>@;0<fyv?!kIwdS4!i|@^`2RlymT+<>r+5<' );
define( 'NONCE_KEY',        '%GF`-oNKA[cie,Aq2;uU2Q9t^T]whF490m?#BB`/sqNqZrjRlhw2E`0KF]JDyZ&Z' );
define( 'AUTH_SALT',        'rH[z*RdvB?3:j2g,:hia7d_GXN6R00u?Or:S:Lxg92D7-pVbJ7_4Xco[z3#:5iyG' );
define( 'SECURE_AUTH_SALT', ' T.#ZJi]woy.,vpPi@jta%Ez~)Lc+ &MWvj+kqBIMN&TY8& $q}]$m f}N-8(mdA' );
define( 'LOGGED_IN_SALT',   '<=dcl4<)kqCfp0SV]4x`u3We!<bgPgsEf8^3=>SwQ|]|PSsgu>51iUS{NR+75[_M' );
define( 'NONCE_SALT',       'k7y[NtpRALtQ.b(AC0#hASM*Fvr*2l9$|X]D>0JZ&e@gfG^y,JeB`vbB+PV!sF;m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rgb';

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
define ('UPLOADS', 'wp-content / uploads');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
