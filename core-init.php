<?php
/**
 * This file initializes all CU Core components
 */

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

// Define Our Constants
define('BPS_CORE_INC', dirname(__FILE__).'/assets/inc/');
define('BPS_CORE_IMG', plugins_url('assets/img/', __FILE__));
define('BPS_CORE_CSS', plugins_url('assets/css/', __FILE__));
define('BPS_BLOCK_JS', plugins_url('src/', __FILE__));
define('BPS_BLOCKS_PATH', dirname(__FILE__).'/build/');

// Load the Enqueues
if (file_exists(BPS_CORE_INC . 'block-enqueues.php')) {
    require_once BPS_CORE_INC . 'block-enqueues.php';
}

// Load the Functions
if (file_exists(BPS_CORE_INC . 'block-functions.php')) {
    require_once BPS_CORE_INC . 'block-functions.php';
}
