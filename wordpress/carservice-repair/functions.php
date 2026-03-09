<?php
function carservice_enqueue_styles() {
    wp_enqueue_style('carservice-main-style', get_stylesheet_uri());
    wp_enqueue_style('carservice-custom-style', get_template_directory_uri() . 'style.css');
}

add_action('wp_enqueue_scripts', 'carservice_enqueue_styles');

function carservice_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main_menu' => 'Main Menu',
    ]);
}

add_action('after_setup_theme', 'carservice_theme_setup');
