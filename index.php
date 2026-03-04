<?php

/*
 *---------------------------------------------------------------
 * CHECK PHP VERSION
 *---------------------------------------------------------------
 */

$minPhpVersion = '8.1';
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION,
    );

    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo $message;
    exit(1);
}

/*
 *---------------------------------------------------------------
 * SET THE CURRENT DIRECTORY
 *---------------------------------------------------------------
 */

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

/*
 *---------------------------------------------------------------
 * DEFINE WRITEPATH FIRST (CRITICAL FIX)
 *---------------------------------------------------------------
 */

// Dynamically build the writable path
$basePath = dirname(FCPATH); // Goes up one level from public folder
$writablePath = $basePath . DIRECTORY_SEPARATOR . 'writable';

// Normalize path for Windows
$writablePath = str_replace('\\', '/', $writablePath);

// Create the directory if it doesn't exist
if (!is_dir($writablePath)) {
    mkdir($writablePath, 0755, true);
    mkdir($writablePath . '/cache', 0755, true);
    mkdir($writablePath . '/logs', 0755, true);
    mkdir($writablePath . '/session', 0755, true);
}

// Define WRITEPATH constant BEFORE loading anything else
define('WRITEPATH', $writablePath . DIRECTORY_SEPARATOR);

/*
 *---------------------------------------------------------------
 * LOAD PATHS CONFIG
 *---------------------------------------------------------------
 */

require FCPATH . 'app/Config/Paths.php';
$paths = new Config\Paths();

// Override the writable directory with our already-defined path
$paths->writableDirectory = WRITEPATH;

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 */

require $paths->systemDirectory . '/Boot.php';

exit(CodeIgniter\Boot::bootWeb($paths));