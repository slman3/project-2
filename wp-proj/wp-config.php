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
define( 'DB_NAME', 'slman' );

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
define( 'AUTH_KEY',         '9`uB.}_^2=YnGv>=kJvkDvQ*~&K@|q} !i&IBR] 3Ha|v;KjEo2<Z;AORf&zf>5z' );
define( 'SECURE_AUTH_KEY',  'aMX ~lhV#)RSa+xoK[pabyfFGeV-b|&RUas%(vOyjO5: +<o+T_e}]yg_^0!_ddE' );
define( 'LOGGED_IN_KEY',    '=&Qv[jtqr8CO^-.FB|vaI`Tp6KgusJoK2o+3zC:e2nB2G>}v/& |6t?|ftp$hsIM' );
define( 'NONCE_KEY',        'GOD1(iT,?V>oe|/,]UD`w~R.1tR0BtU5!QjJ6xgXle05!tbWJhygHNOFH<avyqNF' );
define( 'AUTH_SALT',        'N(s*C46v@N0n$#JifZ)8+Lg4$PCHIBa0U*-w>l-xRBt[F.v+`[]Rhl-Ij0$>/Q<Q' );
define( 'SECURE_AUTH_SALT', 'e/K}tE,,:Dy*|_`O,ztwPmLbT:c^dGG*zpXZts0of{Ua%>rRuaC$g[(.x9i(aAXl' );
define( 'LOGGED_IN_SALT',   'MH2J#OKRyl3j<K%:K))W2-|vIAJEH`,OG&b3ACT,1Q>hke1b$leetNP^,`!b-+3.' );
define( 'NONCE_SALT',       'mhvzRUU94n<f*rTk,F~8aYv;@s;VQ>=EXj<~TbJ+2nb5L==&`&/kiXz.!> g@~%U' );

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
