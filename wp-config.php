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
define( 'DB_NAME', 'kotki' );

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
define( 'AUTH_KEY',         '<QImBG.msNEe[PG~cS4t[X`zE(wrid@#S*C4?]pwzK/y5Lx`l9X(Cf6R80Bby_^O' );
define( 'SECURE_AUTH_KEY',  '~raewJQMm5m 3! f=vr tX~sj>5i( uUCetmzId)KRV/PJVwt_j}[1(v+31v|a@X' );
define( 'LOGGED_IN_KEY',    'pG;a$>_&O(CY4xYDWF+e#WU8^+Lx+?#y@haTm2#FUj/;aoV}BOg]!HFn}]rK_ #[' );
define( 'NONCE_KEY',        '*UYid~58&CQp%|25X{`Ir[((x+qI5 $P(IH_0W6*N`x;4c#M~hU+|#Wi1`y)cvU9' );
define( 'AUTH_SALT',        '2GBkJeCe8QJO{hvQg%U|5}u{W|p-JTc+9IT+8v*V(.+4b`dp,&4VGk:@3]2Q&}4x' );
define( 'SECURE_AUTH_SALT', '4qIvRBA_b7pMEkE^Qwq|Gp8_r3-:Ne[yw{^a[vjp-q>:5|w4,;H5iDA{$BTZ}JJT' );
define( 'LOGGED_IN_SALT',   '[|;_@P>l-$LO$ V[R(9/?wfIi,bGnmc[_q|jeQ6B%h4Ic*dUMpM*C;nDYhcF!I*:' );
define( 'NONCE_SALT',       '(.A{/$?6YJL/E,f;0I{J*@viCd 1P3O~Q_)lh]*^`q~ztpYtsl>Wq`xM)cFg,{{u' );

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
