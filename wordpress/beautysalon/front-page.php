<?php get_header(); ?>

<main class="site-main">
  <div class="container">

    <!-- Content -->
    <?php if (is_front_page()) :
      get_template_part('template-parts/hero');
    endif; ?>

    <!-- Quote -->
    <div class="quote-block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/frame.png" class="quote-icon" alt="Запятая" />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nibh vitae amet. Ipsum, pharetra donec ornare velit. Id at quisque accumsan risus ac ipsum ut. Sit elit, facilisi proin non malesuada sociis tristique. Viverra augue lorem ut quisque</br> quam tortor, malesuada iaculis.
        Et elementum at nulla venenatis, faucibus integer. Auctor neque eros, viverra rutrum. Fames ultrices condimentum tortor nec penatibus. Velit imperdiet</br> sapien fringilla vestibulum sit fames.
      </p>
    </div>

    <!-- Visual Portfolio Shortcode -->
    <?php echo do_shortcode('[visual_portfolio id="67"]');
    ?>
  </div>

  <!-- Brands -->
  <section class="brands">
    <div class="container">
      <div class="brands-flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1-1.png" alt="Kevin Murphy">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1-2.png" alt="Oribe">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1-3.png" alt="Alterna">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1-4.png" alt="Aldo Coppola">
      </div>
    </div>
  </section>

  <!-- Visual Portfolio Shortcode -->
  <div class="container">
    <?php echo do_shortcode('[visual_portfolio id="31"]');
    ?>
  </div>
</main>

<?php get_footer(); ?>