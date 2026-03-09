<?php get_header(); ?>

<main class="site-main">
  <!-- Ваш контент можно вставить сюда -->
  <section class="hero">
    <div class="hero-overlay">
      <div class="container hero-content">
        <div class="hero-text">
          <h1>Car service<br />in your city</h1>
          <p>
            We are an online university that teaches web design with guaranteed employment
          </p>
        </div>
        <form class="hero-form">
          <h3>Book your free suspension inspection now</h3>
          <input type="text" placeholder="Ваше имя" required />
          <input type="tel" placeholder="Контактный телефон" required />
          <input type="text" placeholder="Марка автомобиля" />
          <button type="submit">Leave a request</button>
          <small>The promotion is valid until 10.01.2023</small>
        </form>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="about__container">
      <div class="about__text">
        <h4 class="about__subtitle">About the company</h4>
        <h1 class="about__title">Honest repair<br />of cars</h1>
        <p class="about__description">
          Diagnostics, maintenance, tire fitting, body and paint
          repairs of any complexity.
        </p>
        <p class="about__description">
          As fast as possible. Professionally and carefully. Without

          cheating and unexpected expenses. With maximum attention to your

          problem.
        </p>
        <a href="#" class="about__btn">More details</a>
      </div>
      <div class="about__images">
        <div class="about__circle about__circle--top">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/about_1.png" alt="ремонт автомобиля" />
        </div>
        <div class="about__circle about__circle--bottom">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/about_2.png" alt="инструменты" />
        </div>
      </div>
    </div>
  </section>
  <section class="repair">
    <div class="repair__overlay">
      <div class="repair__container">
        <h2 class="repair__title">We repair everything</h2>
        <p class="repair__subtitle">
          Our capabilities and dimensions allow us to repair even armored vehicles.
        </p>

        <div class="repair__grid">
          <div class="repair__item">
            <div class="repair__icon">
              <i class="fa-solid fa-check"></i>
            </div>
            <h3 class="repair__label">Repair zone</h3>
            <p class="repair__desc">Repair area 1000 m²</p>
          </div>

          <div class="repair__item">
            <div class="repair__icon">📁</div>
            <h3 class="repair__label">Warehouse</h3>
            <p class="repair__desc">Own spare parts warehouse</p>
          </div>

          <div class="repair__item">
            <div class="repair__icon">📄</div>
            <h3 class="repair__label">10 posts</h3>
            <p class="repair__desc">10 repair posts</p>
          </div>

          <div class="repair__item">
            <div class="repair__icon">%</div>
            <h3 class="repair__label">Wheel alignment</h3>
            <p class="repair__desc">
              4-post lift for wheel alignment and lifting of large

              cars
            </p>
          </div>

          <div class="repair__item">
            <div class="repair__icon">%</div>
            <h3 class="repair__label">4 workshops</h3>
            <p class="repair__desc">
              metalworking, body shop, painting and reinforcement
            </p>
          </div>

          <div class="repair__item">
            <div class="repair__icon">%</div>
            <h3 class="repair__label">Specialists</h3>
            <p class="repair__desc">
              18 specialists with high profile qualifications
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="quote">
    <div class="quote_block container">
      <img src="<?php echo get_template_directory_uri(); ?>./assets/img/quote.png" alt="quote" />
      <blockquote>
        Our certified auto service provides a 1-year warranty.
      </blockquote>
      <p>— Ivan Ivanov, Director</p>
    </div>
  </section>
  <section class="frame">
    <div class="frame-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>./assets/img/car.png" alt="frame image" />
    </div>
  </section>
  <section class="certificate">
    <div class="container">
      <div class="certificate_block">
        <div class="certificate_text">
          <h2>Our Certificates</h2>
          <p>
            We provide high-quality service and you can
            see our certificates, which confirm our
            guarantees and the specifics of the work performed. </p>
        </div>
        <div class="certificate_img">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Light.png" alt="certificate 1" />
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Light-1.png" alt="certificate 2" />
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Light-2.png" alt="certificate 3" />
        </div>
      </div>
    </div>
  </section>
  <section class="team">
    <h4 class="team__subtitle">Team</h4>
    <h2 class="team__title">Who are we?</h2>
    <p class="team__desc">
      Our team is made up exclusively of professionals<br />
      in their field, who work for your benefit
    </p>

    <div class="team__list">
      <div class="team__item">
        <img
          src="<?php echo get_template_directory_uri(); ?>./assets/img/team_1.png"
          alt="First Name Last Name"
          class="team__avatar" />
        <h3 class="team__name">First Name Last Name</h3>
        <p class="team__role">Body repair</p>
      </div>
      <div class="team__item">
        <img
          src="<?php echo get_template_directory_uri(); ?>./assets/img/team_2.png"
          alt="First Name Last Name"
          class="team__avatar" />
        <h3 class="team__name">First Name Last Name</h3>
        <p class="team__role">Engine Repair</p>
      </div>
      <div class="team__item">
        <img
          src="<?php echo get_template_directory_uri(); ?>./assets/img/team_3.png"
          alt="First Name Last Name"
          class="team__avatar" />
        <h3 class="team__name">First Name Last Name</h3>
        <p class="team__role">Suspension Repair</p>
      </div>
      <div class="team__item">
        <img
          src="<?php echo get_template_directory_uri(); ?>./assets/img/team_4.png"
          alt="First Name Last Name"
          class="team__avatar" />
        <h3 class="team__name">First Name Last Name</h3>
        <p class="team__role">Administrator</p>
      </div>
    </div>
  </section>
  <section class="contact-block">
    <h2>Car problem? We will help!</h2>
    <form class="contact-form">
      <input type="tel" placeholder="+7 (000) 000-0000" required />
      <button type="submit">Contact us</button>
    </form>
    <p class="contact-note">
      By leaving a request, you agree to the
      <a href="#">processing of personal data</a>
      and with the <a href="#">conditions for booking an account</a>
    </p>
  </section>

</main>

<?php get_footer(); ?>