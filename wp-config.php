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
define( 'DB_NAME', 'ejemploweb' );

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
define( 'AUTH_KEY',         'p/$VKM`z*bMH>_LY5k4Rveaye-=T&;@2Cir:?-M%+IkJGzsB&$?A+>}8A*6FhN@1' );
define( 'SECURE_AUTH_KEY',  'YF)+8k}(_8D%-ic8gyBoC}!aU,Lp/F0b9_udyzyq%=H.B*6-E7d0K}X{Oo!c]-5G' );
define( 'LOGGED_IN_KEY',    '&aTp%]Mkl@.g9d1hv%H>ti(UiI ?M*tXKEB:]:Z8a^R3TGAkC16pcB`(`mdi71ni' );
define( 'NONCE_KEY',        'auVc!=?bWo9Q3<awfclpq]R@,i3,#Zh&8|~bXB,`u$-VEO(U{Ng}sgyxD6+zkhB-' );
define( 'AUTH_SALT',        '0}mhudO_vG>sA11 !})*2$}z&.O%Ed~q3mLl&;:wTJ`le|Y+Rame*Xu.!oxja@7B' );
define( 'SECURE_AUTH_SALT', 'K,GEk%%k;coKxu;y|/9-r{(U-[f~B5rU$q<I70CH8H.-1.:-dy.MtjC~OlC;x@#.' );
define( 'LOGGED_IN_SALT',   'kyQ}!y0g]ZSi6/w17YF^eWeW#$p1>#OZyd2vLs|y9yyqV=X,[57N62=6U}0v]bhd' );
define( 'NONCE_SALT',       '.Q<wxDM-R ~7Z@0t2t)yW]h8[Uh_6`3_TOR1f7Fn%gBr?&)@`0K/f~fy@We]V@:/' );

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
