<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'alttproof' );

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
define( 'AUTH_KEY',         '8py} bOaCgNshGD0 0zpE3?hpQ8jRLDXM,Qq ]y/)w14rIZtH9Kt j{,D8 #Uukx' );
define( 'SECURE_AUTH_KEY',  'uQinosDd.jERoA7<9@TvDSE?BTUp[*ktLXCMdF/![(4XCzEsU68e>1TH(uD9s65B' );
define( 'LOGGED_IN_KEY',    '!Ux96<3/4,N!G^op}WZ|}|2`q!$a*eAEi_Q#m]gxymDN9Ztcr0}JNi{_5SW^lb?=' );
define( 'NONCE_KEY',        '9/UnzX I-Z,Wi_*x?)73)`AC_`)6~,YD ))%z<9~adEeQ3>=oZawU9%@MbioU,Qq' );
define( 'AUTH_SALT',        ' pXN~,o|2ss$JmOp|S~f>]ftUhLr@PK.%W%ROZm8#j>S:m)IB@+# +?5piVEp2`8' );
define( 'SECURE_AUTH_SALT', '_Cb8d}rk=N&)@#*zn^SI9phKadU4st,)4Y(;CFO4@5#X-d8oOL1PZ.!37N &5xGh' );
define( 'LOGGED_IN_SALT',   ']f&gI5?O8ai^ow$+d/S}Iic-xw_pD0W40Vgb*=~LGA]t?29J7RWfgrS->:16T6*>' );
define( 'NONCE_SALT',       'Mli{ -X)),T#uvkIpW%vof;9]K6Rv fHYLr*3@tkw8zaU7J|ga8HL}gU?S4%l65(' );

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
