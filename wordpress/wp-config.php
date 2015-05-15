<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'bgalgano_pnzf1');

/** MySQL database username */
define('DB_USER', 'bgalgano_pnzf1');

/** MySQL database password */
define('DB_PASSWORD', 'PEppers119');

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
define('AUTH_KEY',         'hIm{C7-Umjq-l+(/M zE7V6gz*>W!|N-.)%oW-M~K$t@dXaOi|+yc~0a8&v[dff{');
define('SECURE_AUTH_KEY',  'ohvV~Y{aa9rU=/O^NO[k+_|$Qf&%N45IWOSl(vCSduC<r^#TmADcx ^hg9;>>+je');
define('LOGGED_IN_KEY',    '_}cxL[x4K7&g1~U>,-(W:t5&rz9!MF`SI-`{HVD7 [$DUUg!o+2G|D4|v^VA9{d-');
define('NONCE_KEY',        'V-|1%|O2yA%pn9c1+fp|V<=qiA&mrmFA]e`$-0%rVHCMK<+D;FGCa;~W_Vb8i;MF');
define('AUTH_SALT',        '8=>ojLb5]-ieDtT6gYABJU2|PV>XoN3*$qKiPyja)4Ka9X8|>aaE8s5 &S0T&Ri+');
define('SECURE_AUTH_SALT', 'j$V[?-BWG+?^62L3nN:I]+14)rP[P/:cu48;I;/rPVim) 4$ya-B~Z@J;rDOkPdD');
define('LOGGED_IN_SALT',   '73K0uo+vTQ|.QrzRk8&of^PMCDIr&.-r8fwL:2)1t`lwtnk#P>Eo(8<qqjb5r7o-');
define('NONCE_SALT',       'Q^B F?L<*at|E)zoEgVc),1+F?cP(KKn4kzG!r`YMuN2j-+P!S.L!SSz+]oO]GL`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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


define('WP_ALLOW_REPAIR', true);