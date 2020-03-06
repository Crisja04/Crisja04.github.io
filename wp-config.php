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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '3lw.D+I{3w&CQXVcrvWf2fh$$migrJyV|_~w(I=W&GcHSn@1D_G!?^yU!XD?IY `' );
define( 'SECURE_AUTH_KEY',  '`8_ME?GP)GMpFr)F+WH+ex;H/(h9bDznPyX36A<4tMSpf#f(`5X&K0XJ,+gW7&t$' );
define( 'LOGGED_IN_KEY',    ']f5`.cB%)HE[JtP3-veMCzLYp]]q+J#ZPC?heEkT:H7=EOH6?pZ]3!nYDS]g||3g' );
define( 'NONCE_KEY',        ';FqRhJ}2,4P?Bpe-(g5nHr(#mSoC~(*k1 y*4R~_c8OmVcEUmU>M`p-fW2V|RYxc' );
define( 'AUTH_SALT',        'Jf&o>U``yuea!i;qv?_{t6XS~GZ}i$~RECrhH|OzP`?t.#Es=8n]u_llxdhCUPlB' );
define( 'SECURE_AUTH_SALT', 'JxE|?n?hvULV4vd&}w=|<8~Hai 4NBQ>W7~~,J~ZjD0$%I^9IP/F[ar&dCdS[I3}' );
define( 'LOGGED_IN_SALT',   ':2YV:jb9 0}~oCLExd(H4)O1z0^a$NEo!-~_+kx?U)4x!E(1%n>j&zGol//Kvb~_' );
define( 'NONCE_SALT',       'y>08Q!2KHudMyPYN1Q#z0vqI1hg)CXIzPfo%7<wQ<}3CTwZOoT?4NC7Pa*5WS!QS' );

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
