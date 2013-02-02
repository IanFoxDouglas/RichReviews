<?php

define( 'BWPS_FILECHECK', true );
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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', '682067_mtn7w9slsjk2');

/** MySQL database username */
define('DB_USER', '682067_so23fd5r');

/** MySQL database password */
define('DB_PASSWORD', 'qe3F676U3eyMiX');

/** MySQL hostname */
define('DB_HOST', 'mysql51-011.wc1.ord1.stabletransit.com');

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
define('AUTH_KEY',         'C{IWP^gXF>R,C+qj0*er}57,k:LZ95~]|`}* S3LJ0D-?9)x{oEnf.;!J-+^4_z2');
define('SECURE_AUTH_KEY',  'uAV}yz 2O:c,^^}av1kPP5BRpqs0@alg4u^^WnFH#3 b.H5%/vk`&I.xEV.A-i|b');
define('LOGGED_IN_KEY',    '>/@PtGxk/}hF+6I`7PT.}+EC5|H-MJt>x5+lP4e-^ZDK(19h=@A49)wA)2Uvoe?!');
define('NONCE_KEY',        '4^0Ro+d<BTy>wS.`4r&NODmkkN&Ut!_<aHuoG7>ntD/q|wYRzBm^/y[n8F3-Q-Ow');
define('AUTH_SALT',        ':v;1)F^`t?pbog>aMy`th|1-W+Gh*GBO8+ZloXnH=@PeB`;{P+?,nS.c@kzzj_+|');
define('SECURE_AUTH_SALT', 'm8QJ7WR=r0wW|$.R*0MA`AnPb9,{VJC~|i)~oOK;t,w`/mcv$d^$wQ|Hh8#=/Ng]');
define('LOGGED_IN_SALT',   '&`n3[WI|(~BzcfJw#=A,nQFqPe6sf*n d=^J;c4`]Ui6<a=-)<7{ZB/52?c$Bwq^');
define('NONCE_SALT',       '+l6DRS|t|ANnXM43e)B#[hD^Wz;y$ikq/3zL(Bk-Jr*zL!>.+rl#+!_ZEiS(Z+B>');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
