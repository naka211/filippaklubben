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

// Create shortcuts to some parameters.
$images  = json_decode($this->item->images);
?>
<section class="temp"> 
	<div class="container">
		<div class="w_breadcrumb">
			{module Breadcrumbs}
		</div><!--w_breadcrumb-->
		<div class="each_row" style="text-align:left;">
			<div class="col-sm-3 w_nav_left"> 
				{module Left Menu}
			</div>
			
			<div class="col-sm-9" style="border-bottom:1px solid #000">
				<h3><?php echo $this->escape($this->item->title); ?></h3>
				<?php echo $this->item->text; ?>               
			</div>
			<div class="social-icons" style="float:none; margin-top:5px; margin-left:240px;">
				<a href="http://www.facebook.com/share.php?u=<?php echo JURI::current();?>" class="facebook" target="_blank"><i class="social_icon fa fa-facebook"></i></a> 
			</div>         
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>