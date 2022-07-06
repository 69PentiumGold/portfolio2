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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'V[:tD4i>)Wb,04WVSLc,$`#@OJZ]ghnctjaCd|RqB5}KV<Q/l|2?)TXhUkCu}+;b' );
define( 'SECURE_AUTH_KEY',  'da=+DOl5=}XD4nnqJA2f(*)7k^.ig^.hT}0<.Rj&DVV_hzlN;$VEuB/TlGD:QI@N' );
define( 'LOGGED_IN_KEY',    'mu<?b&D=t7=#n:IDzKj9xQ_Db:U@ASj4^Ew7an_X) j54U%!MMU;6rthr.41S$|*' );
define( 'NONCE_KEY',        '3WnS/,@%V9ueqk2]p~~~^bQQnEPY($fq+}H~,d_U 5[z9~M[n*niB.kQ;2Zs3g,p' );
define( 'AUTH_SALT',        ')Y_^$yM@UtM/%7qDK86.*G*pzW$&l5Sx+a?v_phgq^N`1N`M+wW&6W4JN_fa@;u?' );
define( 'SECURE_AUTH_SALT', 'HdScgdl3z<k+f=@UY*,oKJ;66Q&, ~<0]3,om?s1VaqxL+LegJ7y-^>BuU`_Sk.M' );
define( 'LOGGED_IN_SALT',   'OIC7<1b|@MQ:HBZ4Oi1$mOac1dCZouW.(y|^s4F|yz&sO28dv},soi=@qsTZ2G3t' );
define( 'NONCE_SALT',       'GY@qoa7srzq/*H63U;6Y>n_L)%^9eL?Ir/4y&dCk-*R&)8(&>eJn}UHaVOhl6Rxu' );

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
