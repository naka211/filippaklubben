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
            <p style="margin-left:10px; margin-top:10px;">Kære kunde, <br>Tak for din henvendelse. Vi vil kontakte dig hurtigst muligt.<br><br>
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
        	 <h3>Kontakt os</h3>
            <div class="col-sm-6 info_kontackt">                
                 <h4>Fritids/junior og ungdomsklubben Filippa</h4>
                 <p>Filippavej 5 1928 Frederiksberg C <br> Telefon: 38 21 10 80<br> E-mail: <a href="mailto:filippa@frederiksberg.dk">filippa@frederiksberg.dk</a></p>
                 <p></p> 

                 <h4>Leder: Michael Vork  </h4>
                 <p>Telefon: 38 21 10 80 / 28 98 10 81 <br> E-mail: <a href="mailto:mivo01@frederiksberg.dk">mivo01@frederiksberg.dk</a></p> 

                 <h4>Souschef: Linda Nordam Larsen</h4>
                 <p>Telefon: 38 21 10 80 / 28 98 10 82<br> Telefon: 38 21 10 80<br> E-mail: <a href="mailto:lila02@frederiksberg.dk">lila02@frederiksberg.dk</a></p> 
                 <p>Vi kan kontaktes i dagtimerne mellem kl. 9,00-16,00</p> 
                 <p>Såfremt I skal melde jeres børn fri mv. skal følgende mail benyttes:</p>
                 <p><a href="mailto:filippa@frederiksberg.dk">filippa@frederiksberg.dk</a></p>

            </div>
            <div class="col-sm-6 form_kontackt">
                <h4>Kontakt formular</h4>
                <form role="form" id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal">
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