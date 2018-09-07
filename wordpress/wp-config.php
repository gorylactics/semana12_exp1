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
define('DB_NAME', 'creacion_de_plantilla');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'd$hq?b$w_J0de.H*l9&E>5itaSTOPS4~&,xXskoD(`=49B4o OX6u5jyHxjg+L}C');
define('SECURE_AUTH_KEY',  'm9V{bdlB20;p[%S|r s1(&yb8*qR/d<x},G$8R)85,~$b&F}!j8$:R_>/f-/$8R=');
define('LOGGED_IN_KEY',    'eM[j7Go{TW#kmm*J94_L+D4yB{:XT83rj_j!V-b=A&#4a1Xt{+Y&HShtaX}(YqbT');
define('NONCE_KEY',        'G6{`Dk=~;T@VDeY/]]7}f!uZ]K,I{}d,]= ]~h2=`jVE|=_}8*5|J{%#k2:_A6L/');
define('AUTH_SALT',        'D.TF0UaY&)q<2(uta8P?O.N3D~H^efKje~+@{Pt]Wl.$FcTDB;t^m}`SnwMlq7(K');
define('SECURE_AUTH_SALT', 'iG+l6Mr[x[_AuZp7[o#IIR9X_!tl72!AsR55VP>&j.}AG[o@zKKlKHzB6S//QAK#');
define('LOGGED_IN_SALT',   ',FlRbLHFiN[iI.N!Y{m-?]ySpL/s{0BTI=!4s*h]a}jl<N@d>lP_$>]p`?<HayCb');
define('NONCE_SALT',       '<LnydKTrbn:Vn7v,jUn?.9#2;zX&_4]TH/kyL.LjZUZjt(?[%:#jQb]!?U;y!PYc');

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
