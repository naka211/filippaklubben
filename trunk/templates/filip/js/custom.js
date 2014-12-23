jQuery(document).ready(function() {
  jQuery(".iframe_video_slide").click(function(){
    jQuery("#myModal").modal('show');
  });

  jQuery('.myCarousel_banner').carousel({
      pause: true,
      interval: false
  });
    
  jQuery(window).bind('scroll', function(e) {
    scrollingfn();
  });

  jQuery('a.header').click(function() {
    jQuery('html, body').animate({ scrollTop:jQuery('#header').offset().top - '60'}, 1000,
      function() {
        scrollingfn();
      });
    return false;
  });

  jQuery('a.service').click(function() {
    jQuery('html, body').animate({ scrollTop:jQuery('#service').offset().top - '60'}, 1000,
      function() {
        scrollingfn();
      });
    return false;
  });
  
  jQuery('a.portfolio').click(function() {
    jQuery('html, body').animate({ scrollTop:jQuery('#portfolio').offset().top - '60'}, 1000,
      function() {
        scrollingfn();
      });
    return false;
  });

  jQuery('a.pricing').click(function() {
    jQuery('html, body').animate({ scrollTop:jQuery('#pricing').offset().top - '60'}, 1000,
      function() {
        scrollingfn();
      });
    return false;
  });
  
  jQuery('a.aboutus').click(function() {
    jQuery('html, body').animate({ scrollTop:jQuery('#aboutus').offset().top - '60'}, 1000,
      function() {
        scrollingfn();
      });
    return false;
  });
  
jQuery('a.team').click(function() {
    jQuery('html, body').animate({ scrollTop:jQuery('#team').offset().top - '60'}, 1000,
      function() {
        scrollingfn();
      });
    return false;
  });

 jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > 400) {
          jQuery('#scroller2').fadeIn();
      } else {
          jQuery('#scroller2').fadeOut();
      }
  });

});

function scrollingfn() {
  var scrollPosition = jQuery(window).scrollTop();
}

// Script for top Navigation Menu
    jQuery(window).bind('scroll', function () {
      if (jQuery(window).scrollTop() > 100) {
        jQuery('#headnev').addClass('navbar-fixed-top').removeClass('topnavbar');
        jQuery('body').addClass('bodytopmargin').removeClass('bodynomargin');
      } else {
        jQuery('#headnev').removeClass('navbar-fixed-top').addClass('topnavbar');
        jQuery('body').removeClass('bodytopmargin').addClass('bodynomargin');
      }
    });



// Script for Mixitup Plugin
jQuery(function(){
    jQuery('#Grid').mixitup();
  });


