<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <div class="hero__container">

      <div class="hero__card">
        <h2>The Best Platform for Car Rental</h2>
        <p>Ease of doing a car rental safely and reliably. Of course at a low price.</p>
        <a href="#" class="btn">Rental Car</a>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-car-1.png" alt="Car">
      </div>

      <div class="hero__card">
        <h2>Easy way to rent a car at a low price</h2>
        <p>Providing cheap car rental services and safe and comfortable facilities.</p>
        <a href="#" class="btn">Rental Car</a>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-car-2.png" alt="Car">
      </div>

    </div>

    <!-- Filter -->
    <div class="hero__filter">
      <form action="<?php echo site_url('/cars'); ?>" method="get">

        <div class="filter__group">
          <div class="filter_left">
          <label>
            <input type="radio" name="type" value="pickup" checked> Pick - Up
          </label>
          <select name="pickup_location">
            <option>Select your city</option>
            <?php
            $locations = get_terms(['taxonomy' => 'location', 'hide_empty' => false]);
            foreach ($locations as $loc) {
              echo "<option value='{$loc->slug}'>{$loc->name}</option>";
            }
            ?>
          </select>
          <input type="date" name="pickup_date">
          <input type="time" name="pickup_time">
        </div>

        <button type="button" class="filter__swap">⇅</button>

        <div class="filter_right">
          <label>
            <input type="radio" name="type" value="dropoff"> Drop - Off
          </label>
          <select name="dropoff_location">
            <option>Select your city</option>
            <?php
            foreach ($locations as $loc) {
              echo "<option value='{$loc->slug}'>{$loc->name}</option>";
            }
            ?>
          </select>
          <input type="date" name="dropoff_date">
          <input type="time" name="dropoff_time">
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Search Car</button>
      </form>
    </div>
  </div>
</section>

<section class="catalog">
  <div class="container">
    <h2>Popular Cars</h2>
    <div class="catalog-grid">
      <?php
      $args = ['post_type' => 'cars', 'posts_per_page' => 8];
      $query = new WP_Query($args);

      if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();

          $price        = get_field('price');
          $old_price    = get_field('old_price');
          $fuel         = get_field('fuel_capacity');
          $transmission = get_field('transmission');
          $passengers   = get_field('passengers');
      ?>
          <div class="car-card">
            <div class="car-card__header">
              <h3><?php the_title(); ?></h3>
              <span class="car-type"><?php echo get_field('car_type'); ?></span>
              <button class="favorite-btn" data-id="<?php the_ID(); ?>">
                <i class="far fa-heart"></i>
              </button>
            </div>

            <div class="car-card__image">
              <?php the_post_thumbnail('medium'); ?>
            </div>

            <div class="car-card__specs">
              <span><i class="fas fa-gas-pump"></i> <?php echo get_post_meta(get_the_ID(), '_car_fuel', true); ?> L</span>
              <span><i class="fas fa-cogs"></i> <?php echo get_post_meta(get_the_ID(), '_car_gear', true); ?></span>
              <span><i class="fas fa-user-friends"></i> <?php echo get_post_meta(get_the_ID(), '_car_seats', true); ?> People</span>
            </div>

            <div class="car-card__footer">
              <div class="car-card__price">
                <strong>$<?php the_field('car_price'); ?><?php echo get_post_meta(get_the_ID(), '_car_price', true);
                if ($price) {
                  echo '$' . number_format($price, 2);} ?></strong><span>/day</span>
              </div>
              <button class="btn btn-primary rent-btn" data-id="<?php the_ID(); ?>">
                Rent Now
              </button>
            </div>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</section>

<!-- Other Sections -->

<?php get_footer(); ?>