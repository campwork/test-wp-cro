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
define( 'DB_NAME', 'tienclick_tuatara' );

/** Database username */
define( 'DB_USER', 'tienclick_tuatara' );

/** Database password */
define( 'DB_PASSWORD', 'tuatara1234' );

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
define( 'AUTH_KEY',         'cO>)&i+Z=.@Hf0YR6)9$aE([@TQ{Yqu2llY/Cekd=69iK3Es!jj)S/*zHn,+DgU:' );
define( 'SECURE_AUTH_KEY',  '8(G4.z-hJrei4,qCry66/*t-{rhU`/2I`+Ch[fpK|48l=jXxNmDF_o<<Clh2q]Dq' );
define( 'LOGGED_IN_KEY',    'h&U<!HgWHd m*`<~!( >F;$o(|-WnUmdvGx*}/@/E4Z}R6|Li&Lz;>O}J<t?}rV-' );
define( 'NONCE_KEY',        '&!._;/5NDz$*;s{{%`)p1`flP)EV/Z=Oo?M6G,QX~Jqhh=gz:#lrPW^>dBep?-iA' );
define( 'AUTH_SALT',        'K}m0T6*bf{O`_K^bukW[Qk!g:d%~^/F6##*LLbK}X.Bm>kFFFs<$K<?,$^w?*%;z' );
define( 'SECURE_AUTH_SALT', ')`[Ki89/g@[P`dtN5cAJ=ajG62E+0A27,A[]k@2uUoFVSIVXYfBm>FqZHI}V]uy=' );
define( 'LOGGED_IN_SALT',   'LtV:n.xuINK`p>F#N9E7 `g(JLc[P+|W7lSv:Ss8_JGBW$uGYXcvS=U?3{pi}t;l' );
define( 'NONCE_SALT',       '/@^)|SSTb#[3hC?Ec0OkPv+Lja#tah&:->O$jp[navI}%*;+EeL[N<?|m;-:-ycE' );

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
define('WP_DEBUG', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
