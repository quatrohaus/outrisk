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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'outrisk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Aywhvoudf9&E' );

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
define( 'AUTH_KEY',         'W(u!>NZMbWSB{N@$1#W!Z*_P$$`^~4&q!3:*xtS*ug*jq6DTnDj^SK%4.e%#p6 9' );
define( 'SECURE_AUTH_KEY',  ':<vYUN>612r_ieL;%x?|*qCq> &CnyfUu$4UE5tPZd(!/)KDOVIU5cd2[i$kSUpT' );
define( 'LOGGED_IN_KEY',    '^3P5IVy1S_II$1oH~%A{/Mj+Iy(N$!4 u>H]31sR}nzm*V;UUfAjG3ljgJiH5oM]' );
define( 'NONCE_KEY',        '?;yA@<Jo_iBi!R2{&tHv/s{_``vX2>J*V4mCo|![1!;YN%d?;LO?3@x51v?c274f' );
define( 'AUTH_SALT',        'MH|<NM52gEoasfaQX[mR]GuMcF&spKD~+DO6;_TqF7,V.(V{tu53fiSAk64_+^_]' );
define( 'SECURE_AUTH_SALT', 'WuwE$CRGz;y&;FAN%ZKuN)o&hZ!mXNuOYm$CX6[ivH@2)O9@*(*p=0-iNG<-YHIN' );
define( 'LOGGED_IN_SALT',   'c6% aWO`)JTT(k}=sQ(z$bu_3|x{Vo]BR;rQla>`}aCcE3l}ose3Z?K5}gI0XLAi' );
define( 'NONCE_SALT',       '&0mKKzDl-*`L(8<{,El -5W|m[J.pZ~X62.BfkOZd#1n?Z!nT5a0g/J{r}.kC@Y_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_outrisk';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
