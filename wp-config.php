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
define( 'DB_NAME', 'wp_wccourse' );

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
define( 'AUTH_KEY',         'kJT9tl|/>*7}|kwoAH+T^98i[;kf%$LBYuT,,3XTkEYq$vt?RE@2+*j-l?) 5lMC' );
define( 'SECURE_AUTH_KEY',  'p$s]7QwU:hS>A|hOFc1EP)|,5&k9.BJP^W@uQ]5Ok$2#A}r3NT&W9P0?Bo&Ecxl9' );
define( 'LOGGED_IN_KEY',    '!.GY,iH;>xF4{t/N&m39g_Ugf=I*:m3G?..&TK7i[{< J!i1j*HPxpvC_Y:f$]:l' );
define( 'NONCE_KEY',        'X>6=@o{[ #T_-iKT86{5x2<wh#;F1K+o9o:<EaP_7d:7}GsGN.M1|zDd&MKC!B~X' );
define( 'AUTH_SALT',        '#L64UJKr(WX0qRU6_y?qsJU)P^emZI-t629xYqHom&R_SZWBH;&z2=Yhv!0~eOH`' );
define( 'SECURE_AUTH_SALT', '9F`U?D]m7AY~|,fa;~.jL[X?^3-hR71BDG,GY]_X 6cX2|^,3:<2WvJR;toCfm%B' );
define( 'LOGGED_IN_SALT',   'oLp[r&+O#Y:R`E?44j04E];%J3a*gf2P6dCPrdg)<6,:ALuoCB(%Z#iX@o>;PR`9' );
define( 'NONCE_SALT',       ' #tA.k#*Cj L{RyAl&tk1K>r+k;0AXH2crYg@+sZkEDqYo|BN}b1}DDaha M[[a@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcc_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
