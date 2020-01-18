<?php
// Environments
const ENV_DEV		= 'dev';
const ENV_STAGING	= 'alpha';
const ENV_PROD		= 'prod';

// Active environment
$environment = ENV_DEV; // It can be dev, alpha, and prod

// Host and scheme
$hostname	= $_SERVER[ 'HTTP_HOST' ];
$protocol	= stripos( $_SERVER[ 'SERVER_PROTOCOL' ], 'https' ) === 0 ? 'https' : 'http';

// Base Url - Used to refer site url
$baseUrl = "{$protocol}://{$hostname}";

if( in_array( @$_SERVER[ 'REMOTE_ADDR' ], [ '127.0.0.1', '::1' ] ) ) {

	$baseUrl = "{$protocol}://{$hostname}/btheme/html";
}

// Base Path - Used to refer local files
$basePath		= dirname( __DIR__ );
$includesPath	= "$basePath/includes";

// Resource URL & Path - Used to refer the resources
$resourceUrl	= "{$baseUrl}/resources";
$resourcePath	= "$basePath/resources";

// Templates URL & Path - Used to refer the templates
$templateUrl	= "{$baseUrl}/templates";
$templatePath	= "$basePath/templates";

// Site Name - Used to generate page title
$siteName = 'Basic Theme';

// Composer Autoload
require( __DIR__ . '/../../vendor/autoload.php' );
