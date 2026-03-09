<?php
function luxurydetails_enqueue_styles() {
    wp_enqueue_style('luxury-main-style', get_stylesheet_uri());
    wp_enqueue_style('luxury-custom-style', get_template_directory_uri() . 'style.css');
}

add_action('wp_enqueue_scripts', 'luxurydetails_enqueue_styles');

function luxurydetails_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main_menu' => 'Main Menu',
    ]);
}

add_action('after_setup_theme', 'luxurydetails_theme_setup');
