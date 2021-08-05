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
define( 'DB_NAME', 'c2c' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '|8+b(5I},)Z#Z$:/O%1h2?0$b/*nm@WNkR&ST9(ZS_Gl,*W@{Z<AHtBz3jwm-YLo' );
define( 'SECURE_AUTH_KEY',  'mqj3d|~HXS4~w4L3p|4?{4Mf#EL]dSq9;3dI>Lasm@$Exl-VoR_iUP,H9qK?Q-xW' );
define( 'LOGGED_IN_KEY',    '7o4Ltgr^]^sdwC9%JWHAC):AyO!H5wR{Yh=i?w%B?,=vOlNt,VI(jWo-8Ta(ZU_^' );
define( 'NONCE_KEY',        '3vzz5{1Gy[+7CGrH2q@|!`gJc?yNz&TMz7{@{qz]@nAlo70#1XItj0C*PHPF%>D1' );
define( 'AUTH_SALT',        'p=QpmQqkfdyUlw0S$[pztE|EZ`IR|qzCP8/fdS%G[I<gw_|Qm@)(%xW+Qos2DuI,' );
define( 'SECURE_AUTH_SALT', 'AiJ(9I~xwgHOnjvdX/:Co;y5X^qa_{Oe2H2O?/=3E.8[5)QTsut1@LPt/k9}RJuD' );
define( 'LOGGED_IN_SALT',   't@VjKgL`Y5T~^aNj?v@>0A%IkA,9V( N9?`1]PKpcO.-`-%s)T;N}p92X6Kz]^`y' );
define( 'NONCE_SALT',       'dy$$9#HXV09F<1=~8y&#jg-6e2,4&_BZrg85k9{eQ/^kVTGy`h,t*Rz(p;j!OIGr' );

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
