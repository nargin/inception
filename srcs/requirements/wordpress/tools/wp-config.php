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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'romaurel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'minad1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R-FT|_(`??ZC2IO]~*iO%jL>FK,><i)c}j>TXBC-m|Y=co0gWcZ%CR&E:d j:Z?r');
define('SECURE_AUTH_KEY',  '<nn--&BMZ,R1XoVk-Q?vjD7yL.zZT<R,var`}Dc[3{^mHE7ccu2Y.xnP9<a)$R6>');
define('LOGGED_IN_KEY',    'Z|q++tx(es3.Y##Go<+plHs6?RZ[&eT].C<OH [|m@MUP/ij #$W]J|wD]iIeSQX');
define('NONCE_KEY',        'qGuKfm1M?pSaQx:+5pB-8tada8?vv: 8-+X-gy@Bxq+h+zH!OUAOcXO *B4+!Rh#');
define('AUTH_SALT',        'Z%y.S|s3FW`AmgU%w2R4ORR2jrOLGR1lw.-zvIV;wnxJ:X-;}M0N|m/t6lo2=4}|');
define('SECURE_AUTH_SALT', '$Aa{iK2y!|Zsn0CP@9$t;I4>Mx}%AqONyU*yO0*iMTnP9~|Qos/QF0m`iPczo}m+');
define('LOGGED_IN_SALT',   'SIVR&vCo w+|SY}w23`;q(d>iSTy!CvNww$hpF!uIxLR;ozY*4B{%{V/q)cRC :2');
define('NONCE_SALT',       '9zdC],^inJvf(.H&PNUyMF|-Fm4p;1|EPye+r#)!x50|jodYVz~J^)5;ydr{w|(x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

 /* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';