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
	define('DB_NAME', 'smackba8_herk');

	/** MySQL database username */
	define('DB_USER', 'smackba8_built_p');

	/** MySQL database password */
	define('DB_PASSWORD', 'D3v20!6');

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
define('AUTH_KEY',         'B=WH5nLMICWRBJk`/yX.ASUZk|rH=7)I3SF~Ou)97u JWiUiH;sRT Co,TgEoWH<');
define('SECURE_AUTH_KEY',  '<)=!X22$NLW-X-:(a3bPL{QERY~n;=YJzYK8=j.COvt=N21Up[0AX(k6s;ZCvm3I');
define('LOGGED_IN_KEY',    'iX24~=;I~sSzkwk@IIYgaT.]wp!b:,w/#unsM%HlrCFI1^};@PaRxr_4F!YPV!2(');
define('NONCE_KEY',        'dt}l5i8oa9^p!N3=_FO6(d|sVdB0y9FVBqT&lG0s#k-{^7SuF[))BM&hh?{Pt`D:');
define('AUTH_SALT',        '#{GQw%d~UV`Arc6-{Qo#;xDLnznm1pxw1JM)m+QxnOjh`6[ui%4&#PsYBEM=G])-');
define('SECURE_AUTH_SALT', '930M=FQovf&rlbo`DrP@yg2mLMoLIz|b5ip5k )1vf~xAld2)0w)1!Y:wEVkE}}j');
define('LOGGED_IN_SALT',   'zhdT-qa&mD+TbwR`D13g}ic~a0T-4b3symkV]XmJ4D<mrf1Sx-haZl@`+P#yhji2');
define('NONCE_SALT',       'Z7S]`8(JMuyW;E-*3*$TY:lseZlZunhXYV,YF6:JFH}E&nxEv_;fl3Vg&e!`mz+k');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
