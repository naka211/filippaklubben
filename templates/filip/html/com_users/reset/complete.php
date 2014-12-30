<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
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
				<p>For at fuldføre adgangskodenulstillingen, angiv venligst en ny adgangskode.</p>
				<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.complete'); ?>" method="post" class="form-validate">
				<div class="form-group">
					<input type="password" placeholder="Adgangskode *" class="form-control required" name="jform[password1]">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Bekræft adgangskode *" class="form-control required" name="jform[password2]">
				</div>
				<button type="submit" class="btn btn_send validate">SEND</button>
				<?php echo JHtml::_('form.token'); ?>
				</form>
			</div> 
						   
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>