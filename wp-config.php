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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'database');

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
define('AUTH_KEY',         'CcvYh3F|H#97PL/uMwFV-[z|P{b>jflcHq=c.@EqizkaSu~lpCej[0j<jXOyf#aK');
define('SECURE_AUTH_KEY',  'X6$f9`nXn%zj>%zz$zC(J/wJ!>wbk =kWACyuCb0>yBgxf}]8#pErlrc-r)x5-_L');
define('LOGGED_IN_KEY',    'if h!ZJj6;$-WX8wC@as*Y=&kXu}eKO+|?1Q7hw]p3k1V{*8nTyz~b+~Mm^w}KB4');
define('NONCE_KEY',        'GX. 4-)tZ3W40Qv}1pU#Rg{G,)HgnuP,UTs?WxdV]p^JC8Wri7?MD[Z29Cko(E4y');
define('AUTH_SALT',        '<!3(WfW_1#M.wluWNq>:m#Q}M%G9dKI<o*h-r|D!>bR?$FmOAl?^q2.B*J]21W.{');
define('SECURE_AUTH_SALT', 'b^s,5N(*;8k?NxPu:*@M^mwxiuJ!odSj9?8Q6_x;4AE&&wj6~8m:ce!,gP.<cYiN');
define('LOGGED_IN_SALT',   'E!|E]8-z>!*l5a`:gfyHeN,~SkOC(n?x1nZ3nhO/:}zE/xlOc}`|1( fUn:;m^U,');
define('NONCE_SALT',       'w5K&F@4v`,M^t.)@i[/y~65Y{.Qk;f6OF!-&)+QMRlFHdPrP5qcAkc%tB}lxF 2L');

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
