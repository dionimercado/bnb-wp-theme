<?php get_header() ?>

<section class="bg-dark py-3 py-md-4 shop-banner mb-5">
  <div class="container">
    <?php get_template_part('templates/banner', 'natura') ?>
    <?php get_template_part('templates/banner', 'ecogreen') ?>
  </div>
</section>
<div class="container">
  <?php while(have_posts()) : the_post(); the_content(); endwhile; ?>
</div>
<?php get_footer() ?>
