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

define('AUTH_KEY',         'vB|M#/[UCG]|PtJ39h^0dWfo`Q1zg?UL%?L7!ND%]-YLs~=@R[JwbZT7&H7x*&y@');
define('SECURE_AUTH_KEY',  '^?IQv-zD-X_[U(8/(Ax%ihnU=Xjt/fEOx1i>?;,rKhvR6}51u qv)S0M-_<pM%r>');
define('LOGGED_IN_KEY',    '^VCi#4-;k*iTZq^S;%;2P9U(87d6yjS{S8#y mY(zO&fbAec+%ta|6`T~.-_>4rS');
define('NONCE_KEY',        'O0ovz:yV?2-8Qn=m8FlNm/N#ps--cKE!:o&4l;mNa?~[Z+pk>Bl$Nc <Svnl(L]#');
define('AUTH_SALT',        '5gUs]-;QJ5+nTOf6IOzJ0Fj*6$I0J#d[^}i.-Y)1Y-1@7plAyHa@P?YiW-0Z->Q-');
define('SECURE_AUTH_SALT', 't=*x[-mc0OAhA$+x+kl*q fP|vm0wT?ie<OU7oQx]-;fV`xozslAbTYGoXa!MKp#');
define('LOGGED_IN_SALT',   'KXAi+!.QSblR2,Ul3gCp)/!BP,sLvadn5O0kIC^Z>aRWYHU}#N..9A59?Ac/#1?j');
define('NONCE_SALT',       '_-lg@!=:U@e3JAFB5MA03rg]RaBuZBA.w6/TS O:t$B*Q%wQ/cF.3RSCc^-_X1b4');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
