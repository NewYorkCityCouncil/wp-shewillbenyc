      </div><!-- end .site-container -->

      <footer class="site-footer">
        <div class="row">
          <div class="columns text-center">
            <p>
              <?php if ( is_page_template( 'page-raw-es.php' ) || is_category( 'Noticias' ) ) { ?>
                <a href="http://shewillbe.nyc/">#EllaSerá</a> es una iniciativa de <a href="http://council.nyc.gov/d8/html/members/home.shtml"><strong>Presidenta&nbsp;Melissa&nbsp;Mark&#8209;Viverito</strong></a> &amp; <a href="http://council.nyc.gov/"><strong>Concejo&nbsp;Municipal&nbsp;de&nbsp;NY</strong></a>
              <?php } else { ?>
                <a href="http://shewillbe.nyc/">#SheWillBe</a> is an initiative of <a href="http://council.nyc.gov/d8/html/members/home.shtml"><strong>Speaker&nbsp;Melissa&nbsp;Mark-Viverito</strong></a> &amp; <a href="http://council.nyc.gov/"><strong>New&nbsp;York&nbsp;City&nbsp;Council</strong></a>
              <?php } ?>
            </p>
          </div>
        </div>
        <div class="row hide-for-print">
          <div class="columns small-11 small-centered medium-8 large-6">
            <div class="row small-up-6">
              <div class="column"><a class="ghosted" href="https://twitter.com/SheWillBeNYC"><img alt="twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-twitter-slate.png" class=""></a></div>
              <div class="column"><a class="ghosted" href="https://www.facebook.com/SheWillBe.NYC/"><img alt="facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-facebook-slate.png" class=""></a></div>
              <div class="column"><a class="ghosted" href="images/snapcode.png"><img alt="snapchat" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-snapchat-slate.png" class=""></a></div>
              <div class="column"><a class="ghosted" href="https://instagram.com/shewillbe.nyc"><img alt="instagram" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-instagram-slate.png" class=""></a></div>
              <div class="column"><a class="ghosted" href="http://shewillbenyc.tumblr.com/"><img alt="tumblr" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-tumblr-slate.png" class=""></a></div>
              <div class="column"><a class="ghosted" href="https://vine.co/u/1261564311286464512"><img alt="vine" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-vine-slate.png" class=""></a></div>
            </div>
          </div>
        </div>
      </footer>

    </div><!-- end .sticky-wrapper -->

    <script>
      var themedir = '<?php echo get_template_directory_uri(); ?>';
    </script>

    <?php wp_footer(); ?>

  </body>
</html>
