<?php
// If this file is called directly, abort. //
if (! defined('WPINC')) {
    die;
}

// Set background container color
$container_bg = 'bg-white';
if ($attributes['cyanBackground']) {
    $container_bg = 'bg-cyan-800 text-white px-6 py-4 rounded-md shadow-md';
}

// Change tailwind column classes based on editor options
$number_of_columns = $attributes['numberOfColumns'];

// Open container, columns and panel
echo '<div class="' . $container_bg . '">';

// Add your block markup
echo '<p>Dynamic block front end test</p>';

// Close container, columns and panel
echo '</div>';
