<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '/J^(.!M f^8wi:US[bUi!gj7vxl{fIe33pod9^M]aX=S6SdYU})?UG_8@!=+C0oD' );
define( 'SECURE_AUTH_KEY',  '+N`VAqM^!mH((IviWljzh,UU,H6*b/oA:f?7}]0m`]J{Sr f*cGhxRnk%zHwg`.(' );
define( 'LOGGED_IN_KEY',    'i^mtF30>g2/m HASjU =t*#>[<|E67q3v(Jb$*n|>btsOZGVf|GZNil9U^<@?II:' );
define( 'NONCE_KEY',        'aq]aCLTaPYu^-y1.$/8O|:rSf4=y?,{6aH|<q~XbELb.fT.y>60?4a5EZ/Yq/4*w' );
define( 'AUTH_SALT',        '9qu{!+QKS=cOf B)muh_X~15l_|`b*u%HwZ/1W VAq&hP:7L96+`<#>i@XA}]]>q' );
define( 'SECURE_AUTH_SALT', '-fX5=M| @B3zhWE64ItQ]1(^gPpg)05v]+I3%R/,2urqnCHr&O&Y/8.&}IqzTABx' );
define( 'LOGGED_IN_SALT',   'P@)04nz_al{_zOkG4]no>Fv#1(S|)g]7D2PCa|$5{llvze1_BBu%N~.@ `h^iA.W' );
define( 'NONCE_SALT',       'a;MX&=M1e`Gn^%P[5SWI=JRnJU+(v`{#%6h.3%C4w(8D2L%R>XQCNL8wyIe|l2wi' );

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
