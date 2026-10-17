<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <p class="eyebrow"><?php echo esc_html(get_bloginfo('description') ?: 'Terrace Restro & Banquet'); ?></p>
      <h1><?php the_title(); ?></h1>
      <div class="hero-text"><?php the_content(); ?></div>
      <div class="hero-actions"><a class="button button-gold" href="<?php echo esc_url(home_url('/menu/')); ?>">Explore Menu</a><a class="button button-outline" href="<?php echo esc_url(home_url('/events/')); ?>">Plan an Event</a></div>
    </div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>
