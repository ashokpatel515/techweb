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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'VC8*4nB)s8kpW;mS$si$ZqZ}/oqW7~JC@<S>v; 9$)wqJtax<{d)R7B!Q5gm64X3');
define('SECURE_AUTH_KEY',  '>*sz%Lcf$}}@/xC[`)TRik=K0}5|,9?`<iz+$dwa(V=fTcIu8-V_.-3cN:OOGhOx');
define('LOGGED_IN_KEY',    'UETWy+kXnfpt0(S^[cqz;U)]bU!eKE2O9&#/tWtWA?fCZN_jv/bx#(o~S<wG$);5');
define('NONCE_KEY',        ')=mMw@at|qOgWqefvP-_b^,.R?BJWk{tn14]]f]iwb!:7MlHNJF2=D_m*AcA,{vG');
define('AUTH_SALT',        'a A`i?xUhx*4p~2<R<paHpL#(~(w,/1@}g6:O:_0x@Sa?_M?H^bV14^z6Z1]|kt@');
define('SECURE_AUTH_SALT', 'ItZNvhol@txQ^_@|}+JT?v7i5<AppnQsMu-{+!ifC4x&FLK8uN6o?1|%eP1DLm9[');
define('LOGGED_IN_SALT',   'jI2H1JD}Sa)}*ixv:2dI`qt!&_cItTIo2s=~ZA e8)Njq(X&BIS`1^SsIbGZE/{A');
define('NONCE_SALT',       'L:n/@}4K4(DCzBM7tz_J*zK%3nU)</a+StgUs>RsOg]XI{f]rMo6<N^Gi5I$JB5i');

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
