<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$user = JFactory::getUser();
if($user->guest){
	echo '<script>location.href="'.JURI::base().'"</script>';
}

$db = JFactory::getDBO();
$banenr_catid = (int)JRequest::getVar("banner", 3);

$q = 'SELECT id, title, alias FROM #__categories WHERE extension = "com_banners" AND published = 1 ORDER BY id';
$db->setQuery($q);
$banner_cats = $db->loadObjectList();

$q = 'SELECT name, params FROM #__banners WHERE catid = '.$banenr_catid.' AND state = 1 ORDER BY ordering';
$db->setQuery($q);
$banners = $db->loadObjectList();

?>
<section class="temp"> 
	<div class="container">
		<div class="w_breadcrumb">
			{module Breadcrumbs}
		</div><!--w_breadcrumb-->
		<div class="each_row">                 
			<h3>Galleri</h3>
			<ul class="clearfix listGallery">
				<?php foreach($banner_cats as $banner_cat){
					if($banner_cat->id == $banenr_catid){
						$active = 'class="item_active"';
					} else {
						$active = '';
					}
					$link = JRoute::_(JURI::base().'index.php?option=com_content&view=article&layout=gallery&id=10&banner='.$banner_cat->id.'-'.$banner_cat->alias.'&Itemid=123');
				?>
					<li <?php echo $active;?>><a href="<?php echo $link;?>"><?php echo $banner_cat->title;?></a></li>
				<?php }?>
			</ul> 

			<div class="item wrap_ul_video itemGallery"> 
				<ul class="list_video">
					<?php foreach($banners as $banner){
						$banner_img = json_decode($banner->params);
					?>
					<li class="col-xs-6 col-sm-3">
						<a class="fancybox" href="<?php echo $banner_img->imageurl;?>" data-fancybox-group="gallery_1" title="<?php echo $banner->name;?>"><img src="<?php echo JURI::base().'thumbnail/timthumb.php?src='.JURI::base().$banner_img->imageurl.'&q=100&w=215&h=172'; ?>" /><h4><?php echo $banner->name;?></h4> </a>
					</li>
					<?php }?>
				</ul>
			</div><!-- wrap_ul_video -->                         
		</div><!-- /.each_row -->
	</div> <!-- /.container -->
 </section>