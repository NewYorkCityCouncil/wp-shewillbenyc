<?php

require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');
require_once(get_template_directory().'/assets/functions/menus.php');


/**
 * Shortcode for tagged posts
 */
function get_tagged_posts( $atts ) {

  $a = shortcode_atts( array(
      'category' => 'news',
      'tag' => '',
  ), $atts );

  global $post;

  $html = '<h3>Recent Updates</h3>';

  $my_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => $a['category'],
    'tag' => $a['tag'],
  ));

  if( $my_query->have_posts() )  {
    while( $my_query->have_posts() ) {
      $my_query->the_post();
      $html .= '<h4 class="sans-serif color-slate"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
    } // end while
  } // end if

  return $html;

}
add_shortcode( 'get-tagged-posts', 'get_tagged_posts' );
