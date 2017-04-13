<?php

require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');
require_once(get_template_directory().'/assets/functions/menus.php');


/**
 * Get stylesheet directory for images
 */
function child_shortcode() {
  return get_bloginfo('stylesheet_directory');
}
add_shortcode('theme-path', 'child_shortcode');
