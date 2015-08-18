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
define('DB_NAME', 'wp_db_template');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'iS.qA+]Xv}Y?xlqKO+-#t`5D-9nEVbG+I+-6=VqnY?X)K{`%AU?Lo-6/$H_HuHDm');
define('SECURE_AUTH_KEY',  's/*p0qyMJC{S4wt4@x%^B[lV+4g+8uyZ8{0G-NR1oq8p7-l,L+g9sw&*3-2,*y+9');
define('LOGGED_IN_KEY',    '!)A*)<;7}h%y690f?wf+Gn2WY_Rn!Z}%{a~qO>o1W`tpW#G6Lc:)T~FqBZYIOS=f');
define('NONCE_KEY',        '182#P+@%#F}9&[NJ4V: .O.KX~`8$J%F!vd0uh2`+RHjaV9?ed@y+9Y8WA(Nt?al');
define('AUTH_SALT',        '#1}p+aK+63C+grvSp50+RW^!lB[R.ufI_H;2(8#*l{-V]3riuGOZ#zC`eUGC92f0');
define('SECURE_AUTH_SALT', 'gRw}z#Q/g2P|}A+mD&<KV)odkXML=%?5RN!V?/:nx`Cem|y/j-;7VBy?;i{^@T+8');
define('LOGGED_IN_SALT',   'M_oCEK_EbP)J|IS6|d^zZR>V{Sz(9)</3XlyuR3.]A=.:TVcW59W/MIgRc%WD{j;');
define('NONCE_SALT',       '++q-rA9W`p.Z_^lO/2tc~&{H?BT>G*4OP h?(R:}kjO&^k+`-,Tt74CfGO3+fs-A');

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
