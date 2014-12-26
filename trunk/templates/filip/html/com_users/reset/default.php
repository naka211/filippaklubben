<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.formvalidation');
?>

<section class="temp"> 
	<div class="container">
		<div class="w_breadcrumb">
			{module Breadcrumbs}
		</div><!--w_breadcrumb-->
		<div class="each_row">
			<div class="col-sm-3 w_nav_left">
				<ul class="nav_left">
					<li><a href="<?php echo JRoute::_('index.php?option=com_users&view=registration&Itemid=120'); ?>">Register</a></li>
					<li class="active"><a href="javascript:void(0);">Glemt  kodeord</a></li>  
				</ul>
			</div>
			<div class="col-sm-9 form_gotpass">
				<h3>Glemt din adgangskode?</h3>
				<p>Angiv venligst emailadressen til din konto. En verificeringskode vli blive sendt til dig. Når du har modtaget verificeringskoden vil du kunne vælge en ny adgangskode til din konto.</p>
				<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="form-validate">
				<div class="form-group">
					<input type="text" placeholder="Email adresse *" class="form-control required" name="jform[email]">
				</div>
				<button type="submit" class="btn btn_send validate">SEND</button>
				<?php echo JHtml::_('form.token'); ?>
				</form>
			</div> 
						   
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>