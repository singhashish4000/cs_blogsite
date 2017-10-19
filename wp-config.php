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
define('DB_NAME', 'blogsite');

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
define('AUTH_KEY',         'dX2zTj@1aIYwbA9!k#ur;q|i2#;N}h1J;=>s 1xv_q`ZWw{5!AXmYcib_ue#6F(6');
define('SECURE_AUTH_KEY',  'f&!v._wL#lG+#V_H{@RN#i3-1rohf%rW1FJd@d{}6<8A-V=]{lY7(*+)wM|MCh9=');
define('LOGGED_IN_KEY',    ':wRc`3k4I{&*ky.{h=1c{.O>!Hr09^.i>D`c13%2cV5pvD)KGf_x7>}*-B5hXm)y');
define('NONCE_KEY',        'aRA#WWL5N= HjJpp>~8S6r wF2ghDBc`lZw=LmR.A_QaGQBKuplKF,,PtPm0b&;*');
define('AUTH_SALT',        '9[v0L@uZRebCD,]$uS&`$?ThjVRek>/Qpv}c~Usnu)!w:^]IN_)T^i>QsnoUF^^w');
define('SECURE_AUTH_SALT', 'pw3 Ad1A|V(P:G946B#6+<aUHUo,l KrFF%/q*@/~8R=:]^qAb(Q>8Q[OZ$tR,=;');
define('LOGGED_IN_SALT',   '+Qvc7yz#ysbdO;O[&}&d!QXM&SlG]zo/Q8t c9=MOzWifJ9>1Fbc,>DwXu#O<U!f');
define('NONCE_SALT',       'Tt/xC*Nl!)7|9;eV%.ZW<18v&tv(aj. )UivFH43{U86wNvRVc]V}G<*2np<yV85');

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
