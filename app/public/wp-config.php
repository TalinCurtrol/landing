<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[2~0z-L%|2X^bwk.!K`>xT65m}t[YLg4W AsOl!f_3Q%hCZSnyE[2ih;jnJKa<+ ' );
define( 'SECURE_AUTH_KEY',   'Sz#9:Fh0B4QRx-6qz2Qoq>kAz2Y+24:_P,s>;jQvl{MMjo}}.uf$E+)~1+:)S,lg' );
define( 'LOGGED_IN_KEY',     'X7G;$R;AY#I&-f8+ebYDK^}37}U?.0uRmdS[/uZO4{1FDv}{BmRxVp,2yKov4d{o' );
define( 'NONCE_KEY',         'jh/wG`_koDF`;Vec0+<w0rW*sb|7&Q}~^bQXvaz1L6SU;$.XR2?ua^@PD$NM&3>z' );
define( 'AUTH_SALT',         '7A6||ZS.X7]snrP.D(D;6BD=J)1m`pSBJt~W}6J<Sq3. x0:bC4>-?l|rmg;qLM9' );
define( 'SECURE_AUTH_SALT',  'B8{Dml1c#w5:*,KY91Ox]>juZH>%uryTVOIS!MiSI0Oxq>a@F~2.sXctm1ax.,mX' );
define( 'LOGGED_IN_SALT',    'GIU.+$2d%+MW)3a3ue:Q10rAKU&X6s:P2O.8(t94yI3*X&{U+SS{Iw,nET|T]i=d' );
define( 'NONCE_SALT',        'Ee,%s#9W}4PZrxy*7lk2Y.7}:&kagbc$E6gH%nx^z)qPqu;u9)~[|`H/F&6[>Rry' );
define( 'WP_CACHE_KEY_SALT', 'iRCxgY1?ch2iA_-RSqDP[19+=J$1h}5tC7^(8!#9GF:rfx_(lW:c.,hpS-cV3.^a' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
