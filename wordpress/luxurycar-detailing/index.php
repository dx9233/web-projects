<?php get_header(); ?>

<main class="site-main">
  <!-- Ваш контент можно вставить сюда -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Luxury car detailing</h1>
        <p>
          Experience the prestige of a professionally detailed car,<br />radiating
          elegance and refinement at every turn.
        </p>
        <a href="#" class="connect-btn">Let's connect →</a>
      </div>
      <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_image.png" alt="Luxury Car" />
      </div>
    </div>
  </section>

  <section class="services">
      <div class="container">
        <div class="section-header">
          <h2>Love in Every Detail</h2>
          <p>
            Immerse yourself in luxury with our bespoke detailing packages
            tailored to your car's unique needs.
          </p>
        </div>
        <div class="cards">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/card_1.png" alt="Entry level detail" />
            <h3>Entry level detail</h3>
            <p>
              Treat your luxury car to a thorough hand wash and wax application.
            </p>
            <a href="#" class="learn-more">Learn more →</a>
          </div>
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/card_2.png" alt="Maintenance detail" />
            <h3>Maintenance detail</h3>
            <p>
              Ensure your car’s longevity with a periodic exterior protection
              treatment.
            </p>
            <a href="#" class="learn-more">Learn more →</a>
          </div>
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/card_3.png" alt="Full detail" />
            <h3>Full detail</h3>
            <p>
              Pamper your vehicle with a complete treatment, leaving no detail
              overlooked.
            </p>
            <a href="#" class="learn-more">Learn more →</a>
          </div>
        </div>
      </div>
    </section>
    <section class="frame">
      <div class="frame-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/frame_1.png" alt="frame image" />
      </div>
    </section>
    <section class="features">
      <div class="container">
        <div class="features-grid">
          <div class="left-content">
            <h2>We will take good<br />care of your car</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/luxury_car.png" alt="Luxury car" />
          </div>
          <div class="right-content">
            <div class="feature-item">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vector.png" />
              </div>
              <div>
                <h3>Precise work</h3>
                <p>
                  We uphold the highest standards of professionalism when
                  servicing your vehicles.
                </p>
              </div>
            </div>
            <hr />
            <div class="feature-item">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diamond.png" />
              </div>
              <div>
                <h3>Premium Products and Services</h3>
                <p>
                  Ensure your car’s longevity with a periodic exterior
                  protection treatment.
                </p>
              </div>
            </div>
            <hr />
            <div class="feature-item">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/security.png" />
              </div>
              <div>
                <h3>High-Level Security and Privacy</h3>
                <p>
                  We understand the importance of privacy and security for their
                  our clientele.
                </p>
              </div>
            </div>
            <a href="#" class="quote-link">Get a quote now →</a>
          </div>
        </div>
      </div>
    </section>
    <section class="cta-section">
      <div class="cta-container">
        <div class="cta-text">
          <h2>Book your luxury <br />car detailing today</h2>
          <p>
            Click the link below. Fill out the details and we’ll get back to you
            in less than 24 hours.
          </p>
          <a href="#" class="cta-btn">Get a quote now →</a>
        </div>
        <!--<div class="cta-image">
          <img src="./assets/img/video.png" alt="Luxury car" />
        </div>-->
      </div>
    </section>

</main>

<?php get_footer(); ?>
