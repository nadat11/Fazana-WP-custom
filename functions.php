<?php

function fazana_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    remove_theme_support('widgets-block-editor');
    register_nav_menus( array(
        'primary meny' => 'Primary Meny',
    ) );
} 
add_action('after_setup_theme', 'fazana_theme_support');

function fazana_theme_styles() {
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'fazana_theme_styles');

function set_excerpt_length() {
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');


function widgeti(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar', 
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Footer 1',
        'id' => 'footer-1', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Footer 2',
        'id' => 'footer-2', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Footer 3',
        'id' => 'footer-3', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Drustvene mreze',
        'id' => 'drustvene-mreze', 
        'before_widget' => '<section class="drustveneMreze">',
        'after_widget' => '</section>', 
    ));
    
}
add_action('widgets_init','widgeti');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );