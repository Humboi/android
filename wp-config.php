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
define('DB_NAME', 'Donkomi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'santiago');

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
define('AUTH_KEY',         'RrYAN)vHM9nhS+L+xqXr?+sib@T_xp?=k:WvmEG]v8lRy?=@mnA[C%F97;(G=T{A');
define('SECURE_AUTH_KEY',  '!DPOV4]9(!o=O/m7/b?p;<!g#j]<Rb6p4SWAbN OixS$0(:GM^.)zX@IDIPh4(o/');
define('LOGGED_IN_KEY',    'PztS9XS;JWaWJ$-.1_d__8uCG{GPZkiJs8H H+Y?Cx0^81B*wM/&v*SjrKl-Pc?M');
define('NONCE_KEY',        'vYn`)U`JP+b&#)j7$cx86}nUkv75-$o5H!:t&-p~?u8]?HopY+PVb7L6eBB2O/z&');
define('AUTH_SALT',        '*O1WKl{z?$Zw2$Iml_x%9GT/K4+M>z3_`$k>jd3:~H.y_n;Gn;6<}e:OD9Z pji<');
define('SECURE_AUTH_SALT', 'K|,K/{i?p:o}4!$A)]xUrD;3n-5@4*4_R/x-nvue-d$?+,7%;go5T#tH{k.U&KcQ');
define('LOGGED_IN_SALT',   'KJNP!yG#gF+x~9^L8>q6AZ!#YRTU#8}6x2_5t5%D5}!teaQ~v <jiJo(s#+<f(uC');
define('NONCE_SALT',       'D2bpArfo_gTw]([sar^~~:$~T.qAJB1I_ZS$Z]mJy*?4Z/ch:EcKk~hARV~>g`.I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ik_';

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
