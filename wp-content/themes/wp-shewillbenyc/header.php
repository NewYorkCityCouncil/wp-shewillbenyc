<?php ?><!DOCTYPE html>
  <html class="no-js"  <?php language_attributes(); ?>>

  <head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:300,700%7CPermanent+Marker' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

    <meta property="og:url"         content="<?php the_permalink(); ?>" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="#SheWillBe" />
    <meta property="og:site_name"   content="#SheWillBe"/>
    <meta property="og:description" content="New York City must support every young woman. New York City Council is listening." />
    <meta property="og:image"       content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/share-image-1200x630.jpg" />

    <meta name="twitter:card"        content="summary_large_image" />
    <meta name="twitter:site"        content="@SheWillBeNYC" />
    <meta name="twitter:creator"     content="@NYCCouncil" />
    <meta name="twitter:title"       content="#SheWillBe" />
    <meta name="twitter:description" content="New York City must support every young woman. New York City Council is listening." />
    <meta name="twitter:image"       content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/share-image-1200x630.jpg" />

    <?php wp_head(); ?>


  </head>

  <body <?php body_class(); ?>>

    <div id="sticky-wrapper">

      <?php
      if ( is_page_template( 'page-raw-es.php' ) || is_category( 'Noticias' ) ) {
        $page_is_spanish = true;
      } else {
        $page_is_spanish = false;
      }
      ?>

      <div data-sticky-container>
        <header class="site-header sticky" role="banner" data-sticky data-margin-top="0" data-sticky-on="small" data-anchor="sticky-wrapper" style="width:100%">
          <div class="top-bar">

            <div class="top-bar-title">
              <span data-responsive-toggle="responsive-menu" data-hide-for="large" class="responsive-menu-toggle"><span class="menu-icon dark" data-toggle></span></span>
              <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?><?php if ( $page_is_spanish == true ) { echo 'es/'; } ?>"><?php if ( $page_is_spanish == true ) { echo '#EllaSerá'; } else { bloginfo('name'); } ?></a>
            </div>

            <div class="top-bar-left" id="responsive-menu">
              <?php if ( $page_is_spanish == true ) { spanish_topbar(); } else { english_topbar(); } ?>
            </div>
            <div class="top-bar-right show-for-xlarge">
              <ul class="horizontal menu">
                <li class="show-for-xlarge-up">
                  <?php if ( $page_is_spanish == true ) { ?>
                    Una iniciativa de la <a href="http://council.nyc.gov/melissa-mark-viverito/" class="inline"><strong>Presidenta Melissa Mark-Viverito</strong></a> &amp; <a href="http://council.nyc.gov/" class="inline"><strong>Concejo Municipal de NY</strong></a>
                  <?php } else { ?>
                    An initiative of <a href="http://council.nyc.gov/melissa-mark-viverito/" class="inline"><strong>Speaker Melissa Mark-Viverito</strong></a> &amp; <a href="http://council.nyc.gov/" class="inline"><strong>New York City Council</strong></a>
                  <?php } ?>
                </li>
              </ul>
            </div>

          </div><!-- end .top-bar -->
        </header><!-- end .site-header -->
      </div><!-- end data-sticky-container -->

      <div class="site-container">
