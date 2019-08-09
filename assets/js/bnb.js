jQuery( function($) {

  new WOW().init();

  jQuery('.page-scroll > a').bind('click', function(event) {
      var $anchor = jQuery(this);
      jQuery('html, body').stop().animate({
          scrollTop: (jQuery($anchor.attr('href')).offset().top - 80)
      }, 800, 'easeInOutExpo');
      event.preventDefault();
  });

  // jQuery to collapse the navbar on scroll
  jQuery(window).scroll(function() {
      if (jQuery("#header-nav").offset().top > 80) {
          jQuery("#header-nav").addClass("shrink");
          // jQuery("#navbar-arka").addClass("navbar-fixed-top");
      } else {
        jQuery("#header-nav").removeClass("shrink");
        // jQuery("#navbar-arka").removeClass("navbar-fixed-top");
      }
  });

});
