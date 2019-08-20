<?php get_header() ?>
  <section class="position-relative">
    <?php
      if(ICL_LANGUAGE_CODE=='en') {
        echo do_shortcode('[rev_slider alias="slider-en"][/rev_slider]');
      }else{
        echo do_shortcode('[rev_slider alias="slider-es"][/rev_slider]');
      }
    ?>
    <div class="position-relative text-center w-100 d-none d-md-block" style="height: 0; z-index: 9;">
      <?php if(ICL_LANGUAGE_CODE=='en') : ?>
        <img src="<?php echo wp_get_attachment_image_src( 64, 'large' )[0] ?>" alt="" style="position: absolute; top: -120px; transform: translateX(190px);">
      <?php else : ?>
        <img src="<?php echo wp_get_attachment_image_src( 21, 'large' )[0] ?>" alt="" style="position: absolute; top: -120px; transform: translateX(190px);">
      <?php endif ?>
    </div>
    <div class="container pt-5 pb-3 pb-mb-4 text-center" id="welcome">
      <h3><?php _e('Welcome', 'bnb') ?></h3>
      <!-- <h3><?php echo do_shortcode('[wpml-string context="meet-and-greet" name="meet-n-greet"]BIENVENIDO[/wpml-string]') ?></h3> -->
      <small class="text-danger mb-4 d-block"><?php _e('TO OUR ONLINE STORE', 'bnb') ?></small>
      <p><?php _e('We are a company dedicated to the sale and distribution of especialized products for the hospitality industry. This page is for owners or the ones in charge of renting short-term lodging like vacation rentals, bed and breakfast, apartments, homestays, hostel, or small to medium hotels. Here you can find the quantity you need at the right price. We have more than thirty years of experience in the hospitality industry.', 'bnb') ?></p>
    </div>
    <div class="position-relative text-center w-100 d-md-none pb-4">
      <?php if(ICL_LANGUAGE_CODE=='en') : ?>
        <img src="<?php echo wp_get_attachment_image_src( 64, 'large' )[0] ?>" alt="">
      <?php else : ?>
        <img src="<?php echo wp_get_attachment_image_src( 21, 'large' )[0] ?>" alt="">
      <?php endif ?>

    </div>
  </section>

  <section class="bg-white py-5" id="products">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="<?php echo wp_get_attachment_image_src( 23, 'large' )[0] ?>" alt="" class="img-fluid p-5 p-md-0 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
        </div>
        <div class="col-md-8 text-center">
          <h2>ECO GREEN</h2>
          <small class="text-danger"><?php _e('GREAT QUALITY AT AN EXCELLENT PRICE', 'bnb') ?></small>
          <p><?php _e('Premium soaps and shampoo / conditioner line with a fine finishpresentation. At prices that fit any budget.', 'bnb') ?></p>
          <a href="/store/ECOGREEN-c30697355" class="btn btn-danger"><?php _e('Eco Green Offers', 'bnb') ?></a>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="<?php echo wp_get_attachment_image_src( 24, 'large' )[0] ?>" alt=""  class="img-fluid p-5 p-md-0 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
        </div>
        <div class="col-md-8 text-center">
          <h2>SIGNATURE NATÜRA</h2>
          <small class="text-danger"><?php _e('FOR THAT SPECIAL GUEST','bnb') ?></small>
          <p><?php _e('Line of amenities made in Italy, that for its fine presentation and exquisite fragrance has revolutionized the market of large luxury hotels for years.Thanks to our system, today we can make it available to our customers.', 'bnb') ?></p>
          <a href="/store/SIGNATURE-SERIES-c31411771" class="btn btn-danger"><?php _e('SIGNATURE NATÜRA OFFERS', 'bnb') ?></a>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="<?php echo wp_get_attachment_image_src( 25, 'large' )[0] ?>" alt=""  class="img-fluid p-5 p-md-0 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
        </div>
        <div class="col-md-8 text-center">
          <h2 class="text-uppercase"><?php _e('Towels', 'bnb') ?></h2>
          <small class="text-danger"><?php _e('ALLBRITE 100% COTTON', 'bnb') ?></small>
          <p><?php _e('Chosen for its hotel quality, whiteness, confection, durability and above all, its price. Our system of presenting them in sets, will allow our customers to buy what they really need.', 'bnb') ?></p>
          <a href="/store/TOALLAS-c31994212" class="btn btn-danger"><?php _e('Towels Offers', 'bnb') ?></a>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="<?php echo wp_get_attachment_image_src( 26, 'large' )[0] ?>" alt=""  class="img-fluid p-5 p-md-0 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
        </div>
        <div class="col-md-8 text-center">
          <h2><?php _e('LINENS', 'bnb') ?></h2>
          <small class="text-danger"><?php _e('QUALITY AND DURABILITY', 'bnb') ?></small>
          <p><?php _e('For years the Thomaston brand has been preferred in the hotel industry for its high quality and durability. Percale 180 threads with the perfect mixture of fabrics, 50% Cotton and 50% Polyester that guarantee us the softness, strength and durability that you are looking for. Also, there is no need toiron them. Manufactured in the USA', 'bnb') ?></p>
          <a href="/store/ROPA-DE-CAMA-c32201827" class="btn btn-danger"><?php _e('Linen Offers') ?></a>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="<?php echo wp_get_attachment_image_src( 27, 'large' )[0] ?>" alt=""  class="img-fluid p-5 p-md-0 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
        </div>
        <div class="col-md-8 text-center">
          <h2><?php _e('GARBAGE BAGS AND GLOVES', 'bnb') ?></h2>
          <small class="text-danger"><?php _e('CONVENIENCE AT AN EXCELLENT PRICE', 'bnb') ?></small>
          <p><?php _e('A perfect assortment of garbage bags in the sizes and quantities that best fit your needs.  Also gloves of various materials to choose from, that will save you money and time.', 'bnb') ?></p>
          <a href="/store/LIMPIEZA-c31411789" class="btn btn-danger"><?php _e('Bags and Gloves Offers', 'bnb') ?></a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-5 text-center" id="about">
    <div class="mb-5">
      <h3><?php _e('ABOUT US', 'bnb') ?></h3>
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/4414.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo wp_get_attachment_image_src( 28, 'large' )[0] ?>" alt="" class="img-fluid p-5 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
          <h4><?php _e('HOSPITALITY INDUSTRY SUPPLIER','bnb') ?></h4>
          <small class="text-danger d-block mb-4"><?php _e('BED AND BREAKFAST, VACATION RENTALS AND HOTELS', 'bnb') ?></small>
          <p><?php _e('If you are an owner or are in charge of a Vacation Rental, BnB, or a small to medium Hotel, here you will find the daily products needed for this market. Our products are of excelent quality at a great price.', 'bnb') ?></p>
        </div>
        <div class="col-md-6">
          <img src="<?php echo wp_get_attachment_image_src( 29, 'large' )[0] ?>" alt="" class="img-fluid p-5 wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
          <h4><?php _e('SOAPS, SHAMPOO AND AMENITIES', 'bnb') ?></h4>
          <small class="text-danger d-block mb-4"><?php _e('AT A GREAT PRICE', 'bnb') ?></small>
          <p><?php _e('In our online catalog you will find a fine selection of products at prices that we know you’ll love. This page is intended to be easy to follow and we know you will be satisfied with our service.', 'bnb') ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white pt-5 text-center">
    <div class="container">
      <div class="bg-dark text-white px-4 py-5 mb-5">
        <h3><?php _e('¿WHY BUY FROM US?', 'bnb') ?></h3>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/4414.png" alt="" class="w-auto">
      </div>
      <div class="position-relative px-5" style="z-index: 1">
        <div class="row">
          <div class="col-md-4 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
            <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 80x80">
              <title>Completely round image</title>
              <rect width="100%" height="100%" fill="#e5404e"></rect>
              <text x="50%" y="50%" fill="#fff" text-anchor="middle" dy=".3em" font-size="1.8em">1</text>
            </svg>
            <h4 class="my-4"><?php _e('MORE THAN 30 YEARS', 'bnb') ?></h4>
            <p><?php _e('We have more than 30 years selling and distributing products for the hospitality industry.', 'bnb') ?></p>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-duration=".5s" data-wow-delay="0s">
            <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 80x80">
              <title>Completely round image</title>
              <rect width="100%" height="100%" fill="#e5404e"></rect>
              <text x="50%" y="50%" fill="#fff" text-anchor="middle" dy=".3em" font-size="1.8em">2</text>
            </svg>
            <h4 class="my-4"><?php _e('EXCELENT QUALITY', 'bnb') ?></h4>
            <p><?php _e('Our experience in the industry has teached us the quality of the products the consumers expects.', 'bnb') ?></p>
          </div>
          <div class="col-md-4 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
            <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 80x80">
              <title>Completely round image</title>
              <rect width="100%" height="100%" fill="#e5404e"></rect>
              <text x="50%" y="50%" fill="#fff" text-anchor="middle" dy=".3em" font-size="1.8em">3</text>
            </svg>
            <h4 class="my-4"><?php _e('FREE SHIPPING', 'bnb') ?></h4>
            <p><?php _e('We have a warehouse in Puerto Rico which allows our deliveries to be fast (2 to 3 days) and free shipping.', 'bnb') ?></p>
          </div>
        </div>
      </div>
      <img src="<?php echo wp_get_attachment_image_src( 18, 'full' )[0] ?>" alt="" style="position: relative; margin-top: -70px; width: 100%; height: auto; z-index: 0;">
    </div>
  </section>

  <section class="bg-danger text-white text-center pt-5 pb-4" style="margin-top: -20px;">
    <div class="container">
      <h3><?php _e('WE ARE HERE TO SERVE YOU', 'bnb') ?></h3>
      <small class="text-dark"><?php _e('BnB Hotel Supplier Puerto Rico', 'bnb') ?></small>
      <p><?php _e('Feel free to email us with any questions or concerns. We will reply promptly.', 'bnb') ?></p>
    </div>
  </section>

<?php get_footer() ?>
