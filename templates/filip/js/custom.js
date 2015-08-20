jQuery(document).ready(function() {
  jQuery(".iframe_video_slide").click(function(){
    jQuery("#myModal").modal('show');
  });

  jQuery('.myCarousel_banner').carousel({
      pause: true,
      interval: 7000
  });
    

});





// Script for Mixitup Plugin
jQuery(function(){
    jQuery('#Grid').mixitup();
  });


