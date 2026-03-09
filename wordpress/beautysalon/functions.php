<?php
function themename_enqueue_styles()
{
    wp_enqueue_style('themename-main-style', get_stylesheet_uri());
    wp_enqueue_style('themename-custom-style', get_template_directory_uri() . 'style.css');

    // Modules
    wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('blocks-style', get_template_directory_uri() . '/css/blocks.css');
}

add_action('wp_enqueue_scripts', 'themename_enqueue_styles');

function themename_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main_menu' => 'Main Menu',
    ]);
}

add_action('after_setup_theme', 'themename_theme_setup');

// Add Scripts & Styles

function themename_scripts()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '', array('jquery'), null, true);

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

// Icons

add_theme_support('post-thumbnails');

// Add Widgets

function my_widgets_init()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'my_widgets_init');

// Add Forms

function handle_custom_form()
{
    $name = sanitize_text_field($_POST['username']);
    $email = sanitize_email($_POST['email']);

 // you can send an email, write to the database, etc.
    wp_mail('you@example.com', 'Новая заявка', "Имя: $name, Email: $email");

    wp_redirect(home_url('/thank-you'));
    exit;
}
add_action('admin_post_nopriv_custom_form_submit', 'handle_custom_form');
add_action('admin_post_custom_form_submit', 'handle_custom_form');

// Scripts

function mytheme_scripts()
{
 // Connect the main theme style
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

// SVG

function allow_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');

// Menus

function register_custom_menus()
{
    register_nav_menus([
        'left_menu'  => __('Left Menu', 'your-theme'),
        'right_menu' => __('Right Menu', 'your-theme'),
    ]);
}
add_action('after_setup_theme', 'register_custom_menus');


// Add Instagram Icon
function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section('social_links', array(
        'title'    => __('Social Media', 'mytheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_url', array(
        'label'   => __('instagram Link', 'mytheme'),
        'section' => 'social_links',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'mytheme_customize_register');
