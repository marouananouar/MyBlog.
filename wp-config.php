<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#%W,l}1|K@[q f1zuj<djc!hP/p[#Jwu7C}Gt~QhPPgp#toX)OGOzGF`kCpmm=U]' );
define( 'SECURE_AUTH_KEY',  ')I]B7plPh9 aw[PGjME]Nkaay423!Ag-twtvb1sdS{V!.5`+d8]KK$Pe3%B;yTM3' );
define( 'LOGGED_IN_KEY',    'y}0mKxZ&S,gXayyZmPMXx[C@!uZh^:E:VAk~8jZl~ceeV}Kyw[ep}ge*w.aeK55V' );
define( 'NONCE_KEY',        'YK[jpHf/,`[le6>^M4knyuql2!CDsp/i!aVjc`>?+<OOuG}khYB>eVVM0=v`W-RO' );
define( 'AUTH_SALT',        'pgS$l76RL#jgpi(F}N(IJIpBD3i;z3@M[XAeVa_.daxj$+rvVZ?Yun>&m@A<Pjft' );
define( 'SECURE_AUTH_SALT', 'Y3[ISw5:Ugc4[WoFWpxaDb8mo[g1O=Pp`hDg^-XJ9Pjk-eV[,;DsC^Ku?E,H5Oen' );
define( 'LOGGED_IN_SALT',   '=QTa8iC/BuzoQ?<mU~O:<aBL0T~`owP_<hw)=6$X.x%Tj2$SKm7pcg(:Z;[U(C&-' );
define( 'NONCE_SALT',       '40}MBv{CX4U(t8;II9,1c5iI6.3o$!YE /02~Qc`PAHPEq9!{U&AP3tvL1GqCA.l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
