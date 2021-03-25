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
define( 'DB_NAME', 'industry-route' );

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
define( 'AUTH_KEY',         '*##mi$5`BIT-,xxHTfq;m]%.d 3k9@<K,xX>3m2*mD{<![zA`3k@>1N 10[TG(Jz' );
define( 'SECURE_AUTH_KEY',  '%FwXrt))M#Vh.f]u+e^d5:M_9W:>o4O4!f@;r=Of$.P .ODox=$[c ]&gFnDqB31' );
define( 'LOGGED_IN_KEY',    'We:Nz>7bA,K%ZXC$j7,UWpV]xJoiEq&RyDXZp)60ONvs,&`_jal!Sg[`UM^x5wNJ' );
define( 'NONCE_KEY',        '-hX HU`e-;<^V<-%P T;&wEl^~W>_pjQwu*-Mtr: Bzs7D:rTdaQHcpe+f9j/{Y6' );
define( 'AUTH_SALT',        'CeB;tt/3?A{:+C7sI04L=9irEi6!rbx&z6c!zIIINK9!|bw`5A#CuQ~FuedE!#WJ' );
define( 'SECURE_AUTH_SALT', 'id6.g1@$Q%*X`}*gT.HfGK$Xf?m+U;R(0H#+nLV3kqBkbNh{N&TUwir{j2l;0;#b' );
define( 'LOGGED_IN_SALT',   'tH>U_N-o4:uN6le_[[R>x/~x)-*uG&&b)m!wGw4{] GKpH/H`nocFgs8Tq?LQW/e' );
define( 'NONCE_SALT',       'j-{FTRh:3^BYhKb}`j-B~0r97-;y/v;+gj7ZiA.ndI&1nh2pFVd0b2.RrZ4tM~eU' );

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
