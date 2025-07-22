<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techblog' );

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
define( 'AUTH_KEY',         '*r.1GPT6X7J]S0Og3g>qnH?7ms7gI4(i0LWL/J7)wH}=Uf#Bl`O,~WnzFI,R`@](' );
define( 'SECURE_AUTH_KEY',  'j#tpfG/$Q1(<pT_-KqS}XCnY-uTm@Z,MEo?cfWqT?@)AaGvg8k06Adgf)K2|`.z~' );
define( 'LOGGED_IN_KEY',    'AN=9q[w(kI_Ml3@.<mn1$PHPG:E~3E87f]ImXCtJVEl]y5x+V7{so!WY)X1wg2KL' );
define( 'NONCE_KEY',        'aB?z^3E41`>13@mcf+J+&a>uzL{Q_Zeda4?$D9JbS]_I,0O/naV$pW8u&J2iR4J?' );
define( 'AUTH_SALT',        'n.siU{Esqh`Ud5AiU@y>u%+R;pO!, L(!ozDpsxa;~tcC{!pLOL;w9@A-Y29g=yh' );
define( 'SECURE_AUTH_SALT', 'rc~r.W*A[jSO/!l=ms(|Mz(g6E>w d65q~2.;wM=G00B1=/7K%=wb:&&CsRDWcME' );
define( 'LOGGED_IN_SALT',   '9FI_&e1i:!IxRmI0wJ7PRtLFzWFo[d+mWtCqq*v`9&lc>afyi0~qe}O2oxM *r:*' );
define( 'NONCE_SALT',       'gjbrh9rF v#UgEC$%$ahhEsVm^}Q9p%d<G?lLHc3bS_83EM@-]wD8ECr(nQsW6%T' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
