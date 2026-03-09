<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
      <div class="container">
        <!-- Make sure the path to the logo is specified relative to the root folder of the WordPress site -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo" alt="Logo" />
        <nav class="nav">
          <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',  // Specifies which registered menu to use
                'container'      => false,         // Disables the outer div container around ul
                'menu_class'     => '',                // Class for the ul list (you can add your own class if needed)
                'items_wrap'     => '<ul>%3$s</ul>', // Wraps menu items in your ul
            ) );
          ?>
        </nav>
        <a href=""# class="btn">Consultation</a>
      </div>
</header>