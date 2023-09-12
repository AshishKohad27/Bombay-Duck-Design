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
define( 'DB_NAME', 'bombay-duck-design' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'pramod@123' );

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
define( 'AUTH_KEY',         '<*Ucp>`0v)*rf0~-LGYr}5{6g:pDdzr^+O:[3^_/CN`1j4b}D/5 oEfBT .`p6k6' );
define( 'SECURE_AUTH_KEY',  '$.Jwt(!JcQ6L2ls~/gmK]3 Pn{+^Rx[|51HNkxyG%1&;`l7.uo:UX;T_6pE0 q+g' );
define( 'LOGGED_IN_KEY',    'Q8ektZzvWzOW?V>+rrb?*r/Ou4Kan{#:,}0Ua(IG}?nq|1|m`c[kk/(oFVDQcm,a' );
define( 'NONCE_KEY',        '38OaYd=x%w?a6L(%%_I2mO;4VlF,c=bm=V)-Bxguwe$k(ru-*dc-rX5*P:@iD4![' );
define( 'AUTH_SALT',        '=kKl$-v8M+OuI@PEYtv``.!_4<d;=o2;G{h^{xP[M#7nf}J:#@&3<0|TQ@7B0L8s' );
define( 'SECURE_AUTH_SALT', 'XZJU7M@u4r66;,,qA/54%z%B{!i5f-{I(q@f0MVJC_Dx#jHKFJ}YjE:@4tU5BWcA' );
define( 'LOGGED_IN_SALT',   'RQ9j1{sz#=o$4K&/k. b8yGIbx,^PK~^67`$).]+?n}N-$W%pxaVhXNp+WN6U+>1' );
define( 'NONCE_SALT',       '6,eNLes(IR]Y[-0eV]e1{DIh4$P3(Xdf[D?g>gz[)Wg-+zGH{3w7jl*Y9|.>>U5V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bombay_duck_';

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
