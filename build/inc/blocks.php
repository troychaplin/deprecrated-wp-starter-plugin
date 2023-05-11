<?php
/**
* This file initializes all CU Core components
*/

// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function multi_block_init()
{
    // Register news card block
    register_block_type(MB_BLOCK_PATH . '/dynamic', array(
        'render_callback' => 'dynamic_render_callback'
    ));
    
    // Register news listing block
    register_block_type(MB_BLOCK_PATH . '/static');
}
add_action('init', 'multi_block_init');

/**
 * Render callback function.
 *
 * @param array    $attributes The block attributes.
 * @param string   $content    The block content.
 * @param WP_Block $block      Block instance.
 *
 * @return string The rendered output.
 */

// Load front end php for news card grid block
function dynamic_render_callback($attributes, $content, $block)
{
    ob_start();
    require MB_BLOCK_PATH . '/dynamic/front-end.php';
    return ob_get_clean();
}
