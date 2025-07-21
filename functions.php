<?php
// Theme setup
function harshamoole_theme_setup() {
  add_theme_support('title-tag');          // Controls <title> tag
  add_theme_support('post-thumbnails');    // Enables featured images
  add_theme_support('custom-logo');        // Enables custom logo from admin
}
add_action('after_setup_theme', 'harshamoole_theme_setup');

// Enqueue CSS styles
function harshamoole_enqueue_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'harshamoole_enqueue_styles');
