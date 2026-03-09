<?php get_header();
?>

<section class = 'hero'>
<div class = 'container'>
<?php
$hero_bg_image = get_theme_mod( 'hero_background_image' );
if ( $hero_bg_image ) {
    // If the image is loaded, display it as the background in the div
    echo '<div class="hero-bg" style="background-image: url(' . esc_url( $hero_bg_image ) . ');"></div>';
} else {
    // Otherwise, display an empty div or set the default color via CSS.
    echo '<div class="hero-bg"></div>';
}
?>

<div class = 'hero-content container'>
<div class = 'hero-title'>
<h1>Helping Others<br />Live & Travel</h1>
</div>

<form class = 'hero-form'>
<button type = 'submit' class = 'btn'>Find a program</button>
</form>
</div>
</div>
</section>

<section class = 'trip-planner'>
<div class = 'trip-header'>
<div>
<h2>Plan your perfect trip</h2>
<p>Search Flights & Places Hire to our most popular destinations</p>
</div>
<button class = 'more-btn'>See more places</button>
</div>

<div class = 'destinations'>
<div class = 'card'>
<img src = 'istanbul.jpg' alt = 'Istanbul, Turkey'>
<div class = 'card-info'>
<h3>Istanbul, Turkey</h3>
<p>Flights • Hotels • Resorts</p>
</div>
</div>

<div class = 'card'>
<img src = 'sydney.jpg' alt = 'Sydney, Australia'>
<div class = 'card-info'>
<h3>Sydney, Australia</h3>
<p>Flights • Hotels • Resorts</p>
</div>
</div>

<div class = 'card'>
<img src = 'baku.jpg' alt = 'Baku, Azerbaijan'>
<div class = 'card-info'>
<h3>Baku, Azerbaijan</h3>
<p>Flights • Hotels • Resorts</p>
</div>
</div>

</div>

<div class = 'destinations'>
<?php
$args = array(
    'post_type'      => 'destination',
    'posts_per_page' => -1,
);
$destinations_query = new WP_Query( $args );

if ( $destinations_query->have_posts() ) {
    while ( $destinations_query->have_posts() ) {
        $destinations_query->the_post();
        $flights_url = get_field( 'flights_url' );
        $hotels_url = get_field( 'hotels_url' );
        $resorts_url = get_field( 'resorts_url' );
        ?>
        <div class = 'card'>
        <a href = '<?php the_permalink(); ?>'>
        <?php the_post_thumbnail( 'medium' );
        ?>
        </a>
        <div class = 'card-info'>
        <h3><?php the_title();
        ?></h3>
        <p><?php the_description();
        ?></p>
        <div class = 'links'>
        <?php if ( $flights_url ): ?>
        <a href = "<?php echo esc_url($flights_url); ?>">Flights</a>
        <?php endif;
        ?>
        <?php if ( $hotels_url ): ?>
        <a href = "<?php echo esc_url($hotels_url); ?>">Hotels</a>
        <?php endif;
        ?>
        <?php if ( $resorts_url ): ?>
        <a href = "<?php echo esc_url($resorts_url); ?>">Resorts</a>
        <?php endif;
        ?>
        </div>
        </div>
        </div>
        <?php
    }
    wp_reset_postdata();
}
?>
</div>
</section>

<?php get_footer();
?>
