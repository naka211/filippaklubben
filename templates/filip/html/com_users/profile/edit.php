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
					<li class="active"><a href="javascript:void(0);">Min konto</a></li>  
				</ul>
			</div>
			
			<div class="col-sm-9 form_reg">
				<h3>Min konto</h3>
				<form id="member-profile" action="<?php echo JRoute::_('index.php?option=com_users&task=profile.save'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" value="<?php echo $this->data->email;?>" class="form-control required" name="email" placeholder="E-mail">
				</div>
				<div class="form-group">
					<input type="text" value="<?php echo $this->data->firstname;?>" class="form-control required" name="firstname" placeholder="Fornavn">
				</div>
				<div class="form-group">
					<input type="text" value="<?php echo $this->data->lastname;?>" class="form-control required" name="lastname" placeholder="Efternavn">
				</div>
				<div class="form-group">
					<input type="text" value="<?php echo $this->data->phone;?>" class="form-control required" name="phone" placeholder="Telefon">
				</div>
				<div class="form-group">
					<input type="text" value="<?php echo $this->data->member_name;?>" class="form-control required" name="member_name" placeholder="Medlemmets navn (for- og efternavn)">
				</div>
				<div class="form-group">
					<input type="text" value="<?php echo $this->data->member_number;?>" class="form-control required" name="member_number" placeholder="Medlemsnummer">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Kodeord (skal være min 4 tegn)" class="form-control" name="password1">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Bekræft kodeord" class="form-control" name="password2">
				</div>
				<p><i>Felter markeret med * skal udfyldes</i> </p>
				<button type="submit" class="btn btn_send validate">GEM</button>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="profile.save" />
				<?php echo JHtml::_('form.token'); ?>
				</form>
			</div>                  
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>
