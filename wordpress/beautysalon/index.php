<?php get_header(); ?>

<main class="site-main">
  <div class="container">

    <!-- Content -->
    <?php if (is_front_page()) :
      get_template_part('template-parts/hero');
    endif; ?>

    <!-- Visual Portfolio Shortcode -->
    <?php echo do_shortcode('[visual_portfolio id="67"]'); ?>

    <!-- Brands -->
    <section class="brands">
      <div class="brands-container">
        <?php if (have_rows('brands')): ?>
          <?php while (have_rows('brands')): the_row();
            $logo = get_sub_field('brand_logo');
          ?>
            <img src="<?php echo $logo['url']; ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

    <!-- Visual Portfolio Shortcode -->
    <?php echo do_shortcode('[visual_portfolio id="31"]'); ?>
  </div>
</main>

<?php get_footer(); ?>