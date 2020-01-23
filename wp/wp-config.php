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

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

	/**
	 * Settings for local environment loaded if available from wp-config-local.php
	 */

	include dirname( __FILE__ ) . '/wp-config-local.php';

} else {

	/**
	 * Settings for non-local environments, used when wp-config-local.php not available
	 */

	/** MySQL settings - You can get this info from your web host */

	/** The name of the database for WordPress */
	define( 'DB_NAME', $_SERVER['DB_NAME'] );

	/** MySQL database username */
	define( 'DB_USER', $_SERVER['DB_USER'] );

	/** MySQL database password */
	define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD'] );

	/** MySQL hostname */
	define( 'DB_HOST', $_SERVER['DB_HOST'] );

	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each
	 * a unique prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix = 'ojfsjxd7_';

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
	define( 'WP_DEBUG', false );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

	/** Disable the Plugin and Theme Editor */
	define( 'DISALLOW_FILE_EDIT', true );
}

/**
 * Configuration for all available environments
 */

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fuEQTQtZYfgjzJ7+Q9di1WELuuD10pnxZObUNd8l');
define('SECURE_AUTH_KEY',  'j/F3f7og3SJ0/Kzej6fLJM3EY/7ObQghAjRCk0AX');
define('LOGGED_IN_KEY',    'DliTOpyE5ufTwRnUN7afLX6IdIZvWKgLs5SrNXfU');
define('NONCE_KEY',        'dZlOOaJ4cZ0OgYrXGGLTf8QboNDro7yero387wdQ');
define('AUTH_SALT',        'CDk80k3wD8PbAUVbnAmWjBatg5LB7qYiHXQrr+Qv');
define('SECURE_AUTH_SALT', 'SkbWtGeuvcy9uL3qDi8lt82TFoLNO56Tpgl3mECX');
define('LOGGED_IN_SALT',   'X1qy7/ik23DGv2PpHojtoAjsghCLUbhI/0Zd48fE');
define('NONCE_SALT',       'FTRqDTyvISEpjWHNsAZszO68L8kxT4j/Qjwqw8Wv');

/**#@-*/

/* That's all, stop editing! Happy blogging. */

/** Hide PHP errors */
if ( !WP_DEBUG ) {
	ini_set( 'display_errors', 0 );
}

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define( 'ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
