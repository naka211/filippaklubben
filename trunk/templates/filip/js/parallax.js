jQuery(document).ready(function() {
	jQuery(window).bind('scroll' , function(e) {
	parallax();
	});


	jQuery('#main-slider').carousel({
	  	interval: 4000, 
		pause: false
	})

	jQuery('#myCarousel').carousel({
		interval: 5000,
		wrap: true
	})

	jQuery('a.jq_logo').hover(function() {
	    jQuery(this).find("span").fadeToggle();
	});
     


});

function parallax () {
	var scrollPosition = jQuery(window).scrollTop();
	jQuery('#parallax_bg_testimonial').css('top', (0 - (scrollPosition * .2))+'px');
}