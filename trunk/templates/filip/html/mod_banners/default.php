<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$baseurl = JUri::base();
$i = 1;
?>
<div class="item active wrap_ul_video"> 
	<ul class="list_video">
		<?php foreach ($list as $item) {
			$imageurl = $item->params->get('imageurl');
		?>
		<li class="col-xs-6 col-sm-3">
			<a class="fancybox" href="<?php echo $imageurl;?>" data-fancybox-group="gallery_1" title="<?php echo $item->name;?>"> <img src="<?php echo JURI::base().'thumbnail/timthumb.php?src='.JURI::base().$imageurl.'&q=100&w=215&h=172'; ?>" /> <h4><?php echo $item->name;?></h4> </a>
		</li>
		<?php 
			$i++;
			if(($i==4) && ($i<count($list))) echo '</ul><ul class="list_video">';
		}?>
	</ul>
</div><!-- wrap_ul_video -->