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
define('DB_NAME', 'startwordpress');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[M-QZ.FiGpn~Ffp:* t-~xj%N5ED+PE+^E|8>lNL{yp||75?M[2Mwra4>9I!joJ`');
define('SECURE_AUTH_KEY',  '<,anbKvi<qX= *40,~+(oOWE*N[!vLt{xwn[2Bt8-&|$5z8_Wg;[gW[!G`X}QM,~');
define('LOGGED_IN_KEY',    '*{Qwr{<qVVd|G_0OB%PFlVZaX~/O $zf-&Bk6]<J{m PNg8=j(v*v4$tUWHsH!$t');
define('NONCE_KEY',        '|e ny|WY#z##1sgnC=:1;x{IQKu2L6&&93+oo|%?pjj`dZy@%|oDH(26noT9J%*H');
define('AUTH_SALT',        '^9G4PH`|6oaPr=VwVb-?*ur4syCZs=Sp2:c$d_k{6=e.YV7IY+Rc9/ofi-s-nX9e');
define('SECURE_AUTH_SALT', '(Eh&=m9!U~R32@viA]9=izt],t=8R@Vm>uck+08h&v[DanuV+x6N@|~,5(I;W9dc');
define('LOGGED_IN_SALT',   'Y3}Rv_}v#1|r-%C,I=,5On4pQEwf/(xI<@a$V4_vUN]Hna~=B-CoD@$z;ZQ|Ir3n');
define('NONCE_SALT',       'X7WE+@y>,ZHqddU-Y|0#$Oov<!Gdv>Vp|TOQ _2C uAVBeSCO-!N qD-i~vJiNe;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zztop1_';

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
