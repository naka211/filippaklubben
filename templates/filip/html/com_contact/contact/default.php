<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('behavior.formvalidation');
?>
<?php if(JRequest::getVar("finish")){?>
<section class="temp"> 
    <div class="container">
        <div class="w_breadcrumb">
			{module Breadcrumbs}
        </div><!--w_breadcrumb-->
		
        <div class="each_row">
        	 <h3>Kontakt os</h3>
            <p style="margin-left:10px; margin-top:10px;">Kære <?php echo JRequest::getVar('name');?>, <br>Tak for din henvendelse. Vi vil kontakte dig hurtigst muligt.<br><br>
			Med venlig hilsen<br>
			Fritids/junior- og ungdomsklubben Filippa
			</p>             
        </div><!-- /.each_row -->
    </div> <!-- /.container -->
</section>
<?php } else {?>
<section class="temp"> 
    <div class="container">
        <div class="w_breadcrumb">
			{module Breadcrumbs}
        </div><!--w_breadcrumb-->
		
        <div class="each_row">
			<h3>Kontakt</h3>
            <div class="col-sm-6 info_kontackt">                
				 {article 8}{introtext}{/article}
				<img alt="" src="templates/filip/img/filippalogo-orginal.png" class="logo_orginal">
            </div>
            <div class="col-sm-6 form_kontackt">
                <h4>Kontakt formular</h4>
                <form role="form" id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
                      <div class="form-group">
                        <input type="text" placeholder="Navn *" class="form-control required" name="jform[contact_name]">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Telefon *" class="form-control required" name="jform[contact_phone]">
                      </div>
                      <div class="form-group">
                        <input type="email" placeholder="E-mail *" class="form-control required validate-email" name="jform[contact_email]">
                      </div>
                      <div class="form-group">
                        <textarea placeholder="Besked" rows="4" class="form-control" name="jform[contact_message]"></textarea>
                      </div>
                      <p><i>Felter markeret med * skal udfyldes</i></p>
					  <button class="btn btn-primary validate btn_send" type="submit">SEND</button>
						<input type="hidden" name="option" value="com_contact" />
						<input type="hidden" name="task" value="contact.submit" />
						<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
						<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
						<?php echo JHtml::_('form.token'); ?>
                </form>                
            </div>                 
        </div><!-- /.each_row -->
    </div> <!-- /.container -->
</section>
<?php }?>