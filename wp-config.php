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
define('DB_NAME', 'olimejjc_lokotours');

/** MySQL database username */
define('DB_USER', 'olimejjc_admin');

/** MySQL database password */
define('DB_PASSWORD', '@CIStut0rs4');

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
define('AUTH_KEY',         '@1@jJ8/Qp$q,x]6HLtWi:nuU0A/$E*WU1!tTnaUjY&HgKva/kF6xn/2b-& .y?nv');
define('SECURE_AUTH_KEY',  'S/fmr@|k9cK{8F$fXjO0(oj*h=J,:jWDcTjhW.0G3OiEu`J$d?y_q.BK8|5t:xAi');
define('LOGGED_IN_KEY',    '!#BpVoJ-<L1<U(-sXKy0Yi7;);q [5I:n#O?=a$m0J<CF_XdkUVJ$,EqeU&oCpEN');
define('NONCE_KEY',        '4|uS4?&%u^Ws>vLG2-_^qIR8:0vSW/M~dH2dx##v-5askR0iA>@[g%)O7(d9rTxP');
define('AUTH_SALT',        'hf=3`X}c&Ve]!F>5y:]yr~0@TV3}w`rq$0hrRxY4u?sUL3,T<Da,Mssp~<FJ5R,~');
define('SECURE_AUTH_SALT', 'hlaQlUt4Kk^Za=Z7%(~|!+TR}oxlEMD&41j2Cn4~<W+kL}0|1CUSID,8>.yxb=];');
define('LOGGED_IN_SALT',   'u-N<Cnfi*5dhFuj,9<S>$@wi?a#*YDTAWI0 ,bdmG^<s4U45J@XWe&@`w!K0U$c<');
define('NONCE_SALT',       ']7xL:lNUjhz/J0l{)1 [lphc<Y3TM7PPBbzJFLgzqyN,ZRkQ6FEJ~C^`=dR&[e]@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'loko';

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
