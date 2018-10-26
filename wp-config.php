<?php
define('WP_CACHE', false);
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
define('DB_NAME', 'damsent1_wp437');

/** MySQL database username */
define('DB_USER', 'damsent1_wp437');

/** MySQL database password */
define('DB_PASSWORD', '-p6yn3-S63');

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
define('AUTH_KEY',         'gtxb4tjz3tn78orlyfmvp73gopeiry2hoyhvaxyqdj5iga3yuzg79zoxsdoefsnj');
define('SECURE_AUTH_KEY',  'yjtwhspekng7zhyetotkepqocuu4omywbabf6xiwazzm26yyhfzgluoo0ntqvkmc');
define('LOGGED_IN_KEY',    '4foewxr6t5sl1kski3gicrlkopluemycostaxvmgcik5ma8j0m2bqv6pajzdicre');
define('NONCE_KEY',        'moondimupwhwbmdsaw2auhsx4lvgdnspsap1nmekng0bqixqei5pktcl5ogajabw');
define('AUTH_SALT',        'pndxxr6sm4xvcdcrunqtjw1cpoh0zd8tvdyv6tcws3itwnqu0lswrsuu2nbto3gp');
define('SECURE_AUTH_SALT', 'qjzfprfqqvowwiljptp0idu7yts8npd2ow7dilrmwrtrso09dmyzvg31sgoqet11');
define('LOGGED_IN_SALT',   'f8gzrbmuacsagrqquleewnhuwvxc6tn7ruiypznksprvejp5kyiglhd6hrhlclh6');
define('NONCE_SALT',       'zli5gqhsblydugbo2olxvavcvwpusqxxmtr3wexxyuyxd9zmz6qkercnz0rzm69f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpnc_';

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
