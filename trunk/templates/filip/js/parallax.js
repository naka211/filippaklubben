 $(document).ready(function() {
	$(window).bind('scroll' , function(e) {
	parallax();
	});


	$('#main-slider').carousel({
	  	interval: 4000, 
		pause: false
	})

	$('#myCarousel').carousel({
		interval: 5000,
		wrap: true
	})

	$('a.jq_logo').hover(function() {
	    $(this).find("span").fadeToggle();
	});
     


});

function parallax () {
	var scrollPosition = $(window).scrollTop();
	$('#parallax_bg_testimonial').css('top', (0 - (scrollPosition * .2))+'px');
}