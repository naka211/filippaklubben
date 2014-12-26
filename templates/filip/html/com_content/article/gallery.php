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
if (!class_exists('BannersModelBanners')) require( 'components' . DS . 'com_banners' . DS .'models' . DS . 'banners.php' );
	$modelBanner = &$this->getModel('banners'); print_r($modelBanner);exit;
?>
<section class="temp"> 
	<div class="container">
		<div class="w_breadcrumb">
			{module Breadcrumbs}
		</div><!--w_breadcrumb-->
		<div class="each_row">
			<div class="col-sm-3 w_nav_left"> 
				{module Left Menu}
			</div>
			
			<div class="col-sm-9">
				<h3><?php echo $this->escape($this->item->title); ?></h3>
				<?php echo $this->item->text; ?>               
			</div>                  
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>