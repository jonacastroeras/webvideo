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
define( 'DB_NAME', 'wp_pagina2' );

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
define( 'AUTH_KEY',         'N5S|.rVZ#cAl@M<MT:1E8rl6[P4itTUUr%Wm5I{x=IS2m95^$a7)C ymU~7 a@YI' );
define( 'SECURE_AUTH_KEY',  'aE3Yp7M{]S;QVmj>J=CHhhenl>s3:)gHv[V(1ZT;.sYuiMGjL!hP?P#Q~o,)@fZA' );
define( 'LOGGED_IN_KEY',    '?qJL[xTtnqn~YqF}Eg-vLZgccF]{9-4W`nhliliW]UTl?kph&4,%oI%uV&Mqfe5~' );
define( 'NONCE_KEY',        'RMB-Vs8{0OONQnhmRrwP#=x7CSSN7ukvaaIvrZJh88k|%5=IuK4y_E:I*Z5?L+^A' );
define( 'AUTH_SALT',        'Ui~=;C_-*r/HmgGJ8lsQ.G9xBtlAU|iv&#+>j}aWTL+rHEeqywm<VM!DJl&`&cn1' );
define( 'SECURE_AUTH_SALT', 'L:tu80Nu({JDLz0hbkqsg7SMu8b>I%@T=V,>R;uFxPE|wZ-(sU:i%TYWP>$2qh.l' );
define( 'LOGGED_IN_SALT',   '2t#`M8>f[O9qo<W9%OsY2vQFyR~uOD#AQD?4A<g k&Q`>onF=s(p]$*/jlKwv0qa' );
define( 'NONCE_SALT',       'u`~FRHx,J8h_H/n945HV_$CzeAgf{{<COx0VTN}bR` m(Ho1S9lP[TQ%Gt@/#,}G' );

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
define('FS_METHOD','direct');
