<?php get_header(); ?>
<section class="intro container" style="padding-top:140px;min-height:70vh">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <div class="entry-content"><?php the_content(); ?></div>
  </article>
<?php endwhile; the_posts_pagination(); else : ?>
  <h1><?php esc_html_e('Welcome to Tunight', 'tunight'); ?></h1>
  <p><?php esc_html_e('Add your page content in the WordPress dashboard to get started.', 'tunight'); ?></p>
<?php endif; ?>
</section>
<?php get_footer(); ?>
