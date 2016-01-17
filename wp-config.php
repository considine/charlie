<?php
/**se configuration for WordPress
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'charliepoo2005');

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
define('AUTH_KEY',         ',bmn{|UJ.1%aguk;SX~|my2ro&bTE>nGzG?R?YT~5y7x5+G  w6J5M@q{nS8|JeI');
define('SECURE_AUTH_KEY',  '=.W;+Bv?:.1%b|+I6YkFGmE)-|G6rC1/DjidZa<I;TaJ5@>Kb~[|rmETg&K@dNhQ');
define('LOGGED_IN_KEY',    'S~l-#KgWe$|]6<c:Lr fT% +l$iaQHF@nK_<fzW,BV8s9zXI^2.@oDC&5R:Qljux');
define('NONCE_KEY',        'ym@|T6A2~L!7I_YNj)]bZRUbU_Oc>h=i):Sl^ll4e156/d[`/-pgHwIF1/-Rhvk ');
define('AUTH_SALT',        '+TY-e]++5`FDLPAu,qEN+$#SmIz%|Q7C-3-]@Ctxo+N.KRj^,0s||-FQ08MM 3|z');
define('SECURE_AUTH_SALT', '/=-t8Ud@5Pmt5(|Grf-S%`X=Ni%GZYk]?42HT8<)k: ;8aV|0E>zw`=4.cP%#2N_');
define('LOGGED_IN_SALT',   'i%#,uj*V8u~$Bpp~(H{1U{B4VcSHZ,.,QV3y+9d-){O*<!ycCPB s)92X(6c]vzv');
define('NONCE_SALT',       'i;pEg+5!s+]+u(-Z2uf-nkKc!@#eyAO=!MWAsY}-$>O1QTXWIBI_Pd#W*&k-q-4`');

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

