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
define('DB_NAME', 'vihoangson.vus.vn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Ei_%6RWghmoNi.jh?V/{w)Kn}l{H[2v+.Z{|a<Tv;B95wNyv_PR({d&wnOc!>H S');
define('SECURE_AUTH_KEY',  'Vn^$-p)O?;F!1G-)aI:VD+R-q-8+MSz~X@3di-2$@Vto2H.UUIoYrvlv)v%9}wB6');
define('LOGGED_IN_KEY',    'HHHMj|<v=h,S$-ZgQMCJ$|g5M-Mq!o|4m.ugWpP@6K^{o:|wA[*J7T&@xb<<Zhy{');
define('NONCE_KEY',        ' -<}X4)s&}(JEx-1m}>R EuK;dn_i+N=(XD7}&fkgos$+o~-Mn{CO;K`I,(Evco^');
define('AUTH_SALT',        'B~+=oTtLeSJ};6W.]~=`I{ MzUX2[Pz-}+d/:6^al (+ZcHvt*GJ$;tiWRhfM^G$');
define('SECURE_AUTH_SALT', 'i<VTz%pdQm./8t:~|T4 yumR>O0p(.9#^re3.+=KEGxGI|05qJ9MfZ?}It4Ec8;k');
define('LOGGED_IN_SALT',   '~+)6Gc[NJ`@:BE*n+0lj>7J9N(Ia0rqj@ |z^n}~s]<k:FKL2mjl==L<e:+T yU-');
define('NONCE_SALT',       'r~<[asm<)FZzYg~S<15hN*wg-Ad3q,/=K,tKvm`JMuMhYyEfVqhw8+5a)>)PZ5W6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vihoangson_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
