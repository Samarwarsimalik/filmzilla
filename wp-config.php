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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'filmzilla' );

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
define( 'AUTH_KEY',         'Z}qJS3zKGYdj&HEsBNM;p({ha,%Je%?@w}W#-,,c~znY<DeoD808wqC.Q6tHNl>6' );
define( 'SECURE_AUTH_KEY',  'M?=9iXlJ ETQo@GL0gi@E9!ju])!i,W4Q>ZT=gb3tMWZ(u}5lM}bcx459owxiA$H' );
define( 'LOGGED_IN_KEY',    'T&Q}lEYDMp~gA;<|y$6H}Kl@GQ&7Q>Vrs9E|,$7GA_c+S6p%-9h@IP%*<1TiXjYh' );
define( 'NONCE_KEY',        '`j>AXIS?~3#j$/<j^:/W^_X)$WGZC/Oj/s(wUnL@o2{4Q0z ^nKnGq~ojOEL2fXX' );
define( 'AUTH_SALT',        'Ym9MC Gvj1?QYR5v$yOi3KwxPtTs:%X:IvaSKmb6^uL4-s}hUZ4r~kSvEEBAs=i.' );
define( 'SECURE_AUTH_SALT', '4PPJJ bS+*xAqc%Ju2 7j2!eA1{rqk^+$Cz1HVBv*5klMd@&K/m9I(:4IkYRI7g/' );
define( 'LOGGED_IN_SALT',   'o (#5QPa~6%<L3oWg>6hyL^zy@&uo:/sw*2:Ed9:0%NlkTe}*`zJP5X|@6xbHWz^' );
define( 'NONCE_SALT',       'OVf7[: C&YA YQns#&2<(T$A-7eH6|Z/=[7qjNJP;%p3FvyWpl!!b]YJ_V1@W%V,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
