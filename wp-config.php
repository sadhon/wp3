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
define('DB_NAME', 'wp1');

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
define('AUTH_KEY',         'MHIY.!+R`2_9=%x|(r=|dP~OKcG0a$uDby_i0;`z>k;g2Pxu2<y@LuP*,$ 0|Bv_');
define('SECURE_AUTH_KEY',  '*TIA,}:Y`qPO*~zfu?i5s/&-_-1<CgAY]CWj*L[8kxYg6Bnk<:x^&^DX_z%AF/eb');
define('LOGGED_IN_KEY',    'jHub7=qeguBdFK#M.=$r^wf`^))KY#WyyN<e-WKh,fU-.GK:x7NQ bIv~w+Tad8q');
define('NONCE_KEY',        'ilVOQ}AAICs`5XtkL2YOxXrTiF~?7J`DzIqCX~}L:{W_4]]BHlo~vL>rJ=bbhXcz');
define('AUTH_SALT',        '<f@*.amnZRb!*:oMQow?D[8<j_u_^>zA]]G[Htl~y7mvc&P|V_sFFsw:7*G Nz8n');
define('SECURE_AUTH_SALT', 'b~[a0O<psBy)B0nM^OhO^**C&C5_OlpDv4J ,r?$I:OQ>OodYc.Z1QWOl;*,&Ngr');
define('LOGGED_IN_SALT',   'B08D4q%-v%@.j];!GeyORLv*`a|}1dBP+98q-uc-[/fqmHa]T9IuPi??C*UcsC/J');
define('NONCE_SALT',       '[8P9E9PA(m0?J|r%z>pyaJ .?oE(&@ %|&J^Ee{yaTD[PalAlIq9Q??*]K~H{Lzi');

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
