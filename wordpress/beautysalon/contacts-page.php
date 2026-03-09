<?php
/* Template Name: Contacts Page */
get_header(); ?>

<main class="site-main">
  <div class="container">
    <!-- Map -->
    <div class="contacts">
      <div class="container">
        <h2>Контакты</h2>

        <!-- Карта -->
        <div class="map">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt="Цены">
        </div>

        <!-- Contacts -->
        <div class="contacts-grid">
          <div class="contact-item">
            <h3>Contacts</h3>
            <p>+7 (812) 123-45-67</p>
            <p>+7 (911) 123-45-67</p>
            <p>Novostroevsky Prospekt, Building 36, Building C</p>
          </div>

          <div class="contact-item">
            <h3>Opening Hours</h3>
            <p>10:00 AM to 9:00 PM (Mon-Fri)</p>
            <p>11:00 AM to 8:00 PM (Sat-Sun)</p>
          </div>

          <div class="contact-item">
            <h3>Contacts</h3>
            <p>+7 (812) 123-45-67</p>
            <p>+7 (911) 123-45-67</p>
            <p>Novostroevsky Prospekt, Building 36, Lit. S</p>
          </div>

          <div class="contact-item">
            <h3>Operating mode</h3>
            <p>From 10:00 to 21:00 (Mon-Fri)</p>
            <p>From 11:00 to 20:00 (Sat-Sun)</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>