<?php
/**
 * This file initializes all CU Core components
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

// Register CSS
function bps_register_core_css()
{
    wp_enqueue_style('bps-core', WPSB_CORE_CSS . 'styles.css', null, time(), 'all');
};
add_action('wp_enqueue_scripts', 'bps_register_core_css');

// Register Javascript
function enqueue_scripts_styles()
{
    wp_register_script(
        'block-config',
        WPSB_BLOCK_JS . 'script.js',
        [ 'wp-blocks', 'wp-edit-post' ]
    );
    register_block_type('remove/block-style', ['editor_script' => 'block-config']); // register block editor script.
}
add_action('init', 'enqueue_scripts_styles');
