<?php
/*
Plugin Name: Multi-Block Starter
Plugin URI: https://github.com/troychaplin/block-plugin-starter
Description: Custom multi-block starter plugin
Version: 0.0.1
Author: Troy Chaplin
Author URI: https://github.com/troychaplin
*/

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

// Let's Initialize Everything
if (file_exists(plugin_dir_path(__FILE__) . 'core-init.php')) {
    require_once(plugin_dir_path(__FILE__) . 'core-init.php');
}
