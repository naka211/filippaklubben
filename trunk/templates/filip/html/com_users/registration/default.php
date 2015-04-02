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
					<li class="active"><a href="javascript:void(0)">Register</a></li>
					<li><a href="<?php echo JRoute::_('index.php?option=com_users&view=reset&Itemid=121'); ?>">Glemt kodeord</a></li>  
				</ul>
			</div>
			
			<div class="col-sm-9 form_reg">
				<h3>Opret konto</h3>
				<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
				 <div class="form-group">
					<input type="text" placeholder="E-mail *" class="form-control required validate-email" name="email">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Fornavn *" class="form-control required" name="firstname">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Efternavn *" class="form-control required" name="lastname">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Telefon *" class="form-control required" name="phone">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Medlemmets navn (for- og efternavn) *" class="form-control required" name="member_name">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Medlemsnummer *" class="form-control required" name="member_number">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Kodeord (skal være min 4 tegn) *" class="form-control required" name="password1">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Bekræft kodeord *" class="form-control required validate-passverify" name="password2" type="password1">
				</div>
				<p><i>Bemærk! E-mail bruges til login <br> Felter markeret med * skal udfyldes (kodeord skal være minimum 4 tegn)</i> </p>
				 <button type="submit" class="btn btn_send validate">TILMELD NU</button>
				 <input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
				 <?php echo JHtml::_('form.token');?>
				 </form>
			</div>                  
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>
