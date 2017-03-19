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
define('DB_NAME', 'thachlanhuong');

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
define('AUTH_KEY',         'z(,6W5b9-wI7Azg@_&tF$_`$c2lGEC7NqmSq#/=Yy]HG~{v<)},t n/Z)@[!e?+s');
define('SECURE_AUTH_KEY',  '4*.ZnA}T9R2>*5WUs8:bMC6`I=L_1%B`!o0*jJX1EWmH3NiG7@7a *!Z]2Xs$7y3');
define('LOGGED_IN_KEY',    'eKt]aESz?:Md S:es)Xf|.a`BwNP&}zhT)1hl[i?l![`0n<#Y,%@nqUc&q|8gc0V');
define('NONCE_KEY',        '_hd#|v5.a*[cT?q9&mP`*6<Jf$?=@:Y>sq}>z|413-{gbj1%rs|^I4qijeS6[Q(g');
define('AUTH_SALT',        '&i oZYF! ng 09n[&gSfi,|B2Ve?uOOzp@VpEsE1AN.y:|*vPu75uj6Rj{<pF,2C');
define('SECURE_AUTH_SALT', 'cel)D d(U+I(w)DcG?BagG[[C9K#D2v/#n6KNLN?x8nuU+#VQQczHb+:$)r6{WH+');
define('LOGGED_IN_SALT',   '8a-^.sUG84&]2K*57sLiWy~.jolI~/j5J qaDI3sanbT.#C.?#lf|H}O!%Dr~i]:');
define('NONCE_SALT',       '8jRXF`b-W^K>&RFM>%YK-*L{T.HXfoXQbc;IF$ WB }TWjQ#5E=:@XlN3$B9D<Lr');

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
