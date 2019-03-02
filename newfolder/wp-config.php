<?php
define('WP_CACHE', true); // Added by WP Rocket

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
define('DB_NAME', 'homesui1_wp643');

/** MySQL database username */
define('DB_USER', 'homesui1_wp643');

/** MySQL database password */
define('DB_PASSWORD', '2)pLE@Q44S');

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
define('AUTH_KEY',         'pZS.jzB1L7fpp^!)%9)*O:TrfPvQ^S}fqD|OeJMQilmTL223n6!ib+7g,vcqiw/J');
define('SECURE_AUTH_KEY',  '&WxG[S}/o[I+S$1CS;aw%)x7A)C=.UOALl#I{74?uHlRHad?QP<j+Q80-IiX>] -');
define('LOGGED_IN_KEY',    '!|mH*&AGYp=}?lqHLPnYp@({(:~{rMkE!Tc@Cnn:mT{@ug6E5]AJ7JTNIH3i5,!_');
define('NONCE_KEY',        'ER/kwW,F:9c>+8DBEa >?iPW0U$UT-!p23 iz=23(#):9VYm6c!)}w .RFgd9|9/');
define('AUTH_SALT',        '6870BQ8h0F%!a44kOl#D9D~z)38}|.nQA)LStUe901<h0}(aN>Z_uB1t)_8zNtQ#');
define('SECURE_AUTH_SALT', 'dQI^B9_qFm&lWC`On{{JU+$@,CA|N>&D!1iPEz1Y<M7p`]t$hR/0bIDT0SL6@|Cf');
define('LOGGED_IN_SALT',   'kZ]F]G7Bol$xuA_X2hi{0Uxo^I^,kxa8c8YMal9_9CW=.+G>,H/% @9:Dq CAXl`');
define('NONCE_SALT',       ')XMm7nbN/QCb[z*hoI2LMVjJv)jpr]=N5M0PA$X sT9(H;3m}9|?BU{`,t${>3T%');

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
