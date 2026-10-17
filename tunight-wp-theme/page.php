<?php get_header(); ?>
<section class="intro container" style="padding-top:140px;min-height:70vh">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <div class="entry-content"><?php the_content(); ?></div>
  </article>
<?php endwhile; ?>
</section>
<?php get_footer(); ?>
