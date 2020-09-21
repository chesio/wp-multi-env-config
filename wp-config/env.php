<?php
/**
 * Set environment based on the current server hostname.
 *
 * You can define the current environment via:
 * define('WP_ENVIRONMENT_TYPE', 'production');
 *
 * Note: this file is ignored, if `WP_ENVIRONMENT_TYPE` environment variable is already set.
 */

// Define site hostname
if (isset($_SERVER['X_FORWARDED_HOST']) && !empty($_SERVER['X_FORWARDED_HOST'])) {
    $hostname = $_SERVER['X_FORWARDED_HOST'];
} else {
    $hostname = $_SERVER['HTTP_HOST'];
}

// Set environment based on hostname
switch ($hostname) {
    case 'example.test':
        define('WP_ENVIRONMENT_TYPE', 'development');
        break;
    case 'test.example.com':
        define('WP_ENVIRONMENT_TYPE', 'staging');
        break;
    case 'example.com':
    case 'www.example.com':
    default:
        define('WP_ENVIRONMENT_TYPE', 'production');
}

// Clean up
unset($hostname);
