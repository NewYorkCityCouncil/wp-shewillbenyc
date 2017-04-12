<?php

// Register menus
register_nav_menus( array(
  'en-nav' => 'English Menu',
  'es-nav' => 'Spanish Menu',
) );

// Display the menus
function english_topbar() {
  wp_nav_menu(array(
    'container' => false,
    'menu_class' => 'vertical large-horizontal menu',
    'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion large-dropdown">%3$s</ul>',
    'theme_location' => 'en-nav',
    'depth' => 5,
    'fallback_cb' => false,
    'walker' => new Main_Menu_Walker()
  ));
}
function spanish_topbar() {
  wp_nav_menu(array(
    'container' => false,
    'menu_class' => 'vertical large-horizontal menu',
    'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion large-dropdown">%3$s</ul>',
    'theme_location' => 'es-nav',
    'depth' => 5,
    'fallback_cb' => false,
    'walker' => new Main_Menu_Walker()
  ));
}

class Main_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"menu\">\n";
    }
}
