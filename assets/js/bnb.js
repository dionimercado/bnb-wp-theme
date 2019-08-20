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
  // jQuery(window).scroll(function() {
  //     if (jQuery("#header-nav").offset().top > 80) {
  //         jQuery("#header-nav").addClass("shrink");
  //         // jQuery("#navbar-arka").addClass("navbar-fixed-top");
  //     } else {
  //       jQuery("#header-nav").removeClass("shrink");
  //       // jQuery("#navbar-arka").removeClass("navbar-fixed-top");
  //     }
  // });

});


(function(history){
    var pushState = history.pushState;
    history.pushState = function(state) {
        if (typeof history.onpushstate == "function") {
            history.onpushstate({state: state});
        }
        // ... whatever else you want to do
        // maybe call onhashchange e.handler
        return pushState.apply(history, arguments);
    };
})(window.history);

// window.onpopstate = history.onpushstate = function(e) {
//   switch (e.event) {
//     case expression:
//
//       break;
//     default:
//
//   }
//   console.log(e)
// }

console.error('this is not the ecogreen page', window.location);


(async () => {
  const {pathname} = await window.location;

  console.warn(pathname.includes("ECOGREEN-c30697355"));

  switch (true) {
    case pathname.includes("ECOGREEN-c30697355"):
      document.querySelector('.banner-ecogreen').style.display = "block";
      break;
    // case pathname.includes("SIGNATURE-SERIES-c31411771"):
    //   document.querySelector('.banner-freeshipping').style.display = "flex";
      break;
    default:
      document.querySelector('.banner-freeshipping').style.display = "flex";

  }
})();
