<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');

// If the page class is defined, add to class as suffix.
// It will be a separate class if the user starts it with a space
$tmpl = JURI::base()."templates/filip/";
$user = JFactory::getUser();
?>
<script type="text/javascript" src="<?php echo $tmpl;?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo $tmpl;?>fancybox/source/helpers/jquery.fancybox-media.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery(".fancybox").fancybox();  
}); 
</script>

<script src="<?php echo $tmpl;?>js/ekko-lightbox.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function (jQuery) {
		// delegate calls to data-toggle="lightbox"
		jQuery(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
			event.preventDefault();
			return jQuery(this).ekkoLightbox({
				onShown: function() {
					if (window.console) {
						return console.log('Checking our the events huh?');
					}
				},
				onNavigate: function(direction, itemIndex) {
					if (window.console) {
						return console.log('Navigating '+direction+'. Current item: '+itemIndex);
					}
				}
			});
		});

		//Programatically call
		jQuery('#open-youtube').click(function (e) {
			e.preventDefault();
			jQuery(this).ekkoLightbox();
		});

		// navigateTo
		jQuery(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
			event.preventDefault();
			return jQuery(this).ekkoLightbox({
				onShown: function() {

					var a = this.modal_content.find('.modal-footer a');
					if(a.length > 0) {

						a.click(function(e) {

							e.preventDefault();
							this.navigateTo(2);

						}.bind(this));

					}

				}
			});
		});


	});
</script>
<section id="slider">
	<div class="container-full"> 		
			<div id="main-slider" class="myCarousel_banner slide">
				<ol class="carousel-indicators">
					<li data-target="#main-slider" data-slide-to="0" class="active"></li>
					<li data-target="#main-slider" data-slide-to="1"></li>
					<li data-target="#main-slider" data-slide-to="2"></li>
				</ol> <!-- /.carousel-indicators -->
	
				<!-- Carousel items -->
				<div class="carousel-inner">
					{module Banner articles}
				</div> <!-- /.carousel-inner -->
				
				<!-- slider nav -->
				<a class="carousel-control left" href="#main-slider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				<a class="carousel-control right" href="#main-slider" data-slide="next"><i class="fa fa-chevron-right"></i></a>
	
			</div> <!-- /#main-slider --> 
	</div> <!-- /.container-full -->
	</section><!-- /#Slider -->
	
	<section id="battles">
	<div class="container-full">
		<div class="shadow">
			<div class="container">  
				<div class="row"> 
					{module Circle articles} 
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.shadow -->
	</div> <!-- /.container-full -->
	</section><!-- /#battles -->
	
	<?php if(!$user->guest){?>
	<section id="toplisten">
		<div class="container-full">
			<div class="shadow">
				<div class="container">
					{article 10}<h2>{title}</h2>{introtext}{/article}
					<div class="slide" id="myCarousel">
						   <div class="carousel-inner">
						   		{module Home banners}
							</div><!--carousel-inner-->	
							<a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
							<a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
						</div>	<!--#myCarousel-->
				</div> <!-- /.container -->
			</div> <!-- /.shadow -->
		</div> <!-- /.container-full -->
	</section><!-- /#toplisten -->  
	<?php }?>
	
	<section id="udfordre">
	<div class="udfordre"> 
		<div class="container">
			{article 1}{introtext}{/article}
	
		</div> <!--/.container-->		 
	</div> <!-- /.udfordre -->
	</section><!-- /#udfordre -->
