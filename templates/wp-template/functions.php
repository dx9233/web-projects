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

    // можно отправить email, записать в БД и т.д.
    wp_mail('you@example.com', 'Новая заявка', "Имя: $name, Email: $email");

    wp_redirect(home_url('/thank-you'));
    exit;
}
add_action('admin_post_nopriv_custom_form_submit', 'handle_custom_form');
add_action('admin_post_custom_form_submit', 'handle_custom_form');

// Scripts

function mytheme_scripts()
{
    // Подключаем главный стиль темы
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

// New Field

// Create metabox
function my_custom_field_add_meta_box()
{
    add_meta_box(
        'my_custom_field_box', // ID
        'Additional field', // Block title
        'my_custom_field_callback', // Callback
        'page', // Where to display (page, post or custom post type)
        'normal', // Position
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'my_custom_field_add_meta_box');

// Render the field
function my_custom_field_callback($post)
{
    $value = get_post_meta($post->ID, '_my_custom_field', true);
?>
    <label for="my_custom_field">Введите текст:</label>
    <input type="text" name="my_custom_field" id="my_custom_field" value="<?php echo esc_attr($value); ?>" style="width:100%">
<?php
}

// Save data
function my_custom_field_save($post_id)
{
    if (array_key_exists('my_custom_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_my_custom_field',
            sanitize_text_field($_POST['my_custom_field'])
        );
    }
}
add_action('save_post', 'my_custom_field_save');

// Register shortcode

function subscription_form_shortcode()
{
    ob_start();
?>
    <form action="/subscribe" method="post">
        <input type="email" name="email" placeholder="Ваш email" required>
        <button type="submit">Подписаться</button>
    </form>
<?php
    return ob_get_clean();
}
add_shortcode('subscription_form', 'subscription_form_shortcode');

[subscription_form]

