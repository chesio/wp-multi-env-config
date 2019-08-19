<?php
/**
 * The base configurations of the WordPress.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 * @package WordPress
 * @requires PHP 5.3
 * @version 20170608
 */

/**
 * WordPress Multi-Environment Config
 *
 * Loads config file based on current environment, environment can be set
 * in either the environment variable 'WP_ENV' or can be set based on the
 * server hostname.
 *
 * Common environment names are as follows, though you can use what you wish:
 *
 * production
 * staging
 * development
 *
 * For each environment a config file must exist named wp-config/{environment}.php
 * with any settings specific to that environment. For example a development
 * environment would use the config file: wp-config/development.php
 *
 * Default settings that are common to all environments can exist in wp-config/default.php
 */

// Try environment variable 'WP_ENV'
if (getenv('WP_ENV') !== false) {
    // Filter non-alphabetical characters for security
    define('WP_ENV', preg_replace('/[^a-z]/', '', getenv('WP_ENV')));
}

// Make sure HTTP_HOST is defined when running via WP CLI
// https://make.wordpress.org/cli/handbook/common-issues/#php-notice-undefined-index-on-_server-superglobal
if (defined('WP_CLI') && WP_CLI && !isset($_SERVER['HTTP_HOST'])) {
    // Environment must be defined at this point, otherwise hostname detection below will always fall back to production.
    if (!defined('WP_ENV')) {
        die("WordPress Multi-Environment Config Error: Neither HTTP_HOST nor WP_ENV is defined.\n");
    }
    $_SERVER['HTTP_HOST'] = 'localhost';
}

// If no environment set at this point, set environment based on hostname
if (!defined('WP_ENV')) {
    require_once __DIR__ . '/wp-config/env.php';
}

// Load default config
require_once __DIR__ . '/wp-config/default.php';
// Load config file for current environment
require_once __DIR__ . '/wp-config/' . WP_ENV . '.php';

/** End of WordPress Multi-Environment Config **/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
