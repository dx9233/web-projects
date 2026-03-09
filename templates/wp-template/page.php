<?php
/* Template Name: About Page */
get_header(); ?>

<!-- We display the field in the layout -->
<?php
$value = get_post_meta(get_the_ID(), '_my_custom_field', true);

if (!empty($value)) {
  echo '<div class="custom-field">Поле: ' . esc_html($value) . '</div>';
}
?>

<?php get_footer(); ?>