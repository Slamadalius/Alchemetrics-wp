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
define('DB_NAME', 'alchem-wp');

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
define('AUTH_KEY',         'Sl1mw_T3BRkvLV@2kZwt0Ut=E;,xnpGcD3_x0rJn{Os$p1x1;PQ*QL%0n4>rz,rX');
define('SECURE_AUTH_KEY',  'B9`%l(LV3&<Z9O9aNdvro#3;MtCg=_(Y&A!xNpar|][-]o*X~Sh}=0)x{)S%/{5<');
define('LOGGED_IN_KEY',    '[tyzfz HgTo#D@D@6e6(H|tofkj;;p 3r.QS7>Pr5.^D+H>f?w-7g*;A+h-zT9WJ');
define('NONCE_KEY',        '|wNWWRxO.}~P:lT!hK,|=|0lI(5@7F0vSN:EL}X4_U+u%@hSc^Ei_mk g7 M/#[?');
define('AUTH_SALT',        '.$-D!88>ertD%_JK+BNywCl|0D)$,4;K9/q!n;V:s&ZVm#}!9{e$P=(Mv<@}gY@M');
define('SECURE_AUTH_SALT', '`@<w$*4Wp(5^^x6>#FP.dE@t<^,::U+)mLLqgK2pe?3XG@sqs#`wdy>gG[>yr<9y');
define('LOGGED_IN_SALT',   'oA 7m=:]%R#lU%u$:$]!XJTJF9^jy?&SZ=7/aB!04+&Zy?)ay?LaZD0*oV944vU(');
define('NONCE_SALT',       'd7R~f#])G<4oGUXs`u %V-`23/Chv%R.! L..IA-:yWs?]N:)saaM88~j#qTfnLI');

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
