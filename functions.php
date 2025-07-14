<?php
/**
 * main-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package main-theme
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.1.0');
    define('SSW_TD', 'ssw-wp-theme');
}

// THEME SETUP
use App\Theme;

/**
 * PSR-4 class autoloader
 */
if (file_exists(__DIR__ . "/" . "vendor/autoload.php")) {
    require_once __DIR__ . "/" . "vendor/autoload.php";

    $theme = Theme::getInstance();

} else {
    error_log("Please, install composer dependencies in a theme directory: " . __DIR__);
}
