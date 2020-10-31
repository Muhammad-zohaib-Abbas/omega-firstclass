<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


define('DB_NAME', 'omega_firstclass_cz');

/** MySQL database username */
define('DB_USER', 'omega_firstclass');

/** MySQL database password */
define('DB_PASSWORD', '49APCHoHAxht');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-q_,lhXqp:6|$:-W<nBLFXKF,h9=ys Qq{N)m/$u%iyuMAXxK~0.Xrv`D`MZ|#Z+');
define('SECURE_AUTH_KEY',  '>XJu/p;^V3|)E%]*/o[Re4dJ^~nY+juA2:VRrb7r8BN@ziP:`P:LJ~+`H}I3}wL5');
define('LOGGED_IN_KEY',    'qxfH1Cn-Yz4$lx%J~+Y6 +lQxnCq8?->Y?Im%{U;|XAtYL3WOA@p[))q0&ccl;v_');
define('NONCE_KEY',        'qE`_IcuEO;riIO#J,|2*<L+D6QOx=A%&{{k-Bh+|UtJpWf_LbMo94rD6=l[k=K~|');
define('AUTH_SALT',        '(68]GIuP-9NV40Zs2%|N5XUwZ#6,i,){ttVUh?x&rf.Rnu[Z9Vu&l@!!?>a?cHYJ');
define('SECURE_AUTH_SALT', 'k^ULwJxRJiAz1<bj=)O}P|`cCk,[m`6e M:Lntn:~i+Gml7/SkSq8Ul9G4~|l75#');
define('LOGGED_IN_SALT',   '_{_xezZ9 0%xEBS${sv.?fD`_yPJ4i_-R~oq;s`~)^dGrm2#%Q(qK{we|YsXQy4n');
define('NONCE_SALT',       'MG5M5Q7O]u&Yue-^p9(WO@pPR{evad0y<>v+qkl:#:P]/5fTyWV3,(|GlMj-|)4}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
define( 'WP_CACHE', true ); // Added by WP Rocket
# define('WP_CACHE', true);
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */


define('WPLANG', 'cs_CZ');

define('WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false );
// define( 'WP_DEBUG_DISPLAY', false );
# define( 'SCRIPT_DEBUG', true );
# define( 'SAVEQUERIES', true );


define( 'WP_HOME', 'https://omega.firstclass.cz' );
define( 'WP_SITEURL', 'https://omega.firstclass.cz' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
 define( 'WP_DEBUG', true );
// define( 'WP_DEBUG', false );

define ('WP_POST_REVISIONS', 3);

//define('SAVEQUERIES', true);
define( 'WP_MEMORY_LIMIT', '1024M' );
define( 'WP_MAX_MEMORY_LIMIT' , '1024M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
set_time_limit(30000);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
