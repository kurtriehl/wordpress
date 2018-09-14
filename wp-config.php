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
define('DB_NAME', 'testwp_db');

/** MySQL database username */
define('DB_USER', 'wpuser_test');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'E1^Ot%yIC~fvY]u<^]iz] *ueZ/6#V-#z!@UNf?{0+`D4S4/]^;XJxX+=%H%fDL<');
define('SECURE_AUTH_KEY',  'DZc>xRa!hjbE!9~+`-N56.H_r>.&ro7,q6=KSPqbcKL>8jS5_0h{mqz2Ry0HZ$n[');
define('LOGGED_IN_KEY',    'x`$qPyAcOl]mAYQj(Ld<TLTcqU)b!yZY+EKPzB/(gU)-fEJ[0x.:lu7sx1h}cyrq');
define('NONCE_KEY',        'l8-8FKS-hB}StSjd-WH2K1rvny9rlXD!]w*Q81D|Aj?B^i9c>(T@IJ=,+Ak=_iUf');
define('AUTH_SALT',        'IO. Cp*xAdFV2O=r`]6`N4mnoK8gl|Kh2w1^,o45w2zv#BU*K%z;S5Pm 8GxfHXr');
define('SECURE_AUTH_SALT', 'amU@}D_*/7%,H9oFf}/OZi0Isf3 `_$:.#T9[sPw&Psf4F46hDl}/jRm83_m,l#`');
define('LOGGED_IN_SALT',   'pV`flD|,D(N5R3qOyy9,d>TpeNw-uq8zqCNfSH?0IWWuo*+WE8bHk7aIB32AB26%');
define('NONCE_SALT',       'YaDrif=S97pj FAXw0ii70_/8|=5Q4Df[MF@P7^%+C|znpe@7K.,p!6e!Vt:R7jr');

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
