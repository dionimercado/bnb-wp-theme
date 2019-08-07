<?php
show_admin_bar( false );
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;


  // Register Theme Features
  function bnb_theme_features()  {
  	add_theme_support( 'infinite-scroll', array(
  	        'container' => 'content',
  	        'render'    => 'twenty_ten_infinite_scroll_render',
  	        'footer'    => 'wrapper',
  	    ) );
  	// Add theme support for Automatic Feed Links
  	add_theme_support( 'automatic-feed-links' );
  	// Add theme support for Post Formats
  	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );
  	// Add theme support for Featured Images
  	add_theme_support( 'post-thumbnails');
  	// Add theme support for HTML5 Semantic Markup
  	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
  	// Add theme support for document Title tag
  	add_theme_support( 'title-tag' );
    // Add support for two custom navigation menus.
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'bnb' ),
        'footer-links' => __('Footer Links', 'bnb' )
    ) );
  	// Register Sidebars
  	function bnb_sidebars() {
  		$sidebar = array(
  			'id'            => 'sidebbar',
  			'class'         => 'sidebar',
  			'name'          => __( 'Sidebar', 'bnb' ),
  		);
  		register_sidebar( $sidebar );
  		$footer1 = array(
  			'id'            => 'footer1',
  			'class'         => 'footer1',
				'before_widget' => '',
				'after_widget' 	=> '',
  			'name'          => __( 'Footer 1', 'bnb' ),
  		);
  		register_sidebar( $footer1 );
  		$footer1 = array(
  			'id'            => 'footer2',
  			'class'         => 'footer2',
  			'name'          => __( 'Footer 2', 'bnb' ),
  		);
  		register_sidebar( $footer1 );
  		$footer1 = array(
  			'id'            => 'footer3',
  			'class'         => 'footer3',
  			'name'          => __( 'Footer 3', 'bnb' ),
  		);
  		register_sidebar( $footer1 );
  		$footer1 = array(
  			'id'            => 'footer4',
  			'class'         => 'footer4',
  			'name'          => __( 'Footer 4', 'bnb' ),
  		);
  		register_sidebar( $footer1 );
  	}
  	add_action( 'widgets_init', 'bnb_sidebars' );
  }
  add_action( 'after_setup_theme', 'bnb_theme_features' );


  // Register Custom Navigation Walker
  require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';



  /**
   * Enqueue script for child theme
   */
  function bnb_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700|Montserrat:400,600&display=swap' );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), '5.4.1' );
  	wp_enqueue_style( 'bnb', get_template_directory_uri() . '/assets/css/bnb.css', array('bootstrap'), uniqid() );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array ( 'jquery' ), '1.14.3', true);
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array ( 'jquery' ), '4.1.3', true);
    // wp_enqueue_script( 'bnb', get_template_directory_uri() . '/assets/js/bnb.js', array ( 'jquery', 'jquery-ui' ), uniqid(), true);
  }
  add_action( 'wp_enqueue_scripts', 'bnb_enqueue_scripts', 1000000000 );
