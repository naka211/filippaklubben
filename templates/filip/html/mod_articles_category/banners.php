<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/filip/";
$y = 0;
?>
<div id="main-slider" class="myCarousel_banner slide">
	<ol class="carousel-indicators">
		<?php for($i=0; $i<count($list); $i++){?>
		<li data-target="#main-slider" data-slide-to="<?php echo $i;?>" <?php if(!$i) echo 'class="active"';?>></li>
		<?php }?>
	</ol>
	<div class="carousel-inner">
		<?php foreach ($list as $item) : 
			$image = json_decode($item->images);
			$url = json_decode($item->urls);
			$active = $y?"":"active";
		?>
	
			<div class="<?php echo $active;?> item">
				<div class="slide-element">
					<img src="<?php echo $image->image_intro;?>">
					<div class="container carousel-caption">
						<div class="iframe_video_slide">
							<?php if($image->image_fulltext){?>
							<a href="<?php echo $url->urla;?>" data-toggle="lightbox"><img src="<?php echo $image->image_fulltext;?>"><i class="fa fa-play-circle-o"></i></a>
							<?php }?>
						</div>
						<h1><?php echo $item->title; ?></h1>
						<?php echo $item->introtext; ?>
					</div><!--my_caption_slider-->
				</div> <!-- /.slide-element -->
			</div>
		<?php $y++;
		endforeach; ?>
	</div>	
</div>