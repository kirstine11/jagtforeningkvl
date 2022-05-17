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
define( 'DB_NAME', 'kirstinekrogs_dk_db' );

/** Database username */
define( 'DB_USER', 'kirstinekrogs_dk' );

/** Database password */
define( 'DB_PASSWORD', 'bhfK9hsx5HRS3M87fNJI' );

/** Database hostname */
define( 'DB_HOST', 'mysql107.unoeuro.com' );

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
define( 'AUTH_KEY',         '0De`X%tDB_gt;FaCT5j6O#lgHC^@s,!.Vydod7sZ:w,{o3|wzU~V8G#!dhLuyHMr' );
define( 'SECURE_AUTH_KEY',  'X@MU6?.YI#$>oY E{wf #Ti*1%]94s`xp@=-%qaT~LmALF6t+|-3f8n;zy nhWK$' );
define( 'LOGGED_IN_KEY',    '8JA],F[`L6&(89Wp%?8j3Fa4RLF+Gkv_wYESR2-:Z0)9eMNMB)zY@7a-_IEKU7o%' );
define( 'NONCE_KEY',        '7hZ.$gwTe--n:!:K,|j.}4f+.z*q%cPS KFW/l HPa}fsOe& ?^C:9u=qsCBYy@:' );
define( 'AUTH_SALT',        'Q5L!8zQRu$hsF{)Y/p@3?=hkZji>6+^8(Rg-3+_{n3+jFXa:Q~aA7She;_<=ZAUN' );
define( 'SECURE_AUTH_SALT', 'U{]:JH4duP;<dXnhF?/ZGQQ*MMp[+xn+(;UMI]t7?=VJP1y?6pq_]E}DSAS[M3|z' );
define( 'LOGGED_IN_SALT',   'vR26Lba=N,mw<X&dt1+nfevV_.Mv<Refh9O6=8NuN~i{_IaY]nRpY2^$I*Uqim*Z' );
define( 'NONCE_SALT',       'nQHe:99?MOsRhO$Dfmv;Wvwv7U]*2TlGw`_f4O~LJ=>8eVdr5Rc&?R-_jpM^GePN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jagt';

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
