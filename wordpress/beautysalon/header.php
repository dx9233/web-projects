<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="container">
      <button class="burger" id="openMenu" aria-label="Открыть меню">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="28"
          height="28"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round">
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>

      <button class="close" id="closeMenu" aria-label="Закрыть меню">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="28"
          height="28"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>

      <nav class="navbar" id="menu">

        <div class="social-links">
          <?php
          $instagram = get_theme_mod('instagram_url');
          if ($instagram): ?>
            <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram.svg" alt="Instagram" width="24" height="24" color="white">
            </a>
          <?php endif; ?>
        </div>

        <div class="navbar-left" id="menu-left">

          <?php
          wp_nav_menu([
            'theme_location' => 'left_menu',
            'container' => false,
            'menu_class' => 'menu-left',
          ]);
          ?>
        </div>

        <div class="navbar-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo.svg" alt="Логотип" class="logo-symbol" />
        </div>

        <div class="navbar-right" id="menu-right">
          <?php
          wp_nav_menu([
            'theme_location' => 'right_menu',
            'container' => false,
            'menu_class' => 'menu-right',
          ]);
          ?>
        </div>
      </nav>

      <div class="overlay" id="overlay"></div>
    </div>
  </header>