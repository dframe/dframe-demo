<?php

$debugAllowed = [
    '127.0.0.1',
    '::1',
];

// DEBUG configuration
if (isset($_SERVER['REMOTE_ADDR']) and in_array($_SERVER['REMOTE_ADDR'], $debugAllowed)) {
    ini_set('display_errors', "1");  // Debug settings
    error_reporting(E_ALL);           // Debug settings
    define('MOD_REWRITE', true);      // Mod rewrite (ex. task=page&action=login -> page/login )
    define('setErrorLog', true);      // DB show error
} else {
    ini_set('display_errors', "0"); // Debug settings
    error_reporting(E_ALL);           // Debug settings
    define('MOD_REWRITE', true);      // Mod rewrite (ex. task=page&action=login -> page/login )
    define('setErrorLog', false);     // DB show error
}

// Application configuration
define('APP_NAME', "dframe_demo");   // Project Name
define('APP_DIR', __DIR__ . '/../app/');
define('WEB_DIR', __DIR__);
define('CODING_STYLE', true);    // Check PSR-2: Coding Style

// Website configuration
define('VERSION', "Dframe");     // Version aplication
define('SALT', "YOURSALT123");   // SALT default: YOURSALT123


if (isset($_SERVER['REMOTE_ADDR']) and ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' or $_SERVER['REMOTE_ADDR'] == '::1')) {
    define('HTTP_HOST', $_SERVER['HTTP_HOST'] . '/Dframe-demo');  // Dev
} else {
    define('HTTP_HOST', 'website.url'); // Production
}

// Database configuration
define('DB_HOST', "");      // Database Host (localhost)
define('DB_USER', "root");      // Database Username
define('DB_PASS', "");      // Database Password
define('DB_DATABASE', "dframe_demo");  // Databese Name
