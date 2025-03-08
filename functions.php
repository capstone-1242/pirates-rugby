<?php

// Enqueue styles
function my_custom_block_theme_assets() {
    wp_enqueue_style('my-custom-block-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_block_theme_assets');

function pirates_rugby_enqueue_styles() {
  wp_enqueue_style('pirates-rugby-styles', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'pirates_rugby_enqueue_styles');

// Add support for Full Site Editing (FSE)
add_theme_support('block-templates');
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');
add_theme_support('responsive-embeds');
