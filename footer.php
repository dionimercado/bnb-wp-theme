
    <footer class="footer pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mb-5 d-none d-md-inline-block">
            <ul>
              <?php !dynamic_sidebar('footer1') ?>
            </ul>
          </div>
          <div class="col-md-3 d-none d-md-inline-block">
            <ul>
              <?php !dynamic_sidebar('footer2') ?>
            </ul>
          </div>
          <div class="col-md-3 d-none d-md-inline-block">
            <ul>
              <?php !dynamic_sidebar('footer3') ?>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <?php !dynamic_sidebar('footer4') ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright border-top mt-5 text-center bg-dark">
        <p class="text-white-50 mb-0 py-3">&copy; <?php echo date("Y") ?> <?php bloginfo('name') ?>. <span class="d-none d-md-inline-block">Todos los derechos reservados.</span></p>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
