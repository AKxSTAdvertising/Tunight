<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
  <div class="container nav">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">TU<span>NIGHT</span></a>
    <nav class="nav-primary" aria-label="<?php esc_attr_e('Primary navigation', 'tunight'); ?>">
      <?php if (has_nav_menu('primary')) { wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul class="nav-links">%3$s</ul>')); } else { tunight_fallback_menu(); } ?>
    </nav>
    <div class="nav-right"><a class="header-button" href="<?php echo esc_url(home_url('/events/')); ?>">Plan Your Event</a><button class="menu-button" type="button" aria-label="Open menu" aria-expanded="false">☰</button></div>
  </div>
</header>
<main id="site-content">
