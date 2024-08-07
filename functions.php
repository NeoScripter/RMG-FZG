<?php

// Load stylesheets
function load_css() {
    wp_enqueue_style( 'local-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), null );
    wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.min.css', [], false, 'all');
    wp_enqueue_style('reset');
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', [], false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js() {
    wp_register_script('script.js', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
    wp_enqueue_script('script.js');
    wp_register_script('jquery.js', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), false, true);
    wp_enqueue_script('jquery.js');
}
add_action('wp_enqueue_scripts', 'load_js');

function theme_enqueue_scripts() {
    wp_enqueue_script('theme-bundle', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true);
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function enqueue_custom_scripts() {
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Custom image sizes
add_image_size('blog-large', 800, 600, true);
add_image_size('blog-small', 300, 200, true);

function register_menus() {
    register_nav_menus(
        array(
            'top-menu' => __('Header Menu'),
            'privacy-menu' => __('Footer Menu'),
            'bottom-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_menus');

function allow_html_in_menu_items($title, $item, $args, $depth) {
    return $item->post_title;
}
add_filter('nav_menu_item_title', 'allow_html_in_menu_items', 10, 4);

// Adding svgs

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

add_filter('the_content', 'add_custom_classes_to_paragraphs');
