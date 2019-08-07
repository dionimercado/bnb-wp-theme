<?php get_header() ?>
  <section class="position-relative">
    <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]') ?>
    <div class="position-relative text-center w-100" style="height: 0; z-index: 9;">
      <img src="http://demo.bnbhotelsupplierpr.com/wp-content/uploads/2019/08/4454.png" alt="" style="position: absolute; top: -120px; transform: translateX(190px);">
    </div>
    <div class="container py-5 text-center">
      <h3>BIENVENIDO</h3>
      <small class="text-danger mb-4 d-block">A NUESTRA TIENDA EN LINEA</small>

      <p>Somos una compañía dedicada a la venta y distribución de mercancía especializada para hospederías. Esta página está especialmente dirigida a propietarios o encargados de Vacation Rentals, BnB, y a pequeños o medianos Hoteles, que a veces no encuentran donde conseguir los productos en las cantidades y precios que necesitan. Tenemos más de treinta años de experiencia sirviendo en el mercado de hospederías.</p>
    </div>
  </section>

  <div class="container">
    <?php while(have_posts()) : the_post(); the_content(); endwhile; ?>
  </div>
<?php get_footer() ?>
