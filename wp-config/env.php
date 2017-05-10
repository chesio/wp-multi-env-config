<?php
/**
 * Set environment based on the current server hostname.
 *
 * You can define the current environment via:
 * define('WP_ENV', 'production');
 *
 * @version 20170510
 */

// Define site hostname
if ( isset($_SERVER['X_FORWARDED_HOST']) && !empty($_SERVER['X_FORWARDED_HOST']) ) {
	$hostname = $_SERVER['X_FORWARDED_HOST'];
} else {
	$hostname = $_SERVER['HTTP_HOST'];
}

// Set environment based on hostname
switch ($hostname) {
	case 'example.dev':
		define('WP_ENV', 'development');
		break;
	case 'dev.example.com':
		define('WP_ENV', 'staging');
		break;
	case 'example.com':
	case 'www.example.com':
	default:
		define('WP_ENV', 'production');
}

// Clean up
unset($hostname);