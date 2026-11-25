<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'verdetins' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'awhBLbFmaQsb0FYdyc9pCDQRET5gMqF81YE8PhT6Gv8Er0g2yRACthiCQRM5X6eL');
define('SECURE_AUTH_KEY',  'k60KTsIXrGprpCDzKdZJMfYHXt1lgyG2HgtuiAL6Szv28zzyPH4SBG2Eb8KuWETu');
define('LOGGED_IN_KEY',    'NqrCzc0y3g7sKEG3nf4JHlcvqbGxfxrSWjdhVGfLhXm4LpZgbbjHIVxQMms9LCJc');
define('NONCE_KEY',        'cs5puvpVSIEvPvLdM3ULtgBZImzYPn757aIlxQIBkEeBiEFgQenFZrbh7xmsjfO6');
define('AUTH_SALT',        'kfDiJDyFuetBMhKUSQVnv6owrxXRVsMmYBZ80YppZMYERk46SXpkUNf86pK8NFRm');
define('SECURE_AUTH_SALT', 'Dbv66L0Q7e0bTzb5csoX4RAuS0MRk1f5OrowAjeQWNg7hnbahTDDQcc9ulV7bLYy');
define('LOGGED_IN_SALT',   'b2uSNRnviKWatPGKWe4SThAnfuwfrfdX0M4SnJZAVfIuiiqw3cuYXKRJg1At9MTw');
define('NONCE_SALT',       '2XpGhoVOcJpc29wjWx813qOiJNjMG1CvOiiM2VpHivBxutHykacf1RBFJrernQUf');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'tatp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '512M');
@ini_set('memory_limit', '512M');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', '0');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
