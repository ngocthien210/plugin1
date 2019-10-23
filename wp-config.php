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
define( 'DB_NAME', 'plugin1' );

/** MySQL database username */
define( 'DB_USER', 'plugin1' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'aPDdKaCWR78`!5hR}4a8#zi-%$:pCXM_hMnv1Iy!rIu/8W[vYikTn%]K:91#o<ed' );
define( 'SECURE_AUTH_KEY',  'yy4]FIoCL`79eELD>4LLT$P|siX8F7|uZ3tmn#rlV8B9Z=_t_pDWE{VX%;ls7m=T' );
define( 'LOGGED_IN_KEY',    'h ?KD.:?uvQsf/1~o+bv;6~-=*2B0n? 3jSuO(|ag&=0EXaSiTYz11lh?3TW%qN1' );
define( 'NONCE_KEY',        'rhPp%rJEsCuUU:uoGF+P/dS2wqh3S~~qUn.XxC6{G!SYk3 a$01@pSHr!T:WuOKL' );
define( 'AUTH_SALT',        '/g;XwuW?,4`)PK@.w < TsR.Ey&[F6*ba7#%=/KU-8r~t.c+>A`-W_K`Mvl~S<e,' );
define( 'SECURE_AUTH_SALT', 'S/aeQi.9O%,Dxa2es<0C#7Rs1c_q2GXpJ-d4Ks6zRALQq`uP8=0A-e%fKjOolsIO' );
define( 'LOGGED_IN_SALT',   '(?Zr{D[T!<@x--+Y|exi*iMN6aM[)L}SzaRh{T<6;bJ{@6R{*NmAJqw Rw)xAVr2' );
define( 'NONCE_SALT',       's5 >m2l4Y.f^{3&rN=.&/DZefQO|]4v)@C<TUV~#Q;[$Y=rF.l2o$h22BdfAO@Ev' );

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
