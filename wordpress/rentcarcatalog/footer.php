<footer class="site-footer">
  <div class="footer-top">
    <div class="footer-brand">
      <h2 class="logo">MORENT</h2>
      <p>Our vision is to provide convenience <br> and help increase your sales business.</p>
    </div>

    <div class="footer-menus">
      <div class="footer-menu">
        <h4>About</h4>
        <?php
        wp_nav_menu([
          'theme_location' => 'footer_about',
          'menu_class' => 'menu',
          'container' => false,
        ]);
        ?>
      </div>

      <div class="footer-menu">
        <h4>Community</h4>
        <?php
        wp_nav_menu([
          'theme_location' => 'footer_community',
          'menu_class' => 'menu',
          'container' => false,
        ]);
        ?>
      </div>

      <div class="footer-menu">
        <h4>Socials</h4>
        <?php
        wp_nav_menu([
          'theme_location' => 'footer_socials',
          'menu_class' => 'menu',
          'container' => false,
        ]);
        ?>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>©<?php echo date('Y'); ?> MORENT. All rights reserved</p>
    <div class="footer-links">
      <a href="#">Privacy & Policy</a>
      <a href="#">Terms & Condition</a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="./assets/js/popup-item.js"></script>
</body>
<!-- <div id="rentModal" class="modal hidden">
  <div class="modal-content">
    <button class="modal-close">×</button>
    <h2>Rent this car</h2>
    <form id="rentForm">
      <input type="hidden" name="car_id" id="car_id">
      <label>Your Name</label>
      <input type="text" name="name" required>
      <label>Pick-up Date</label>
      <input type="date" name="pickup_date" required>
      <label>Drop-off Date</label>
      <input type="date" name="dropoff_date" required>
      <button type="submit" class="btn btn-primary">Confirm Booking</button>
    </form>
  </div>
</div> -->

</html>