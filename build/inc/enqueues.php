<?php
/**
* This file initializes all CU Core components
*/

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

/**
 * Enqueue scripts to modify core blocks
 */

// Register Javascript
// function enqueue_block_scripts()
// {
//     wp_register_script('block-scripts', MB_PLUGIN_PATH . '/block-scripts.js', [ 'wp-blocks', 'wp-edit-post' ]);
//     register_block_type('remove/block-style', ['editor_script' => 'block-scripts']);
// }
// add_action('init', 'enqueue_block_scripts');
