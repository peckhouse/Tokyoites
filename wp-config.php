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
define('DB_NAME', 'tokyoites');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '1U8v]yGcIl1[g-S1?vUv}olgXL1V<?_mNf$-Z#V?+[p;8wd3lz/Xj/yrvY0*Ev:~');
define('SECURE_AUTH_KEY',  '*Gbo*OR#(Su6^E+*(S ~xg@1!|lRkPd8-:2rOT5pD/S2wUW}fl7mH[q@c3u a_5O');
define('LOGGED_IN_KEY',    'PT?kP14V(@1:|ZpqAl]@{~vi6=I#(>!>8B_Y&m*<JDnAf8sQYSY[Pl~/C=grU>xO');
define('NONCE_KEY',        '|+F2R&cLY)9%Lq00dqvJ>>pKKcHNpq(E%;AR}d$re,27)7tyQquq-kcc,G?Ol:$_');
define('AUTH_SALT',        'N:F>z60~So0SgR?C~nnok{?>Fp58ECpUlY-nb wx$LK?pm7wR w(3f^:_5T6zmcc');
define('SECURE_AUTH_SALT', '}P1I%*awP.G/VKe7mx)a7FYJ|m&PG{`ph^%_!yQb,wgsR$1UD* yp0[pX@Zy|[$B');
define('LOGGED_IN_SALT',   '!FWJv#2c}T6 .J7nj(Jl.f4bSvNbkRn>uWcwwT+-OP+ocq7V8fFz |O_lEw0D1Iq');
define('NONCE_SALT',       'nlSSs=Rq=j97FeceVRu*)}B}WC=$h4SGwvkzu<35=#x|iU]t)n@1SokQ&6Kk_-.t');

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
