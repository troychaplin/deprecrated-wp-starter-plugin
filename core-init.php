<?php
/**
* This file initializes all CU Core components
*/

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

// Define plugin path constant
define('MB_PLUGIN_PATH', plugin_dir_url(__FILE__) . '/build');
define('MB_BLOCK_PATH', dirname(__FILE__) . '/build/blocks');
define('MB_INCLUDE_PATH', dirname(__FILE__) . '/build/inc');

// Check for and load block functions
if (file_exists(MB_INCLUDE_PATH . '/enqueues.php')) {
    require_once(MB_INCLUDE_PATH . '/enqueues.php');
}

// Check for and load block functions
if (file_exists(MB_INCLUDE_PATH . '/blocks.php')) {
    require_once(MB_INCLUDE_PATH . '/blocks.php');
}

// Check for and load block functions
if (file_exists(MB_INCLUDE_PATH . '/core-blocks/image.php')) {
    require_once(MB_INCLUDE_PATH . '/core-blocks/image.php');
}
