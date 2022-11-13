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
define( 'DB_NAME', 'instalap' );

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
define( 'AUTH_KEY',         '&ntl8ul<;ab!~L?yl@]iXDWM8rJVY%GQU5pa*D&T;&UF*NHE$FLv!x^frf}{K:^b' );
define( 'SECURE_AUTH_KEY',  'Cej:hE3KZB$;)/grL;F;nEN2g#ss<_},.MFxcQh:YLAd0hNQ6/WfDcQ~lS?@YuDj' );
define( 'LOGGED_IN_KEY',    'tH,jtX}TS0ng8(h1{WjC$AdsRXZf5!2jskUC$]NXui.Pxj|So ;vDJ^%wBluurP_' );
define( 'NONCE_KEY',        '(4^%hN~i.J:KWqw)k?wnbGRU060OaR?yH%GEM76EwmapxE*A-/-<w&`b_3jJm;e ' );
define( 'AUTH_SALT',        '-J4>S!ZDvhzg6ZC]wfk0daM9,..s`IwkvFSqrZ,@LXYz<n 5aR+|(B0Sb;BDA*B]' );
define( 'SECURE_AUTH_SALT', ') ZwmTy3WYWRoN%q8RW  iaN*y$S$KFbaa/._^/3mEetpVvuS@cII1Zv{3&IR9J_' );
define( 'LOGGED_IN_SALT',   '*-(X$y|o@VD7`S%`+P2zdiIR`,H:6Ak%Fh9<Yoo|Q,;E,j0slK*Y)A;ZVK_)IUP}' );
define( 'NONCE_SALT',       '&%aQJ6}<,_pkr 7.UxQ4fO GYfDCzO|J,k6Dt9rs[DR>?k+:FaxQ7-vk!+1[_AbX' );

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
