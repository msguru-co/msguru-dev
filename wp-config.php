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
define('DB_NAME', 'ebdb');

/** MySQL database username */
define('DB_USER', 'mgdbadmin');

/** MySQL database password */
define('DB_PASSWORD', 'WeView2017');

/** MySQL hostname */
define('DB_HOST', 'msguru-wpdb.cmoszakyfwzy.ap-northeast-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'm1j=Yi&~V;_?|WOMV<&PRpn:5rHAnt^!QUc$_akhv>fYZ%<g:5wJ-8,_qAG)dV}I');
define('SECURE_AUTH_KEY',  'T@^IB.Rv:&9%;+N[Et3<RIB|OmXGB1C!iH]?&@nxQ|uK=PUlk)W>bg>8bi= `@Vk');
define('LOGGED_IN_KEY',    '*pJ_VTkS;j;+8D1$C`lHJ@>Gv6k-luP~sFkNU9MHj#!* 9lxbPu>W5c=wF#l*$0`');
define('NONCE_KEY',        'x3kHZNYx,~E,*n_+v}f@Fmnk;:/|8dYA?!3?}@-1:6Z{6}:Dwh+fn;gNG(zhLMGa');
define('AUTH_SALT',        'G(5smY_sruH*9b%Kt-0/f2m1UIue*!S;ZZ7N<*}[GR!p)(^_wz]5t9A.[</U`@o@');
define('SECURE_AUTH_SALT', 'R`${:[LE@*[ksN*R-4](+Q*8miECFT-V[zCvT ~m_G.. kQ8un!?!OG.m.D/YBhz');
define('LOGGED_IN_SALT',   'kPC5+!^b#c&941jB{0Y^[#7OSIThnpML||F@Wa-Z{OTEd!|6_-`A!CFjYBhg9 gY');
define('NONCE_SALT',       't`<@o}1`MF]2wn=MPfxLE P<2_cI|JAG^f0YR6*>&R5,i@f5<^:a%E{`OWV/KCIu');

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
