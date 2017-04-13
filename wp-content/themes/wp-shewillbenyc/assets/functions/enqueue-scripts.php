<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  // JS
  wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2', true );
  wp_enqueue_script( 'fabric-js', get_template_directory_uri() . '/assets/js/fabric.min.js', array(), '', true );
  wp_enqueue_script( 'jqscroll-js', get_template_directory_uri() . '/assets/js/jquery.scrollintoview.min.js', array(), '', true );
  wp_enqueue_script( 'exif-js', get_template_directory_uri() . '/assets/js/exif.js', array(), '', true );
  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), '', true );

  // CSS
  wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/app.min.css', array(), '', 'all' );
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
