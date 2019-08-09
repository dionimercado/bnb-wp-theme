<!doctype html>
<html <?php language_attributes() ?> style="margin-top: 0 !important;">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head() ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139530072-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-139530072-1');
    </script>

  </head>
  <body <?php body_class() ?>>

    <nav class="headerNav navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm py-md-3">
      <div class="container-fluid">
        <button class="navbar-toggler border-0 p-0 mr-0" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-4 ml-md-0 mr-auto" href="<?php echo home_url() ?>"><img width="350" height="auto" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="<?php bloginfo('name') ?>" height="60" /></a>
        <div class="collapse navbar-collapse" id="mainNav">
          <div class="d-none d-md-block">
            <?php echo do_shortcode('[wpml_language_selector_widget]') ?>
          </div>
          <?php
            if(is_home() || is_front_page() ) :
              wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) );
            else :
              wp_nav_menu( array( 'theme_location' => 'page', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) );
            endif;
            ?>
          <div class="bg-light d-block d-md-none mt-4 mb-2 text-center">
            <?php echo do_shortcode('[wpml_language_selector_widget]') ?>
          </div>
        </div>
        <?php !dynamic_sidebar('ecwid-cart') ?>
      </div>
    </nav>
