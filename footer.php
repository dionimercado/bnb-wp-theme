
    <footer class="footer pb-0">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-4 mb-5 d-none d-md-inline-block">
            <h4>NAVEGA NUESTRA PAGINA</h4>
            <?php !dynamic_sidebar('footer1') ?>
          </div>
          <div class="col-md-4 d-none d-md-inline-block">
            <h4>CONTACTANOS</h4>
            <a href="mailto:bnbhotelsuppliespr@gmail.com">bnbhotelsuppliespr@gmail.com</a>
            <div class="text-center">
              <img src="<?php echo wp_get_attachment_image_src( 31, 'full' )[0] ?>" alt="" class="mt-4">
            </div>
          </div>
          <div class="col-md-4">
            <img src="<?php echo wp_get_attachment_image_src( 30, 'full' )[0] ?>" alt="" class="w-100">
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        <p class="text-white-50 mb-0 py-3">&copy; <?php echo date("Y") ?> <?php bloginfo('name') ?>. <span class="d-none d-md-inline-block">Todos los derechos reservados.</span></p>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
