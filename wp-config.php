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
define('DB_NAME', 'tast/wordpress-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MsK=3S[/xD&~Q?t2YmRP~z~F5vsj8X1?)YBI!.{hR<+-DO9$,B,|/SJH[^WT-%fR');
define('SECURE_AUTH_KEY',  '{Jq=(~nTX2J$r#ucT-_Ax)I8U[V|ncF=19>XYbunuy2$c,=2f?$h4F#em&5#806e');
define('LOGGED_IN_KEY',    'niRua%~(Ya>K,%LK:X_,UE~rU5r4t,0*i14+H9mYmEQ5@ i  2YJ?IZ[EKSLa9Mw');
define('NONCE_KEY',        '72VBu Hq)?@&c!Cxd#w%<Qg@<w^ua;%C8w*%I&hXumodv(1N<PKHHTvKv]>KMdsq');
define('AUTH_SALT',        'esJb<M[`gi2Eg$<A`erN89^5gk9Qng/YkuG=<}qT~_mAt6=f~u JHt|K2X(,HD6-');
define('SECURE_AUTH_SALT', 'G#>%Rx</6o.Y*u?Ho.mC$c&HV#s:?.|nX[-$$X@gp41ryi3_E[g8!G3{D7~Npl~.');
define('LOGGED_IN_SALT',   '(U=AJ7A)?XpgPcT>KxPjl~#kC[|D,w(`yeRY!f,$.YYcjJ>8hyHDpyMFuy2.W(I>');
define('NONCE_SALT',       '=U5mB?i-}agW{];pK{[q Ae1]^@E[j|7x>Ad$%!SW#u6IVGONYYE:?/JSq(>4jlT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
