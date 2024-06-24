<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'blog' );
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
define( 'AUTH_KEY',         'M_f7c%(-]&yum,h|f:t)!2S 2=_/+XMFcGj9~,_=?6[P3C,qt{/)i4derinW@||@' );
define( 'SECURE_AUTH_KEY',  ';u%V|iA4q{elvb/*w&6?!U#Xn1[o~*XOU){A0I,Jb7a^[1~@Uke?U,a;=thnNViA' );
define( 'LOGGED_IN_KEY',    '[4!*r&0odK*+E$!MJqzIL0y4RFh@%6pc#lEj169Qhy{aj@k$P7q(]qh&<=G;#H~n' );
define( 'NONCE_KEY',        '8x3Qlg@dMm,*ra%Tts8ah:RqW7^G8Ajll{3WwlM)Re=C#yP,nTzp+j-{-y+fy7gw' );
define( 'AUTH_SALT',        'p+R<DH#4Ng&mK^%=3(8l.eT+Wc9Sh]zFOiTCB_qZ%2Ufx>1Wt sZ$KJh,!0RMAxQ' );
define( 'SECURE_AUTH_SALT', 'Y?P(m!/7O&Ls4=zbW4*3c~4~q3BlD%Z *NG<x*LWZzzw-1j/=#frJc5v8+SUo6+P' );
define( 'LOGGED_IN_SALT',   '2OUb+CEL1l^&IY3rLyAID$z/{.5TCd?S;6+CWCva:Q4xO~Ya9ZlTY0wcRfOuN )N' );
define( 'NONCE_SALT',       'GVE0.{R;Y]z ;9U8i^;SOQI ^b:BwGmf$J8LfGcC6az#L ZVo58iEGJAYV):yLr#' );
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