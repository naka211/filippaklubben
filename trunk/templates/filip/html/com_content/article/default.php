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
			
			<div class="col-sm-9">
				<h3><?php echo $this->escape($this->item->title); ?></h3>
				<div>
					<a href="http://www.facebook.com/share.php?u=<?php echo JURI::current();?>" class="facebook" target="_blank"><img src="<?php echo JURI::base();?>images/sampledata/DelFB.png" style="margin:0 0 10px;" /></a> 
				</div>
				<?php echo $this->item->text; ?>               
			</div>
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>