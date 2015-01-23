<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
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
					<li><a href="<?php echo JRoute::_('index.php?option=com_users&view=reset&Itemid='); ?>">Glemt kodeord</a></li>  
				</ul>
			</div>
			<div class="col-sm-9 form_reg">
				<p>Kære kunde, <br />Din konto er blevet aktiveret og et aktiveringslink er blevet sendt til e-mailadressen som du angav. Bemærk at du skal verificere kontoen ved at klikke på verificeringslinket når du modtager e-mailen og derefeter vil en administrator aktivere din konto før du kan logge på.<br /><br />
				Med venlig hilsen<br />
				Fritids/junior- og ungdomsklubben Filippa
				</p>
				<a href="">TIL FORSIDEN</a>
			</div>
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
</section>
