<?php
/**
 * Tunight theme setup and assets.
 */
if (!defined('ABSPATH')) { exit; }

function tunight_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tunight'),
        'footer' => __('Footer Menu', 'tunight'),
    ));
}
add_action('after_setup_theme', 'tunight_theme_setup');

function tunight_enqueue_assets() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('tunight-global', get_template_directory_uri() . '/assets/global.css', array(), $version);
    wp_enqueue_style('tunight-style', get_stylesheet_uri(), array('tunight-global'), $version);
    wp_enqueue_script('tunight-global', get_template_directory_uri() . '/assets/global.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'tunight_enqueue_assets');

function tunight_fallback_menu() {
    echo '<ul class="nav-links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    foreach (array('our-story' => 'Our Story', 'menu' => 'Menu', 'events' => 'Events') as $slug => $label) {
        echo '<li><a href="' . esc_url(home_url('/' . $slug . '/')) . '">' . esc_html($label) . '</a></li>';
    }
    echo '</ul>';
}
