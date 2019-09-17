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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4=P>Xcv|#]eZg}djUmXpLixnk_%~C5:(QM9wf-;iRl9vrDL6LxLOA|I#(;uy-:[|' );
define( 'SECURE_AUTH_KEY',  'WLe.nIV;^pyouyr6.4f2%CQ_Z[],sfZbH3YRC7fWRs(o:QTE(>s%6u[6b4Ses(I8' );
define( 'LOGGED_IN_KEY',    'V<*-7u3<eFiOBEh#:ZY-y(eb{8(@>~Ln5FbQbHcJn4~6sD1FVQF$pb7;sF/KDrAC' );
define( 'NONCE_KEY',        'onq7}W,y:f?b]bTY1$b(I+li-=M~<Ks`{W3chq-?+4UIfP9|@Q#aoK^$klI+Q$Xk' );
define( 'AUTH_SALT',        'k~OtCj,>Y=&[q%#tu$s>4hs/bs2Q9q5MT2%k%!c+OU%@9#6Wp,@pMQ-)gd(n?VEP' );
define( 'SECURE_AUTH_SALT', 'Ls$&+3oz*Q$Qhq_5e!+@&]q-e{lb^,<K`|hhswWYeDp0iUMD#`c3Vy{C{=h@fCx5' );
define( 'LOGGED_IN_SALT',   '$XE,&4 ]diAL?Vr(*T`.g+X<Ii9A{MN}Uv,[S3, Rf cVSTDJRV4~!NZg^lwcyF2' );
define( 'NONCE_SALT',       '~n-_!g$`lZq2z*o:6S~5ly^m#k,yh3M?%xcjiAaSL)y8=R!2XBJF~r|| ;*$UHoM' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
