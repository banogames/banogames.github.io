<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vocher' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pZkIVnXE1Lx4ih40Jk8sxTBdP9ZXwbozM4tti5AWXkdJYSoeeSr0EUymHSUkqyga' );
define( 'SECURE_AUTH_KEY',  'suCewqKZ7NeHNjNOVuaMqwY8ePMfB4YCVoFCPFlAKFTxjCLzgGXapWUKee0b6TUd' );
define( 'LOGGED_IN_KEY',    'TFu0MuyBtlSX1bDF0UZePzjn8yM1yAvG2Zsrclh5oM1dpmsOuapXGt94fxOKJnRd' );
define( 'NONCE_KEY',        'OQpnMXY7mK1epmrRxrP68HkSQHsYOFpPvoPv0bgeaGBJ73kFLAl5N5J2NbzsEPXL' );
define( 'AUTH_SALT',        'paZE3eYL1ACttkrP1Tpog8Cpz7lD3dhwFpEUuy0kQAjfhBpvGk3eCpp73EkYJUQU' );
define( 'SECURE_AUTH_SALT', 'o1B2QZ6GZixVqVIfjfmYQZOCDwALcGw8ZMq2egxICdXUNO3CQqhjyJoM60lf1OIH' );
define( 'LOGGED_IN_SALT',   'lyNzZOk8DmCRfje2zcr2YXgmSa3Qqrsb7dw9d7TRtUJheKOr5SB7LhHqJ4y2z8zY' );
define( 'NONCE_SALT',       'zucfd3cZlk61IEUt4N7I4Rk2Vix5H3FowVpRtgEncXSeJBpFJBhLPS0BSbHloGaG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
