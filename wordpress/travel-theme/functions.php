<?php

function themename_enqueue_styles()
 {
    wp_enqueue_style( 'themename-main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'themename-custom-style', get_template_directory_uri() . 'style.css' );

    // Modules
    wp_enqueue_style( 'header-style', get_template_directory_uri() . '/css/header.css' );
    wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'blocks-style', get_template_directory_uri() . '/css/blocks.css' );
}

add_action( 'wp_enqueue_scripts', 'themename_enqueue_styles' );

function themename_theme_setup()
 {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( [
        'main_menu' => 'Main Menu',
    ] );
}

add_action( 'after_setup_theme', 'themename_theme_setup' );

// Add Scripts & Styles

function themename_scripts()
 {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

// Icons

add_theme_support( 'post-thumbnails' );

// Add Widgets

function my_widgets_init()
 {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
    ) );
}
add_action( 'widgets_init', 'my_widgets_init' );

// Add Forms

function handle_custom_form()
 {
    $name = sanitize_text_field( $_POST[ 'username' ] );
    $email = sanitize_email( $_POST[ 'email' ] );

    // you can send an email, save it to a database, etc.
    wp_mail( 'you@example.com', 'Новая заявка', "Имя: $name, Email: $email" );

    wp_redirect( home_url( '/thank-you' ) );
    exit;
}
add_action( 'admin_post_nopriv_custom_form_submit', 'handle_custom_form' );
add_action( 'admin_post_custom_form_submit', 'handle_custom_form' );

// Scripts

function mytheme_scripts()
 {
    // Connect the main theme style
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

// SVG

function allow_svg_uploads( $mimes )
 {
    $mimes[ 'svg' ] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_uploads' );

// Menus

function register_my_theme_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ), // Registering the ‘Header Menu’ menu
            // If necessary, other menus can be added.
        )
    );
}
add_action( 'init', 'register_my_theme_menus' );

// New Field

// Create metabox

function my_custom_field_add_meta_box()
 {
    add_meta_box(
        'my_custom_field_box', // ID
        'Additional field', // Block title
        'my_custom_field_callback', // Callback
        'page', // Where to display ( page, post or custom post type )
        'normal', // Position
        'high' // Priority
    );
}
add_action( 'add_meta_boxes', 'my_custom_field_add_meta_box' );

// Render the field

function my_custom_field_callback( $post )
 {
    $value = get_post_meta( $post->ID, '_my_custom_field', true );
    ?>
    <label for = 'my_custom_field'>Enter text:</label>
    <input type = 'text' name = 'my_custom_field' id = 'my_custom_field' value = "<?php echo esc_attr($value); ?>" style = 'width:100%'>
    <?php
}

// Save data

function my_custom_field_save( $post_id )
 {
    if ( array_key_exists( 'my_custom_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_my_custom_field',
            sanitize_text_field( $_POST[ 'my_custom_field' ] )
        );
    }
}
add_action( 'save_post', 'my_custom_field_save' );

// Register shortcode

function subscription_form_shortcode()
 {
    ob_start();
    ?>
    <form action = '/subscribe' method = 'post'>
    <input type = 'email' name = 'email' placeholder = 'Ваш email' required>
    <button type = 'submit'>Подписаться</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode( 'subscription_form', 'subscription_form_shortcode' );

// [ subscription_form ]

// Add Hero Image

function my_theme_customize_register( $wp_customize ) {
    // 1. Add a section for Hero
    $wp_customize->add_section( 'hero_section', array(
        'title'      => __( 'Hero Section Background', 'mytheme' ),
        'priority'   => 30,
    ) );

    // 2. Add a setting for the Hero background image
    $wp_customize->add_setting( 'hero_background_image', array(
        'default'   => '',
        'transport' => 'refresh', // ‘refresh’ or ‘postMessage’ for live preview
    ) );

    // 3. Add a control for uploading an image
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_background_image_control', array(
        'label'      => __( 'Upload Hero Background Image', 'mytheme' ),
        'section'    => 'hero_section',
        'settings'   => 'hero_background_image',
    ) ) );
}
add_action( 'customize_register', 'my_theme_customize_register' );

// Add Destination

function register_destination_post_type() {
    $labels = array(
        'name'          => 'Destinations',
        'singular_name' => 'Destination',
        'menu_name'     => 'Destinations',
        'menu_info'     => 'Destinations',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array( 'title', 'thumbnail' ),
        'menu_icon'          => 'dashicons-location',
        'rewrite'            => array( 'slug' => 'destinations' ),
    );
    register_post_type( 'destination', $args );
}
add_action( 'init', 'register_destination_post_type' );

?>