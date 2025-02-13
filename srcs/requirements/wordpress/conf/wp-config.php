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
define( 'DB_NAME', '${DB_NAME}' );

/** Database username */
define( 'DB_USER', '${MDB_USER}' );

/** Database password */
define( 'DB_PASSWORD', '${MDB_USER_PASSWORD}' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define('AUTH_KEY',         '!8h%3|k-_&uGGJEuJH:R:+?YP3:+d:l6q}&ElL{HHh(1IMZ9Ed;HWd3*sxtyTm?k');
define('SECURE_AUTH_KEY',  't =1oXG>m_^x]S|5jk9R6OD=.p/c+J+}R0|ZP<0*UqF([=>y01v%[U)IK`8n,_p#');
define('LOGGED_IN_KEY',    '?<$~.EVU+R0K8xfj7aec]]Ybx#n_gair?~~ S+V^Wd+A22?hIy[E<4X=^mKg<4jV');
define('NONCE_KEY',        'yfAPqF<!cKqUA-ERY80CDK -qaDYaJ|7LfX6xFk5Z+5Do45$Mz}Vc+1]d-VNr?20');
define('AUTH_SALT',        'Visb+L-V&7]-M$.[5QlM>,R)m/+o=&_XG0FAZ;Jz=h^:)[!.u=K#ILaU!?E.JP,z');
define('SECURE_AUTH_SALT', 'F#.cxw_!YOuC{Yh[Gjp,}K]qpeTA?J YVe{h=5}C73{8Txq>V#c{]%fV<CYOw)Kr');
define('LOGGED_IN_SALT',   'D<zR<Ne]c0sn<dAb9X4qQb v%99#F> 8Mco!+NBxaw`)o7!GJXA-J1eN^<vhYS:5');
define('NONCE_SALT',       'Rg1LWr;Iv<P*ns)P({p@IgH?Mm=s5q$_$|#xlC#Ye-Bb6*4su+w1{DX+|S6dAPIE');

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
$table_prefix = 'wp42_';

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
