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
<<<<<<< HEAD
define('DB_NAME', 'db_pcsblog');

/** MySQL database username */
define('DB_USER', 'pcsblogadmin');
=======
define('DB_NAME', 'pcs_blog');

/** MySQL database username */
define('DB_USER', 'pcs_blog');
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8

/** MySQL database password */
define('DB_PASSWORD', 'djb5944014');

/** MySQL hostname */
<<<<<<< HEAD
define('DB_HOST', 'pcscomdo.ipowermysql.com');
=======
define('DB_HOST', 'localhost');
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8

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
<<<<<<< HEAD
define('AUTH_KEY',         'XZO$!!66u/6?bddF pvP[`lQ/sJy/C*&-]dGch_Z}7N(c>+}y]=HBAqO+JZ8+9t-');
define('SECURE_AUTH_KEY',  'EQWgU)gpKQjf]+|5J-]$-K{;u8v{9%YXfJRL9,syZD$aOcSn+(tU,:>%N,2aVn!u');
define('LOGGED_IN_KEY',    '[!)hJQO7}Z;YVoW,?a!5p#h|9suT|uf0KyU(*u;vYJ|^MXC8)y.~&8HM;P0GrOgh');
define('NONCE_KEY',        'a0tOa5cGf `7^^xTrMc_};-2e#4o*(VG_uz!6R^XF4Qd4!rS>,|M=J]0(4T0e{4M');
define('AUTH_SALT',        '4g!<gM4_a<i0$wF5e<~EU+$>@$?b*Hgelale^I0sm#fr>}&S?brmwNj[!]_36<~&');
define('SECURE_AUTH_SALT', '-U(y_Z`7<Ce&(l),>)+_f%1VKiui;2|e0raa^6>hZE<nx3zY|r}(k}5/cHbY@OvS');
define('LOGGED_IN_SALT',   'ScEC[WcM3}QX7Hhgb~e.Yt]t(I%NY}K!ALQjD*l*]qmYV@wxg2N@x$P/1zRZf`wj');
define('NONCE_SALT',       ']5j)/z2gTia>e_SA&pCTdTn-JZG}Yf{/Y(#v@eRU7]&X89f9|Mt8jEXwMNU0j+5v');
=======
define('AUTH_KEY',         '~}Ymz2Nbnhsj T70|#h#iJkN/aLjr]LJ}Y;DBQ,s#C#J!#)c$)a[=>fB1W6*5c$ ');
define('SECURE_AUTH_KEY',  ':QnQ8)_=/N2VwxByCn^b |=Qyew@0>?.*D/{|!PwwH-!7~FT^nYb.PT:N|C}E@xG');
define('LOGGED_IN_KEY',    ')u#HE1uWRL`^6uS2p{$B%[p(H MN4bVq2;Y#MS-SNm}FuM8,Lu:o.B:5Bh9>$6||');
define('NONCE_KEY',        '!A`Q{=/>V-AET,]svO_?.&|V;=(OwssF3*]FQ;LA4y4c4Qi6}n!@ufUB/XD[;]<1');
define('AUTH_SALT',        'l(Q~;M{q+NFHJXJUr^9VEx+%-E;<^kpTOIXCrOkv,`yFr]L{bxI&725fwkIW6@>~');
define('SECURE_AUTH_SALT', 'g(bYO>d&0}G_.,_N+2B6B*N%GW`J{lPO]+}w skjmO&eiN|cwUcJz.zwcT^29EgV');
define('LOGGED_IN_SALT',   'tN_U*we]?CJutuB3(AG7WQL:)^@qkM,fHu:3~YR:^SIXd4R&=zW$j-f56=f{8lfi');
define('NONCE_SALT',       'K}Kqbo[yq:$5-KFS=h8V*hKL~YH-*#p7R^!((#6z];@Ei]>,WuD8g_!p~5sxX`Pm');
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8

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
