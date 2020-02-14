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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '~1&8B}1*f=X,gjJ`4($I06n<HG-lHN;v|@]oI21a+WA2R?#GqSit+N9hk|V*`J|E' );
define( 'SECURE_AUTH_KEY',  '#k`?0Ax$P]2^ud&4y,s=ZA08]LZU28U4^DugPFDt{[Ux_[l~*.Zn {`/*>K.}m:]' );
define( 'LOGGED_IN_KEY',    '`LvSu1EY7O`!UJNu82W(Sf`p7yAlKOk>SgnFH/#c.F5_/tC2#r{s7+4{UP?drQ)m' );
define( 'NONCE_KEY',        '+x/z}n/#2>=B4#veE3AK2|MxY1UK[}q-aYGfJVA61tS<ls+N$[iDPkq3BWp=`G6v' );
define( 'AUTH_SALT',        'Rl8` 3=cQ;6EpLJ8.p80v/#QckoF|:8e<oyFU0eXO%):c+p*~M;_2)#Z2[L9S]H+' );
define( 'SECURE_AUTH_SALT', '|qM4lzkU(N2c1K&(q~|u<U)ZWhbs]^t0j%@qy0xIlM}rK^-<-:AR(mN2 o9q*Km~' );
define( 'LOGGED_IN_SALT',   '5RiypO4-Y^W,bU??{*,.|`Ri`I-@lMX@zw6W&aH+1D7 wn[]DnV<X_(V4@t%.+:]' );
define( 'NONCE_SALT',       '~lZYh@i6zWb9*BEK7~z4^tEG>kSnk_H*4g:nGe|pE61(48/puK1yD_8la4GuruD%' );

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

require_once(ABSPATH. 'my-rest.php');