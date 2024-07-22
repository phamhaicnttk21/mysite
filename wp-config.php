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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site1' );

/** Database username */
define( 'DB_USER', 'testuser' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '5czLwA%D}>&M/_x-`h jjGL+_}W5EtN^1YZyrdz5H/1P9Oom^k1r|`nSbn/5O&|8' );
define( 'SECURE_AUTH_KEY',  '6RIYl90Q&*Os;=IBWKS,EtRG=/<Tm-2@thW$)^~Zkp$oOqn^%lnKm=&[P<y#6)^O' );
define( 'LOGGED_IN_KEY',    'F)XcvPLIM9~PRW5xMkLb/s%/63&&Zr@O~2c4Y]>~xn9kDVv8[n5WaWxMl~C02zUw' );
define( 'NONCE_KEY',        '>UH#Gh+hl/-;YBiE&G-~tL:I.4itJ[;-[>goC+33`Ly|pu:=(<EC4[u}QF*_w^+l' );
define( 'AUTH_SALT',        '/DxyJUKf`D]HC jKs_|hhvfh6IDs,,4q+yZB5z5`A1@R=vH^P%jokA:n E:U? 0$' );
define( 'SECURE_AUTH_SALT', 'zI#}ew5 l<d@mpy?6m~rKt#$O/G.>KQXN[=FK+&n{[B_3-PuCc<@4~Mbr=RXo3hc' );
define( 'LOGGED_IN_SALT',   'zLJy>)K{uAm+zN7r~f3DOk:f8|[2Yrel`_%P{T|g/:}rAFYJVV&7!/Ai`=20+r6{' );
define( 'NONCE_SALT',       ' .Q$+ccFcp:W*%x)C<%rjHzQ8+Muu@d.UTOh;YB)?4]!VQ3f*>Z.yiYcz-hK6cY*' );

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
