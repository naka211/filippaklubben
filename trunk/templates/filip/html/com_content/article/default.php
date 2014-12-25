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
		<div class="each_row">
			<div class="col-sm-3 w_nav_left"> 
				<!--<ul class="nav_left">
					<li class="active"><a href="#">Vestibulum auctor dapibus</a></li>
					<li><a href="#">Nunc dignissim risus id</a></li>
					<li><a href="#">Cras ornare tristique</a></li> 
					<li><a href="#">Vivamus vestibulum nulla</a></li> 
					<li><a href="#">Praesent placerat risus quis</a></li> 
					<li><a href="#">Fusce pellentesque suscipit</a></li> 
				</ul>-->
				{module Left Menu}
			</div>
			
			<div class="col-sm-9">
				<h3><?php echo $this->escape($this->item->title); ?></h3>
				<?php echo $this->item->text; ?>               
			</div>                  
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>