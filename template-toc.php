<?php
/* Template Name: TOC */
get_header()
?>

<div class="container">
  <?php echo do_shortcode('[rev_slider alias="toc-banner"][/rev_slider]') ?>
  <div class="text-center mt-5">
    <h1><?php the_title() ?></h1>
  </div>
  <div class="row">
    <div class="col-md-8 mx-auto my-5 text-justify">
      <?php while(have_posts()) : the_post(); the_content(); endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer() ?>
