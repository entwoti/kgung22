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
define('ALLOW_UNFILTERED_UPLOADS', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_11d07194ebbd41e');

/** MySQL database username */
define('DB_USER', 'b9e33d961f6990');

/** MySQL database password */
define('DB_PASSWORD', '630a22f1');

/** MySQL hostname */
define('DB_HOST', 'eu-cdbr-west-01.cleardb.com');

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
define('AUTH_KEY',         '_w*ad&VP8K{6TT-^~CUKI,$[P)dE~9)^#_7x=sP@|di-o+y{BZ;pUKM$PjARe5rm');
define('SECURE_AUTH_KEY',  '.N]]TTFuCt..#o`U$owcB!=|a-V6v%d[~,r ?w^XE822/8y-8y0PYW3xm7p;,!To');
define('LOGGED_IN_KEY',    'N}>&*$D:PSvtrGa9b;w!BgTNLyOYkC7LvEMS!a`(2||]1jnM<jnVI|n!L}4tPviX');
define('NONCE_KEY',        'ao+9a:(x@?XfNJ$X+9tA<2s3YH%J9;p[bf,DW(@VY?xc?(qnz7X|~`&SRq=]=w[-');
define('AUTH_SALT',        '?}?cGU2x!kj{5L1%RhO8A,F9qL@cR>f(EOam-Y-^{.Gh#DoW:;Go@*GnaAoLFM!z');
define('SECURE_AUTH_SALT', '|lM3(m.{HpJk}IAMMFIJs(um8>o`=E8;)(Prc,U#J!8GQ wg%S1%sZVegZn}8[un');
define('LOGGED_IN_SALT',   'GM&&qHl.xs5:)ZH)RXqF HXh,S>`XO@#Cwf(51wm<#R|(xS,sqw.7a>p=Lu:@i0!');
define('NONCE_SALT',       '_1(7ZQ^@d#8{8obn`!j!gmR9f>#+4S!lmSz;p -Vbg@(b^n&`e6Mf+E69[q/]F F');

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
