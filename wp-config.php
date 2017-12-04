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
define('DB_NAME', 'khmercodeDB');

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
define('AUTH_KEY',         'bSo{lw!Wo(04-{3JuNqJ)7eKKp~o2c#<-eNxg%aA`,:nY#!!%AH*10h5H=Vjf~YT');
define('SECURE_AUTH_KEY',  'WVkV3(}H4avVEQxQNd->jK^8%Eof2Da*iSv-7L&uH]^NBp+CI;d|R,gbX4NwR5L!');
define('LOGGED_IN_KEY',    'mY>RtTm@Oj%r:qvQ-Re}$<d9odFHCO+D7hVnxvP!,L{WdHjEv];k%WR~[v@2&$9l');
define('NONCE_KEY',        'bv6Nfss6y)qM|_hYq0!)IPr;Nxvd-E/F9T U}:t..~uqz>`#!sPPGrojr)uY31Vw');
define('AUTH_SALT',        '!_jK44u)Y#B~ZNt)<Y5z7II3J[JAO8 fuiEnTWN4< FQ/ctv5D7:)uW5Q&CDSHz}');
define('SECURE_AUTH_SALT', 'AN^0LMyf>(Zl61HkU0+FH&{JuzT52KJN|1LZW&:>B<tSJ-&b^n+E{~$$c4Y5M7X#');
define('LOGGED_IN_SALT',   '}d<kZq.4${Wxc?kxt%{G_aJCbR;59V^i?`$Dd-m@cE@(RMm.iN:o)!ALQ!RiR`B*');
define('NONCE_SALT',       'pV SV>%BxR35wc$`N%,{kvf(7jKvP>Zx[:=%*>d/rss. H{-+2LH=u}G@m_ d%C3');

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
