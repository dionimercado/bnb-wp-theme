<div class="banner-ecogreen text-center" style="display: none">
  <?php if(ICL_LANGUAGE_CODE == 'es') : ?>
    <img src="<?php echo wp_get_attachment_image_src( 70, 'full' )[0] ?>" alt="" class="w-100 h-auto d-none d-md-block" style="max-width: 100%">
    <img src="<?php echo wp_get_attachment_image_src( 76, 'full' )[0] ?>" alt="" class="w-100 h-auto d-md-none" style="max-width: 100%">
  <?php else : ?>
    <img src="<?php echo wp_get_attachment_image_src( 72, 'full' )[0] ?>" alt="" class="w-100 h-auto d-none d-md-block" style="max-width: 100%">
    <img src="<?php echo wp_get_attachment_image_src( 74, 'full' )[0] ?>" alt="" class="w-100 h-auto d-md-none" style="max-width: 100%">
  <?php endif ?>
</div>
