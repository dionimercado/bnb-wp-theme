<?php if(ICL_LANGUAGE_CODE == 'es') : ?>
  <div class="banner-freeshipping align-items-center justify-content-center flex-column flex-md-row" style="display: none">
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
<?php else : ?>
  <div class="banner-freeshipping align-items-center justify-content-center flex-column flex-md-row" style="display: none">
    <div class="d-none d-md-block">
      <img src="<?php echo wp_get_attachment_image_src( 30, 'full' )[0] ?>" alt="" class="">
    </div>
    <div class="px-5 text-center mb-4 mb-md-0">
      <h2 class="text-danger">
        <span class="text-white">FREE SHIPPING</span><br>
        TO ALL PUERTO RICO</h2>
      <p class="text-white mb-0">Including Vieques and Culebra, also<br>
        US Virgin Islands</p>
    </div>
    <div>
      <img src="<?php echo wp_get_attachment_image_src( 32, 'full' )[0] ?>" alt="" class="h-auto">
    </div>
  </div>
<?php endif ?>
