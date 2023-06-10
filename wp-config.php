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
define( 'DB_NAME', 'tg fragancia sac' );

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
define( 'AUTH_KEY',         'n+Lgx.F#}6Eczq(a6:jIR$JZ4=NGC8Ma.kdgI-STQ<T1^J?upgOcV?PF4U0mK.N(' );
define( 'SECURE_AUTH_KEY',  'r3w@/Yf3z2L.BPwd.V3JaxGZYC-LriV<P~yTAnN+;puy$<HSUqw[Z6;H<=DUtK(l' );
define( 'LOGGED_IN_KEY',    '(>;n=D]W8=c0[G/UwN@} +Hexl9&0`@p%mSN7|2ZkY>d#v~{!HOBFea;!G/Nc-Y7' );
define( 'NONCE_KEY',        'X_Z-N!M2M4mEb.R4}jq_s)^-pQ6YZ>|e`Njd]6&l&jMXc!S~PCx2n`2fCKKJI6uA' );
define( 'AUTH_SALT',        'ESurPSYA_=aOAGF)0t8[z]rbX2C) zpl[l3IEtD;:jV}i_-{x/@<FGpXDH/Y>Y/m' );
define( 'SECURE_AUTH_SALT', '!]S;@fLbU:II|Bn.m65eN4)jhNEm|,G5{HR5TUX6qUTBWW^OX3Yld/aC.GYHH3E?' );
define( 'LOGGED_IN_SALT',   ')jz]uvc$$sNcaY2vJRRHqA:;FxIHq-#JkUP=nVyyGL}[lzy_3 !2>iD%8[y$.{M*' );
define( 'NONCE_SALT',       'h^=%&Me6r0G`Hcj#YjB?i@2Vv{Q9$7>D6B3^I5nvKzV#CB9/aD5!.:r0mSkN#sb%' );

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
