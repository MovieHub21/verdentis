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
define( 'DB_NAME', 'dbs15446045' );

/** Database username */
define( 'DB_USER', 'dbu4128611' );

/** Database password */
define( 'DB_PASSWORD', 'c65a4264-ad60-4d4a-845c-289b2a9d1db0' );

/** Database hostname */
define( 'DB_HOST', 'db5020031514.hosting-data.io' );

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
define('AUTH_KEY',         'uyL9EYn4uTy9vYcJTSsdZLvgNLFZLwHYsHN818zb92PUoJrOyuzEPHYxvlj5LTrh');
define('SECURE_AUTH_KEY',  'VoYr6lpUDJh3LVZ3NQ0sBTdc5Iv0zZlyah4yMtFcIp1RQC8zDNbQeiFpjuJ1rCdc');
define('LOGGED_IN_KEY',    'A5eoiyXlAPe9dNwu1EWJQGZF6tGS9AA6XvVjb5X1qBHng3JvtmF5AsCdIjf77OLp');
define('NONCE_KEY',        'C9xtk30MBUz0oGy1OBOzwN61MSmafB14QBvmHltJr69RUJqtb8D69I1gJHXgRmlS');
define('AUTH_SALT',        'm3El3wieuKVTIIAhdnppxtIY6cbpguzo2vQA6Pew198jbvNzNbA7ZFTFO7QDRPjU');
define('SECURE_AUTH_SALT', 'IKilxo9imAkw3sNrQzTvY3wfh0td6iJpPg1zihnZVEEgcWw3Rk6DHvDSfLKGGR34');
define('LOGGED_IN_SALT',   'cpOLOrqSLwIdUudaWj8ABSGpx4KiGyNf1j2tkArAsgwPBgXes6Hw5nLvasQdkqAI');
define('NONCE_SALT',       'BvXrrSZNnRrHotafV6X1O8TdTmylZetv56ljj5w3y3dEMfiwtqiIx73zAz8KjKos');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', ')!{H~Ahj?d A<$?`FLs(jR2P<VqBBRQ0k2U70O4o|mklfQ|Q5Xt9Pw9Gu*ao(1JU' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
