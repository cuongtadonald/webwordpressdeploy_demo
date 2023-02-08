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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbanhang' );

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
define( 'AUTH_KEY',         'EYM:,bdkuxMC9,bfTGdVejGsfVC@)|MGFgMV][)w]NLf}BWa9VPrl@}GqgFtV]jW' );
define( 'SECURE_AUTH_KEY',  'y*;#}p6:pBLf*5~kC)Qm~V6txJskQoR[CP(7|jrH_fAk$0R];IX+0fc!de]AkFQE' );
define( 'LOGGED_IN_KEY',    'kY6G&)X@EiR93vr?h;1q(jL7>F3#Z@`@F)X#*8{gPti.j54lV>q(a*%f B08NpG.' );
define( 'NONCE_KEY',        'B=3i*n1i}i](bD)%20k4cV&ui6&4&t]v[%/ JKC|bt{( j:SWP!|o2[GnsfEp%9<' );
define( 'AUTH_SALT',        '_hizrRF8[`wgkkB3JrmVj, f5=VR%}(2Ra5&WzNZ?2UbNsK&mn.y>.P`#&*X&MF3' );
define( 'SECURE_AUTH_SALT', 'd~lv9sr6c1rDG&ruN~&]U-k+DX&C:;/mTG<@ANrkh.db*T#GL/cgE#/.{;pUQ4;e' );
define( 'LOGGED_IN_SALT',   'V0|BM}bN-z/I!FKcrU4;<sfp=D~y0x!kJ>IsQfxC?O#dvHCeG^7d.![4!C?}2<l,' );
define( 'NONCE_SALT',       '@5luK`_U]yRm3$`;qV8>y#%g*A3<.Gcgm;[)mA*I?r?=Ge}#iv0YDsYV+y*_z`yD' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
