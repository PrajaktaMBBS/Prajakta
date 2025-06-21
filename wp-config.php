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
define( 'AUTH_KEY',          '26dsn 3E_=,R&#afI!$4uNeV3&MYp/HFNEP%DB$E<>c:5{`OZ-?RNxl6XS%xFK%&' );
define( 'SECURE_AUTH_KEY',   'eaH*tXw@H{r6;.qZ[TTiO f?^g+KOU -YHrK!3:wCna4]9d(9X`t{ck`1~e*BuDZ' );
define( 'LOGGED_IN_KEY',     'fk6Y.6MF;OpciHxwqTCAGDl> khC0*NZc2-l~D{d`Y._.w~0}apSScF@,oR1,U}Y' );
define( 'NONCE_KEY',         'okWNw,xZ~3r&d)2beLeh]+*PAnlA)mN%R ve+,;Zs{KiF]}cB98oP*Cueqj)2:p9' );
define( 'AUTH_SALT',         '~IEYQxk_d=3mmH>yYd-/fuAO;LMt96w} ,2v3-S=%u4tMLh/VTMt,6:3xUIWas5B' );
define( 'SECURE_AUTH_SALT',  'Zq;&.@,/- skM6yV`;[-[:a2MKb&K[gS4vAh}vfUA9+>.4J>@l`De/mpIAX:4 x9' );
define( 'LOGGED_IN_SALT',    '.tbQoog!Oatb?6pm/CH;^gz`>baZoP2l^70zRJDK,U*OE*v[c(_ntfk&(z`C<MLt' );
define( 'NONCE_SALT',        'b^0MwYh`>`fO[gRo+=+vNV|D`0mZfKJKhn_~sCa$2dFo!]H!Yu@;{XZ>&y8dF2ii' );
define( 'WP_CACHE_KEY_SALT', '9rYLnQh,D[C@48M~<CPifZ#g+3~x?~YU(4!$_08v]&Px{^YTdFOG&U0c^!_;@M6r' );


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
