<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'be_product' );

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
define( 'FS_METHOD', 'direct' );
define( 'AUTH_KEY',         '/urn?v Co59q20fnhXgO2vj*6s9dV?4R`$!Ptr|W3o18*hgsq5)!7-X_J?EMYxF=' );
define( 'SECURE_AUTH_KEY',  'bZjn{%1c/H,W50<[o5.Bxy@j+m_BJzNN7,q%%(V5=-Q-V]IMDeYtQEFFf78In`1i' );
define( 'LOGGED_IN_KEY',    '6pd}5%#AOtbKxT{:khPM*_M@s?u`HV2M<M6%_r3Q_~Ul3:D#^7[)}-<`8G{<!-!e' );
define( 'NONCE_KEY',        'bs~EA(E|R6jtneiwK,zv|82GK@ij&+j*] l]2(Rp&0/rQG%0aS?>b.b4c%?u-?#6' );
define( 'AUTH_SALT',        ',r.Ows,Ja HH-^E;(QGOLrdkP=JA 7#ZyV^ O&GWxflS7JeOKLi|79%>Fy`U|M_q' );
define( 'SECURE_AUTH_SALT', ' !Q.at/):tny9r:TNz/duo~*5aCiscN{hL~Z]Fxw=> /pBK=#pEb59Eg]X-RM8XH' );
define( 'LOGGED_IN_SALT',   'Na{dlFc-iX3+.R{A)[W*Fb4Fu8CdZU&l*~{_5})&6) k<G>{)%q6zhgBhc;e K.g' );
define( 'NONCE_SALT',       '/IirPL3s>FN9E1vq^[eC.=~:1]%8B?jG`=/atY$cgSHy-Do{U}n@hgX5:k=8~|+s' );

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

