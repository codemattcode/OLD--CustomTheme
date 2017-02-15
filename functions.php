<?php 
  
  function custom_wp_resources() {

    wp_enqueue_style('style-name', get_stylesheet_uri() );
  }


add_action( 'wp_enqueue_scripts', 'custom_wp_resources' );


// Custom Excerpt wordcount length

function custom_excerpt_wordcount() {
  return 75;
}
add_filter('excerpt_length', 'custom_excerpt_wordcount');

// Theme setup
function customTheme_setup() {

  // Navigation Menus
register_nav_menus(array(
  'header-nav' => __( 'Header Navigation'),
  'footer-nav' => __( 'Footer Navigation'),
));

  // Add featured image support
  add_theme_support('post-thumbnails');
  // width, height, hard-crop
  add_image_size('small-thumbnail', 280, 220, true);
  // width, height, image positioning
  add_image_size('banner-image', 920, 210, array('left', 'top'));
}


add_action('after_setup_theme', 'customTheme_setup');
