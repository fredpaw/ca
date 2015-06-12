<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ca');

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
define('AUTH_KEY',         'V)yOr4f9i1_)`vh 9iqsZ8]LFrm^-mm]mT1iam7L1Z86h0E48-3+X]wYz(G~6ut-');
define('SECURE_AUTH_KEY',  'tQVm{ID!UfUz`J!AB~H|({,Ao.DE<}}iP66oyq-{*Y-SinNrD[]ulW%ti5kEa|M?');
define('LOGGED_IN_KEY',    'i2@QJ<ZfgU=B;i)b?)_2a743NA<5gW;-#^l8z>+1(MZe8IMTm|*VIQ`a+[ymU5Ic');
define('NONCE_KEY',        'hLK#6i h5E>p2-^ibNx{8W8UGi%i6Bi)+v#0GIw?sqyPL!J 2>TC-_/8J%[/qX|m');
define('AUTH_SALT',        'f~asaV-O>mGzr+PljX/eSRp4(etudE7N{hDHXxHcquOOd|S|PNg}~R[[F1{a%lCi');
define('SECURE_AUTH_SALT', '<p: ?;%yF%y.}ZTmMK9FC1e+9y-DC6uc#]d=|C#z}6c:4s7i%c?K`_lx6thn=5PY');
define('LOGGED_IN_SALT',   'n/M]ge}Cg;>neWI}ijo@|U^-?kxP:%Kae&ZgOwZYl|hp_Q/j]bEwv1;D^-!d$7md');
define('NONCE_SALT',       '/$nJrZh<vd</Gz!eG ||#*ayf/qC%2kBCK0esr}tFa+_46&@n.4NH#BK@9Wfzw5u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ca_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


/** Increase the memory limitation */
define( 'WP_MEMORY_LIMIT', '256M' );


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
