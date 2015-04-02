<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$baseurl = JURI::base();
$db = JFactory::getDBO();
$query = "SELECT title, filename FROM #__phocagallery WHERE published = 1 ORDER BY id DESC LIMIT 0, 16";
$db->setQuery($query);
$items = $db->loadObjectList();

$i = 1;
?>
<div class="item active wrap_ul_video"> 
	<ul class="list_video">
		<?php foreach ($items as $item) {?>
		<li class="col-xs-6 col-sm-3">
			<a class="fancybox" href="<?php echo JURI::base().'images/phocagallery/'.$item->filename;?>" data-fancybox-group="gallery_1" title="<?php echo $item->title;?>"> <img src="<?php echo JURI::base().'thumbnail/timthumb.php?src='.JURI::base().'images/phocagallery/'.$item->filename.'&q=100&w=215&h=172'; ?>" /> <h4><?php echo $item->title;?></h4> </a>
		</li>
		<?php 
			if(($i%4 == 0) && ($i<count($items))) echo '</ul></div><div class="item wrap_ul_video"><ul class="list_video">';
			$i++;
		}?>
	</ul>
</div><!-- wrap_ul_video -->