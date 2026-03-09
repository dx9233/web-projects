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