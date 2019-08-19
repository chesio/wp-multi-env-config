<?php
/**
 * Staging environment config settings
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
 * Limit available revisions to a reasonable number.
 */
define('WP_POST_REVISIONS', 25);

/**
 * If possible, use system cron to trigger WP Cron execution.
 * @link https://developer.wordpress.org/plugins/cron/hooking-into-the-system-task-scheduler/
 */
// define('DISABLE_WP_CRON', true);
