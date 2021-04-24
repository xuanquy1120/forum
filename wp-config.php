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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'EDmj7!<6ou^#IhCpRy&k= UOhTB.1/LX1*}T|x_<Rr4SR(p)hx*rtqAk9:HGwAnE' );
define( 'SECURE_AUTH_KEY',  'jT)tfwLQ!MfjT>pA!3:*x%{@4qY^vPvsOiC>k1(_8:)GkvS HF:@#G1E?oJ,kh{K' );
define( 'LOGGED_IN_KEY',    '3oW,Dl<L^bg9mkSln%auE<]pC!+w[i #N:PekoXYaI.(-v$,f$7y|gw[J]9F2U=_' );
define( 'NONCE_KEY',        '%Ri[o([ XPEgAG:rqof0cT~y$,F +4V2u2@L+Ppyx`@IopfHhP+.mauNFK6jj[WM' );
define( 'AUTH_SALT',        'y(z}[q[%-ZHZbeL$xr*P@+tqF2N xY#TSHhCxJa<jA3F(Rso7)A,#C>.MX+I:DRX' );
define( 'SECURE_AUTH_SALT', 'qWxleog}kiDT.Cu&hFnvUF~%wP^c#W|q$J=c]U p[0Vf:w.MH|[G<R40d55LQ?;@' );
define( 'LOGGED_IN_SALT',   '_byN72[mLxH}31x(BvmeOaEC4/bhgBx2]R<)%DO|<_moMY[t~.BLcwUey3Ny6,@p' );
define( 'NONCE_SALT',       'z T3E&M|#V{t)Hj$|_UfS8yj,PYhUf?;<7j]:wp:<*zIGeyYWFPu^5^@Yi {Fvdx' );

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
