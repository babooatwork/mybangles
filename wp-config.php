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
define('DB_NAME', 'smartops_mybangles');

/** MySQL database username */
define('DB_USER', 'smartops_bangles');

/** MySQL database password */
define('DB_PASSWORD', 'smartops@win');

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
define('AUTH_KEY',         'f3>#-Ey7y,pMw5@z(bh<Pp9+y0EzY2N9x7)i;GIf/x&~QT9F5:kY`~%#<OKpYh**');
define('SECURE_AUTH_KEY',  'i/YuY5gZZ]x7pnFpxk~klvx,s$Qq.0:QpXJs]l8+[*@ReRK~hqv#~9f;SAm(<9;{');
define('LOGGED_IN_KEY',    'UDPf_c@v0A@K{c*,s-Peyv{W7.L@(3Dp7/5qW5no<,i0jqKMd$UBP0AZuiFfPuj1');
define('NONCE_KEY',        '%f1%zLQQ*@C$-|}Oa|+8B.QSpA.</44tkW/z!#V%0Vnk)l(sU;-8?U1h~~VAJTY;');
define('AUTH_SALT',        'QQ5*bXl=^!Vhk>qI^WGowow1P^6FY8w|icX!RaIUqGN+]Cpd#r<Ejako{E<YWGe$');
define('SECURE_AUTH_SALT', '[D7 :HzlZvs[tK#(1:YXWQ2BOA=ZWtKysO4|6CL?S@:NA8:*?NL-iFDt>I?$P^~5');
define('LOGGED_IN_SALT',   'P,s>c|%5O58?x&>IRR(DuD81>_Hm;Rkb#n/:[}.eyNe&sggs2}~`WW&?/b9}8GnW');
define('NONCE_SALT',       'a&gq,q&3^/,WA:Ql^V|}N~S,D`8MyW< /{U9Nt/Ib;]C!1CP5`#`v],.~lh3I0-j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'myb_';

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
