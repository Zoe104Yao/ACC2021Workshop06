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
define( 'DB_NAME', 'ACCworkshop_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9&ek=S1XV#>jN7s18CLS~anZg](SY{e{4Bt?pX:!M7h55,@9fz~B*[a(.BXEhJd6' );
define( 'SECURE_AUTH_KEY',  '{zWae{y.1loG(*65sKnkP}N` &WogvTS/>mD&?5rKd!YOh%0[p~FDH7eBh]WUAUJ' );
define( 'LOGGED_IN_KEY',    '&MHe{=]y|f6f&I2%$KzpN&%>|IRh(AUl{S}D0wP@1i^qC8*|_hM>ke/[?1O1*fD5' );
define( 'NONCE_KEY',        'mVAC<K]%#{N`P5k-zir~;5+1j]R,4^t+`4V[5|Dl|fKe|,H>Ewf~mbRxD@4L%=ch' );
define( 'AUTH_SALT',        'W$C8`Dq7Q2,@nCEDr)z{<v;u A.@UZ@|qzNm>|.w:7KeL?TwG!4 !,+v::wZPGFu' );
define( 'SECURE_AUTH_SALT', '^+|6st%mNTeJGqUkG_8cFD4d,q{M3Kx`J+EZg;gOeZL>X+aFbu>i3`j&`z|e,Sif' );
define( 'LOGGED_IN_SALT',   'L=@rKOkZ,ZnBylm@Z*WWfRFKWd3bF%;wV%|[o#syQ>,M!g&w0lz]!{2f02xd9f/Z' );
define( 'NONCE_SALT',       'sZi66=(B rS|H<7g=4Z2/|`A#~SPeKt!gqn0/LjZ?8eCE87h-Ad*$6Ui;zEoZcQD' );

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
