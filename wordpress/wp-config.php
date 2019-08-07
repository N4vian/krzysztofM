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
define( 'DB_NAME', 'kmaszota' );

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
define( 'AUTH_KEY',         'Byka~w#)>|&o<JKQ&kF;FeZb;EKt=`MK#%a{x?$fpaj_%~s7/fi/;6b>a*ae1vS/' );
define( 'SECURE_AUTH_KEY',  '.dcB9YR_xZdHFPh2jK1BXF,7z#FGQonH(H,3X?w+YnW)1sO4dQ^1^3Emk_{i?wZW' );
define( 'LOGGED_IN_KEY',    ']2GrzItw9dt:HIRm^PS[v!z{-l~O: ~~.K =G*PY:R8Y5+%^yQfo}^5.,Uo]@t):' );
define( 'NONCE_KEY',        'zYZ9gK>%ok?%KTl.-bx}qOvKjwSWR_WBo*|Uzd;wF;l`bYrPuTZf:r{HJ|7C|5.R' );
define( 'AUTH_SALT',        'm~h;A5=X7|8joXTC%?aqkD#/{/o{1uG_kx|;_sD7t5H*)D-Iquol&y^SxH$`dZ^c' );
define( 'SECURE_AUTH_SALT', 's{EV+M/JV%^%L^OXcljd-.&&OU@7qDVU}*oO`I[~/-m4>fw]cv14Ze#jRT/dDi5>' );
define( 'LOGGED_IN_SALT',   'y=xl-V?=xaZ#p;2i9N+~Iq!bAS|6NM~kXdUpV9P}&%c%N$_nHOZu^o9,q_@Zc$@r' );
define( 'NONCE_SALT',       '1Frg2mXLqubqbGou.EjDcS(}|(Qj%tuh;o3jxpOjdM/TYALMm@sH>USI_Z#W>Uc6' );

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
