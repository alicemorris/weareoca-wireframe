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
define('DB_NAME', 'wao-wireframe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'vyH;KRYg%YN[0Z0}wuU>1l$(_Fl;26P@[x/}3_ pEv?ePJvRn-$)s8mNqc^Cg9.e');
define('SECURE_AUTH_KEY',  '{WvFZ@O.Rv5AHMDq~#IPK#+Xa{7<(~{2!f)ue8<Ej!o1+? BZM!~cpYp_}=HHURu');
define('LOGGED_IN_KEY',    'pEV37ek9E~hJp7*FnsV99^*9gu@`EShkRH_L3DQCz=>cT|O8jo6q W:%FBoz(Zs4');
define('NONCE_KEY',        'V7|sv`]T;7w_]&P61)AYqvI8b1M9B bTxwhEH2CO:1Ed?.rb@>,rkNG`0@2Mo$?A');
define('AUTH_SALT',        'LXwLPszdE_X.A0Ra1MQ_Yv<=;6w,Tv7*h>7BpP10tJHDRwshcTETS2v |%YenOkX');
define('SECURE_AUTH_SALT', '^6izUpcepEskbVgu(88*P?IxYafn4>I|HgbG1HMuoNpj].#A=oe_ZUBzJE.ah`(u');
define('LOGGED_IN_SALT',   '&8)YYG6Y1`GQp>dW;{DxCqv1pd_R|F^~T8XC/.&OP]@>;Nny5vre+(W[Ei^##Rc+');
define('NONCE_SALT',       'HS{8g7p*~mc5FS/z%y{uKy9R]=0h0dxe#jCmB_^?rOwtp&x26Re5;}ix<4&HOCUW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
