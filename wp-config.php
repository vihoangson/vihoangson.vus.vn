<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vihoangson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123412341234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w&xbVon*W>%F)xO,dZ{}h}*eWyOA%}6+3z%~| LWC<`|qYNrh49R+r/[!)eX{mKw');
define('SECURE_AUTH_KEY',  'bAiyq2`Xl-(|gn4@MR=z$MMD$06OSoDM$sAQL[SN+qA*Bf|[,-xg]bI?>?kZ3:$v');
define('LOGGED_IN_KEY',    'V(,oh7|aA;@Y_~j@1;Jr/r) c!k <yd|]19a##VD#UAK NR~Jk1Yk#Db]`!4tPF|');
define('NONCE_KEY',        'Pvj+>r_vSALj;OwWJYzRqbfjqIM?$JEsaHDm!BC{kKJWfKtyBA:7tjQB8|}O3!hT');
define('AUTH_SALT',        '$AYCaXz[C^~d/7MQ;~-TU(N[G722((cfZ~#XDTD3hC8J7a)zi3L+k+k9K6->,-q|');
define('SECURE_AUTH_SALT', '.W*MqYV7wa%lv6xS~lxn5rAJdDX@+}{UP|6Y@9MPA6~`JjJTN@RGY{UAacbtRBqc');
define('LOGGED_IN_SALT',   'Pym+c(w1^a:~]_xY-hczI(vAK3:3^+$w~F&3g@vSE~A*o?K+,NB](2p}c<+2ayI+');
define('NONCE_SALT',       '19kuWeOj*iLkq, -&msR5x0Ho+s|WLCMV;MWJ87RS-0__|:FJ0`_S.$+f=-cc5Q@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hoangson_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
