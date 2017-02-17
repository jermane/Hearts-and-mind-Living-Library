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
define('DB_NAME', 'handmll');

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
define('AUTH_KEY',         'tM#+MXy1T%qB.INQ#<E(-@Aa{cAm+s{]:ie?5{[Mb9=m>HFOs :?TWww7fRV[6-/');
define('SECURE_AUTH_KEY',  'mz:#S(HBod_E07B2PM<{Yz)}9J2rqE;?DB4TUkc%!&42k##zaR-XZjyOwd1>P0eG');
define('LOGGED_IN_KEY',    'We )s<T9-)6BOXrsyhp+mNP ]Mk3B9=.XI<+d=w$x4h(yE4bp:NfdTzy^Si:P:f!');
define('NONCE_KEY',        '2Lc+5o)Hq2TcNW}W??<jxohfM_:67CA7mia{%yN[7W*z=7I(>_$tmb B,?_aKB!u');
define('AUTH_SALT',        'yX+lY[P*Y2qj.n-$62=~l]d][ImZ b(^&*d@-xZn^-,z}cj3&m$+io/9jIUb`+!$');
define('SECURE_AUTH_SALT', 'ZH}-eqTO:6ZG{N4NTUn8|uF!&Nc1v[?K^B&7UsF+EYA*w`2I/K~~~0ECmlSg$U%!');
define('LOGGED_IN_SALT',   'XM5:`HF{:;[R%R+`>3KSdvk)YhjB)oVrv66{XtRcM<Gb++$Dlqj`fGAT7OJ=xXB8');
define('NONCE_SALT',       'rfMURJL,tF2*/93 _&g7L@Gj(r2~$k$Hv>^9V@9Vn_O*%@ANP[K*y(UGBuHmr?9*');

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
