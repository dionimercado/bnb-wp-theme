
    <footer class="footer pb-0 text-center text-md-left">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-4 order-2 mt-4 mt-md-0">
            <h4><?php _e('NAVEGATE OUR PAGE', 'bnb') ?></h4>
            <?php !dynamic_sidebar('footer1') ?>
          </div>
          <div class="col-md-4 order-3 mt-4 mt-md-0">
            <h4><?php _e('CONTACT US', 'bnb') ?></h4>
            <a href="mailto:bnbhotelsuppliespr@gmail.com">bnbhotelsuppliespr@gmail.com</a>
            <div class="text-center d-none d-md-block">
              <img src="<?php echo wp_get_attachment_image_src( 31, 'full' )[0] ?>" alt="" class="mt-4">
            </div>
          </div>
          <div class="col-md-4 order-1 order-md-3 text-center">
            <img src="<?php echo wp_get_attachment_image_src( 30, 'full' )[0] ?>" alt="" style="max-height: 150px">
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        <p class="text-white-50 mb-0 py-3">&copy; <?php echo date("Y") ?> <?php bloginfo('name') ?></p>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
