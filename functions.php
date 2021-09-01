<?php

function fazana_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'fazana_theme_support');

function fazana_theme_styles() {
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'fazana_theme_styles');

function set_excerpt_length() {
    return 10;
}

add_filter('excerpt_length', 'set_excerpt_length');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );