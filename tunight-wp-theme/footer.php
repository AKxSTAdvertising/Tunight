</main>
<footer class="footer">
  <div class="container">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">TU<span>NIGHT</span></a>
    <p><?php echo esc_html(get_bloginfo('description') ?: 'Terrace Restro & Banquet'); ?></p>
    <?php if (has_nav_menu('footer')) { wp_nav_menu(array('theme_location' => 'footer', 'container' => 'nav', 'container_aria_label' => 'Footer navigation')); } ?>
    <small>&copy; <?php echo esc_html(wp_date('Y')); ?> Tunight. All rights reserved.</small>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
