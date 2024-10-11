<?php
/**
 * Plugin Name: 
 * Description: 
 * Version: 
 * Author: 
 * License: 
 **/

if (! defined('ABSPATH')) {
    exit;
}

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    throw new \Exception('Please run "composer install"');
}

require_once $composer;

// start your plugin code here.
