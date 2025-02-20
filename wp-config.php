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
define( 'DB_NAME', 'myfile_db' );

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
define( 'AUTH_KEY',         'W!s`/Y6@dTXV&A`PLdb-9=(<T|-fq<>m4s?Y&w)DljQoxH@_>U-e[I&a)>,+Q28I' );
define( 'SECURE_AUTH_KEY',  'u*{=d3.euUvm!XYw!T?ss=2#F_FNAeSVzc4Q[q9x&7P|.^%%b (@F$eSq9g5ZNM}' );
define( 'LOGGED_IN_KEY',    '{G0c9<kQuYBI24,d*O6/a[#de%`ut}Y)6*/ASh%d7RB]s2+Py3/=%d`XM)$DX,aJ' );
define( 'NONCE_KEY',        'k2lIIz(BIwb8&_s(y!7FEe!ySsv~tie^?mT8:r=R^?3=_+m5bdL<o}.Gl9>-NHKk' );
define( 'AUTH_SALT',        '2G!@z?t{De4*+-G~S+rH;5Eid9xrEdhXnJhttDpt.LEhuwVcDDU]H~0{`lQzo_01' );
define( 'SECURE_AUTH_SALT', 'e ZWtJe UO7)Wrr}f!~C%a->nyfRP48IN7mA[A/i0c75 6_wZtLK[l{WoyHBE:16' );
define( 'LOGGED_IN_SALT',   '^BYGuc(-})@|{`J$zHUrV(>P$WI`!4tVAr_N;N7yvSk.bZ) /U0L|X%r+q6#[yTh' );
define( 'NONCE_SALT',       'V9&v&z+P^#Eri2E4B)s5AZ.-XIrM3*D&KgNuUh(7?b1$Zg<[L|+|2aw}5N8(.Co@' );

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
