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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PIdXwvqOg8TT47ZN0dyuMhd2ItbslP9/2YZBFtCwg9E5OsuQ1/Ur8bXtF2XLqz3+UKCvJGT45rWP324S5mwzrw==');
define('SECURE_AUTH_KEY',  '8yc+p99YD+Bilgo00jrZYzjToY+02OuhIF/2eYgwik9cR164QCIf1RuA6m3porsGDvGnPoIDV4b2v32dU5dQtA==');
define('LOGGED_IN_KEY',    'qRw1EO+xsIJ8Bd+Akkmwz0gGW1T3OKsMkxwMgMH1IdbjLEf1rt9vqj29qU2tyBbrtKwx1qgg0V6J35iIYRvSJw==');
define('NONCE_KEY',        'wsG+1DFKUNGXFa9tLDmswFOWIqNkpHWqhcit/Ln4HKBg1m77IlPTrBozLvaYTMXs8AOZwyTQhwKrv1Gxjz8rtg==');
define('AUTH_SALT',        'xe5Fbjlmo7P+w9U8dk+YV1c0uMcaYodcKKXbT39UPButodueJgdu7I5bIymdVw7mwGJh7j8MZRID/CbNI/LAgA==');
define('SECURE_AUTH_SALT', 'rRZw2X1xgMKKwzFTS4XzOUoFod34QNS5D0wcEj/gX4vgbh/TqDOFmWs9eH7fICWpP4Wt9lmxge69fzTCAKnwxA==');
define('LOGGED_IN_SALT',   'HqoWWz0nnIdl/CLjA4JPpzM3FN9/X/mMeXekEx8fN1qOL7lvnH2KkgpxTaOGWzGOIj5G/ohH7JqWDo24R47nyQ==');
define('NONCE_SALT',       'NMoXPeRDrIa9F9IreBXPHGBXqR7W43fXX+YdCPZ+7TelfgJRNK3dYe10yaL5gK5rs9uoSsUSfYnCBp3j7ckA9A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
