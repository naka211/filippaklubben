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
					<li class="active"><a href="javascript:void(0);">Log ind</a></li>  
				</ul>
			</div>
			<div class="col-sm-9 form_gotpass">
				<h3>Log ind</h3>
				<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate">
				<input style="margin-bottom:10px;" class="form-control required validate-email" type="text" name="username" placeholder="Indtast din e-mail">
				<input style="margin-bottom:10px;" class="form-control required" type="password" name="password" placeholder="Indtast din adgangskode">
				<label class="remember" style="display:block;">
					<input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes" />
					<span> Husk mig</span> 
				</label>
				<button type="submit" class="btn btn_send validate">SEND</button>
				<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
				<?php echo JHtml::_('form.token'); ?>
				</form>
			</div> 
						   
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>
<?php return;?>
<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate form-horizontal well">
	<fieldset>
		<?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
			<?php if (!$field->hidden) : ?>
				<div class="control-group">
					<div class="control-label">
						<?php echo $field->label; ?>
					</div>
					<div class="controls">
						<?php echo $field->input; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>

		<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
		<div  class="control-group">
			<div class="control-label"><label><?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?></label></div>
			<div class="controls"><input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"/></div>
		</div>
		<?php endif; ?>

		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">
					<?php echo JText::_('JLOGIN'); ?>
				</button>
			</div>
		</div>

		<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
</form>