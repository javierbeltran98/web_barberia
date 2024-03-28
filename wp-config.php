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
define( 'DB_NAME', 'barberia' );

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
define( 'AUTH_KEY',         '[*@eAkay=zJ{]p;[W[`;$10qQ`zoOE3C<w<OibGMuo.jGYZc] 6IRg,pLi28Am}K' );
define( 'SECURE_AUTH_KEY',  ' gK_n26H!K_b-=xqG;]Tf-9[/];Wa!bjqnq5Sk-qL[e(;iLl_t2cnp025duyo4)5' );
define( 'LOGGED_IN_KEY',    '}2R(N^5cqZE=z.9YSy;A%)uc6mHxgzucnZH2<P%{E*nh_$cdedl(b/9*#?-AaSuN' );
define( 'NONCE_KEY',        'US+x#BG{kWZX~S`+6^Vh.f4FS;!mKF/F?5qb(1c@Wg~3EUov e]=41b#xNfJ{A87' );
define( 'AUTH_SALT',        '.;#Ql+Deo^,Asd]ajXm1gu+q}zl+LaLb?*G{P@cgzh37T@(5#y*58XY@P4BK82uf' );
define( 'SECURE_AUTH_SALT', ' [AyzBGiO{o(0wdp:y<1vDby^SMOpAGB.bB|/h]#APCa1cw{]h5=C+9j{XykUA69' );
define( 'LOGGED_IN_SALT',   ')c.MHEWfi*ulU|HH]KD<]k^1Js[}(47=qwHvt|3&T1Iz<$<ZQieEWRp1:]=S7&&N' );
define( 'NONCE_SALT',       '8Kd@}J``hn;>8P;Cf}s%(HY rZWwenPEy:c<H0Q+]z%a!{Q^;O[ZP<F<Tw/ckTjV' );

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
