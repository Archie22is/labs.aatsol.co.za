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
define('DB_NAME', 'development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=5|CA:[&A@Bc Mhs[)5[1L1kT<>)hBD9ebp#HeF&yCb{W&t^3Pmk=A_3osnDxbn]');
define('SECURE_AUTH_KEY',  'wwsQz+EHP34%?mt&y_-45=Tyn+RM3b|*i+JM]sYz_qNYqg8#/I|f#p]$_t~w(svW');
define('LOGGED_IN_KEY',    'y=`?lzkaG^|0SM5_HY090pJigIcwd0jwH@k4h{je+Nlv)+<Z_$=xj|?Ak6 @1r07');
define('NONCE_KEY',        '0N}XWO[A7*?X*nW?JYM/wuG`gN`O@q(?Bu}d)K%_-vm=8t*K# xNcLCPo2Q)c|iB');
define('AUTH_SALT',        'K +*Bv9[wh;aX<[vz/lQ0=HZoPoNNoM0_+DPAEdea%zoysV+.f&9VnarBWHZ3/6%');
define('SECURE_AUTH_SALT', '0)>Zld3e~xiK$_/ITg-A3/9ybUDS)i+Xg_czhGU(#m[|^6(QPah+[0|7Q7h@:8[;');
define('LOGGED_IN_SALT',   '(PCzD;$-mM,_-B@q 3A:I@1C!UEN1A:UXP^~L&86=>Qa,nD 3VLstn{f}(ShEG)a');
define('NONCE_SALT',       'Lh|ttOWac8~uT:iu-0e0b7wH,gfTGgo_*H74RhFJ-+5GU@G@ln byFP)@`^^]t{*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdevlp_';

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
