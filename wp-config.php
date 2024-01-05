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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/u334513117/domains/pinewoodretreat.in/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', "u9514513117_pinewrtrtfm" );

/** Database username */
define( 'DB_USER', "u9514513117_pwretreat" );

/** Database password */
define( 'DB_PASSWORD', "#hdeEgKIO@&*jj!" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'JNE4L$Ys@;0zz]oaZwzkX?(]j$(2O(H_K>hQ|B5zlTU_$w!,0k>!g&}{MW%l` $U' );
define( 'SECURE_AUTH_KEY',  '/2EwtmCd3CK;}]}B3<pkO.p5Wj=rM6B/X@F!rM3yJ.KgEK2gx=!quV3[OIzVy@#=' );
define( 'LOGGED_IN_KEY',    '!ZB|9TI!H*A(q #<)e#:y=+MJVvD{8ksnUYPof-*ABu[KLufs0}-yd^V:tX5Lt_]' );
define( 'NONCE_KEY',        'DU/LuoEmXsZ#+8z)GB-0Aw*z6V`*r$&w:E!3cw@w9@l6=L33%mQ//qV+oV54XG~T' );
define( 'AUTH_SALT',        ')O3?f|sE,|1!19*sR-AN2Zp%;%{TfxBIaEcRoyF-_J_42lP1]X-5%4JOI_;~tsxu' );
define( 'SECURE_AUTH_SALT', 's:$1;IS&-es^w:|GYYBUjB#2}-zf&C>?6LXaSSX=h2E(]v)Vp#6DZy,>:.mXg?)t' );
define( 'LOGGED_IN_SALT',   'L=@Sfr!krU9H,vzU|68qnIQ*WZ|!e9,K#cg4.@,AoK )b``!}y}n{jAQc4-2AO7N' );
define( 'NONCE_SALT',       'KU`~M4wyj31<nmSA2w/ ;|&]4]E4o+w@3q1sfN!cs~Vh(NLXq*.9f6wM>_}[#s{b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pwrd_';

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



define( 'WP_SITEURL', 'https://pinewoodretreat.in/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



/*Disallow file edit*/
define( 'DISALLOW_FILE_EDIT', true );

/*Hide WordPress Version*/
add_filter( 'the_generator', '__return_null' );

/**/

/**/
