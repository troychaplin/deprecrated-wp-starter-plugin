<?php
/**
 * This file initializes all CU Core components
 */

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

// Define Our Constants
define('WPSB_CORE_INC', dirname(__FILE__).'/assets/inc/');
define('WPSB_CORE_IMG', plugins_url('assets/img/', __FILE__));
define('WPSB_CORE_CSS', plugins_url('assets/css/', __FILE__));
define('WPSB_BLOCK_JS', plugins_url('src/', __FILE__));
define('WPSB_BLOCKS_PATH', dirname(__FILE__).'/build/');

// Load the Enqueues
if (file_exists(WPSB_CORE_INC . 'block-enqueues.php')) {
    require_once WPSB_CORE_INC . 'block-enqueues.php';
}

// Load the Functions
if (file_exists(WPSB_CORE_INC . 'block-functions.php')) {
    require_once WPSB_CORE_INC . 'block-functions.php';
}
