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
?>
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
					<?php /*?>
					<div class="active item">
						<div class="slide-element">
							<img src="<?php echo $tmpl;?>img/slide-bg01.jpg">
							<div class="container carousel-caption">
								<div class="iframe_video_slide"><img src="<?php echo $tmpl;?>img/img_video_demo.jpg"></div>
								<h1>Alle brugere er velkommen på Soundbook.dk</h1>
								<p>For dig, som bare er nysgerrig, er der stadig masser af underholdning. <br>
								Du vil kunne lytte, se, og ikke mindst stemme og kommentere på alle lydfiler, videoer og se kunstnernes billeder. Yep, Soundbook samarbejder med et top professionelt musikstudie i indre København. Vi vil løbende holde konkurrencer, hvor de mest sete videoer/lydfiler på Soundbook, kan få chancen for at vinde en dag i studiet!</p> 
							</div><!--my_caption_slider-->
						</div> <!-- /.slide-element -->
					</div> <!--/.active /.item -->
	
					<div class="item">
						<div class="slide-element">
							<img src="<?php echo $tmpl;?>img/slide-bg02.jpg">
							<div class="container carousel-caption">
							<div class="iframe_video_slide"><img src="<?php echo $tmpl;?>img/img_video_demo.jpg"></div>
								<h1>Lorem ipsum dolor sit amet</h1>
								<p> Nullam mollis. Ut justo. Suspendisse potenti. Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. </p>		
							</div><!--my_caption_slider-->			 
						</div> <!-- /.slide-element -->
					</div> <!-- /.item --> 
	
					<div class="item">
						<div class="slide-element">
							<img src="<?php echo $tmpl;?>img/slide-bg03.jpg">
							<div class="container carousel-caption">
								<div class="iframe_video_slide"><img src="<?php echo $tmpl;?>img/img_video_demo.jpg"></div>
								<h1>Lorem ipsum dolor sit amet</h1>
								<p> Nullam mollis. Ut justo. Suspendisse potenti. Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. </p>					
							</div><!--my_caption_slider-->
						</div> <!-- /.slide-element -->
					</div> <!-- /.item --> 
					<?php */?>
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
	
	<section id="udfordre">
	<div class="udfordre"> 
		<div class="container">
			{article 1}{introtext}{/article}
	
		</div> <!--/.container-->		 
	</div> <!-- /.udfordre -->
	</section><!-- /#udfordre -->
