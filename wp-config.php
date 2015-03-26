<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-gR8?FWY8+ssjRr4/JCq[MsqhN[v+yI6||%qoi&;TTCm.*:rWVWIzy(.EI2<:6$l');
define('SECURE_AUTH_KEY',  '#vKas&Yz|17m&$GpZO`N`x+rCPb68|Uutd2Hm]kc]C~L@2rx]9<j6>hNdVhYCxUx');
define('LOGGED_IN_KEY',    'R@SI<TWkfNu-mE_:&e5-`z7JICs3#raAr>2((9KUHR;cRJC~sJObqfqH&lYJcHiw');
define('NONCE_KEY',        'mtdt4,qBvS{NF.e_hueHt6t[+sts;++RZWdr@--pDjz$AVv}^2}Z?yk3K^_MW6Y+');
define('AUTH_SALT',        'Rzel8C`qy<W0J!K4IrLv7Xd[h]2D&R-M3nffHnYxguW!UVDed,s,SbYuNLpA:sd2');
define('SECURE_AUTH_SALT', '!+=fk~N.>0bu~>H+t>BHojP(~qaS:+P#g<_QM:[MzwJNkQT/->$:usSF(R:cOjm4');
define('LOGGED_IN_SALT',   '(cn1FLC2}CFN{YT>F=q@IMW+<%y7s8_V=5-kCW(%^v<Qt!ztwQCc_wLV<$|~gYDM');
define('NONCE_SALT',       '-_SJ+q1q${-3Fh;0]?}(+bBKKF3`>4JL?E-1{-H)Ox8A-rauvvJtV}iQ+8`7Slu>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
