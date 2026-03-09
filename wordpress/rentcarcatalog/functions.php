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
    wp_enqueue_script('popup-item', get_template_directory_uri('./assets/js/popup-item.js') . '', array('jquery'), null, true);
    wp_enqueue_script('fav-item', get_template_directory_uri('./assets/js/fav-item.js') . '', array('jquery'), null, true);
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

function morent_register_menus()
{
    register_nav_menus([
        // Nav
        'header_main' => __('Header Main Menu', 'morent'),
        'header_top'  => __('Header Top Menu', 'morent'),

        // Footer
        'footer_about' => 'Footer About Menu',
        'footer_community' => 'Footer Community Menu',
        'footer_socials' => 'Footer Socials Menu',
    ]);
}
add_action('init', 'morent_register_menus');

// Cars Filter

function morent_register_cars_cpt()
{
    $labels = [
        'name'          => 'Cars',
        'singular_name' => 'Car',
        'menu_name'     => 'Cars',
        'add_new'       => 'Add Car',
        'add_new_item'  => 'Add New Car',
        'edit_item'     => 'Edit Car',
        'new_item'      => 'New Car',
        'view_item'     => 'View Car',
        'all_items'     => 'All Cars',
    ];

    $args = [
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-car',
        'supports'      => ['title', 'editor', 'thumbnail'],
        'rewrite'       => ['slug' => 'cars'],
        'post_type'      => 'cars',
        'posts_per_page' => 8,
        'orderby'        => 'date',
        'order'          => 'ASC'
    ];

    register_post_type('cars', $args);
}
add_action('init', 'morent_register_cars_cpt');

// Car Cards

function morent_add_car_meta_box()
{
    add_meta_box(
        'car_details',
        'Car Details',
        'morent_render_car_meta_box',
        'cars',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'morent_add_car_meta_box');

function morent_render_car_meta_box($post)
{
    $price = get_post_meta($post->ID, '_car_price', true, intval($_POST['car_price']));
    $fuel = get_post_meta($post->ID, '_car_fuel', true);
    $gear = get_post_meta($post->ID, '_car_gear', true);
    $seats = get_post_meta($post->ID, '_car_seats', true);
?>
    <p>
        <label>Price:</label>
        <input type="text" name="car_price" value="<?php echo esc_attr($price); ?>" />
    </p>
    <p>
        <label>Fuel Capacity:</label>
        <input type="text" name="car_fuel" value="<?php echo esc_attr($fuel); ?>" />
    </p>
    <p>
        <label>Transmission:</label>
        <input type="text" name="car_gear" value="<?php echo esc_attr($gear); ?>" />
    </p>
    <p>
        <label>Seats:</label>
        <input type="number" name="car_seats" value="<?php echo esc_attr($seats); ?>" />
    </p>
<?php
}

function morent_save_car_meta($post_id)
{
    if (array_key_exists('car_price', $_POST)) {
        update_post_meta($post_id, '_car_price', sanitize_text_field($_POST['car_price']));
    }
    if (array_key_exists('car_fuel', $_POST)) {
        update_post_meta($post_id, '_car_fuel', sanitize_text_field($_POST['car_fuel']));
    }
    if (array_key_exists('car_gear', $_POST)) {
        update_post_meta($post_id, '_car_gear', sanitize_text_field($_POST['car_gear']));
    }
    if (array_key_exists('car_seats', $_POST)) {
        update_post_meta($post_id, '_car_seats', intval($_POST['car_seats']));
    }
}
add_action('save_post', 'morent_save_car_meta');

// Font Awesome

function morent_enqueue_assets()
{
    // Include theme styles
    wp_enqueue_style('theme-style', get_stylesheet_uri());

// Include Font Awesome from the CDN
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        [],
        '6.5.1'
    );
}
add_action('wp_enqueue_scripts', 'morent_enqueue_assets');
