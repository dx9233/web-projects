<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="topbar">
    <div class="topbar__logo">
      <a href="<?php echo home_url(); ?>">
        <span class="logo-text">MORENT</span>
      </a>
    </div>

    <div class="topbar__search">
      <?php get_search_form(); ?>
    </div>

    <div class="topbar__icons">
      <a href="#"><i class="fas fa-heart"></i></a>
      <a href="#"><i class="fas fa-bell"></i><span class="dot"></span></a>
      <a href="#"><i class="fas fa-cog"></i></a>
      <a href="<?php echo get_edit_user_link(); ?>">
        <?php echo get_avatar(get_current_user_id(), 32); ?>
      </a>
    </div>
  </header>