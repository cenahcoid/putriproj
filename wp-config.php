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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adventure' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'MeQt13/62{g;>8,v,;(xeDZhQdDlVVp=ElnQ7;Ykd9e7plO 5vpQOC0n[NVG?j.;' );
define( 'SECURE_AUTH_KEY',  '?~tJ<s5<U;<!Eq[OFNQ};31L&T/75yp5RhdN]eam)?u(B{7pTdeMQ)KYOs1?+_LP' );
define( 'LOGGED_IN_KEY',    '29is=Vq#@(*^zKPGf-f?DN.FdrIJ]eo!Sb6YGvC%Miql{._$3kiPo)bNC.,,<{~B' );
define( 'NONCE_KEY',        'U!a|CyJ4o= D(dg?tslkhw1&w*F`<X$daud0yPd$X4,`+)O*4R[q2o!1W;Wg=NWY' );
define( 'AUTH_SALT',        ';=$q@/@8B,%M),%a>|[5j4wQuE5~l0UnY{fH]H4l|~C$Eqt/I~FcUj%Z2?$5Qcq7' );
define( 'SECURE_AUTH_SALT', ']Fqj#jT3` 7$x:L;n{<d.Fncb;6GAEWLuQU#9DZ$aVo)~:_6wQMM&&ibgFK6) oq' );
define( 'LOGGED_IN_SALT',   'K7SNBHo5#%K42RMa82q(EdRbA/$;&>Jv-}xR}(q6%^sKA#XsH Z=gY|=de`Z+/HL' );
define( 'NONCE_SALT',       '?_rRq0ie}<}HQsu|4FXc<g!h_hJEl,%r]NR;LXG-#u-E}|@9O *=(9gsNU1!i3q-' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
