<footer class="site-footer">
  <div class="footer-top">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo.svg" alt="Логотип" class="logo-symbol" />
    </div>


    <div class="footer-column">
      <h3>Contacts</h3>
      <p><?php the_field('phone1', 'option'); ?></p>
      <p><?php the_field('phone2', 'option'); ?></p>
      <p><?php the_field('address', 'option'); ?></p>
    </div>

    <div class="footer-column">
      <h3>Operating mode</h3>
      <p><?php the_field('work_days', 'option'); ?></p>
      <p><?php the_field('work_weekend', 'option'); ?></p>
    </div>

    <div class="footer-column">
      <h3>We are on Instagram</h3>
      <a href="<?php the_field('instagram', 'option'); ?>" class="social-link" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram.svg" alt="Instagram" color="white">
      </a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>Copyright © 2017 - <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.getElementById("openMenu");
    const closeBtn = document.getElementById("closeMenu");
    const menu = document.getElementById("menu");
    const overlay = document.getElementById("overlay");

    openBtn.addEventListener("click", () => {
      menu.classList.add("active");
      overlay.classList.add("active");
      closeBtn.classList.add("active");
      openBtn.style.display = "none";
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
      overlay.classList.remove("active");
      closeBtn.classList.remove("active");
      openBtn.style.display = "block";
    });

    overlay.addEventListener("click", () => {
      menu.classList.remove("active");
      overlay.classList.remove("active");
      closeBtn.classList.remove("active");
      openBtn.style.display = "block";
    });
  });
</script>

<?php wp_footer(); ?>
</body>

</html>