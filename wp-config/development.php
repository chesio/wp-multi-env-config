<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');


/**
 * Disable fatal error handler in development.
 * @link https://make.wordpress.org/core/2019/04/16/fatal-error-recovery-mode-in-5-2/
 */
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

/**
 * During development, changes to posts and pages are frequent and the database
 * quickly becomes cluttered with revisions...
 */
define('WP_POST_REVISIONS', false);

/**
 * Frequent autosaving (by default each 60 seconds) is very distracting,
 * at least for me as a developer...
 */
define('AUTOSAVE_INTERVAL', 300);

/**
 * Force WordPress to use non-minified versions of core CSS and JavaScript.
 */
define('SCRIPT_DEBUG', true);
