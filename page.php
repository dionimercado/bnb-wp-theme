<?php get_header() ?>

<section class="bg-dark py-3 py-md-4 shop-banner mb-5">
  <div class="container">
    <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
      <div class="d-none d-md-block">
        <img src="<?php echo wp_get_attachment_image_src( 30, 'full' )[0] ?>" alt="" class="">
      </div>
      <div class="px-5 text-center mb-4 mb-md-0">
        <h2 class="text-danger">ENVIO <span class="text-white">GRATIS</span> A TODO<br>
          PUERTO RICO</h2>
        <p class="text-white mb-0">Incluyendo Vieques y Culebra, más<br>
          Las Islas Virgenes Americanas</p>
      </div>
      <div>
        <img src="<?php echo wp_get_attachment_image_src( 32, 'full' )[0] ?>" alt="" class="h-auto">
      </div>
    </div>
  </div>
</section>
<div class="container">
  <?php while(have_posts()) : the_post(); the_content(); endwhile; ?>
</div>
<?php get_footer() ?>
