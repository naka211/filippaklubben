<?php
defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/filip/";
$user = JFactory::getUser();
JHTML::_('behavior.formvalidation');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<script src="<?php echo $tmpl;?>js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo $tmpl;?>js/jquery-migrate-1.2.1.min.js"></script>
		<meta charset="UTF-8">
		<jdoc:include type="head" />
		<?php 
		if(JRequest::getVar("option") == "com_content" && JRequest::getVar("view") == "article"){
			$db = JFactory::getDBO();
			$query = 'SELECT introtext, title, images FROM #__content WHERE id = '.JRequest::getVar('id');	
			$db->setQuery($query);
			$article = $db->loadObject();
			
			$images  = json_decode($article->images);
		?>
		<meta name="productTitle" property="og:title" content="<?php echo $article->title;?>">
		<?php if($images->image_intro){?>
		<meta name="productImage" property="og:image" content="<?php echo JURI::base().$images->image_intro;?>">
		<?php }?>
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php echo JURI::current();?>" />
		<meta property="og:description" content="<?php echo implode(' ', array_slice(explode(' ', strip_tags($article->introtext)), 0, 30));?>" />
		<meta property="og:site_name" content="<?php echo $_SERVER['HTTP_HOST'];?>" />
		<?php }?>
		
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']); ?>
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-noconflict.js']); ?>
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $tmpl;?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<link href="<?php echo $tmpl;?>css/jquery.smartmenus.bootstrap.css" rel="stylesheet"> 
		<link href="<?php echo $tmpl;?>css/ekko-lightbox.css" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/style_mobile.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo $tmpl;?>font/stylesheet.css" type="text/css" charset="utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.5; user-scalable=1;" />    
	
		
		<script src="<?php echo $tmpl;?>js/bootstrap.min.js"></script>
		<script src="<?php echo $tmpl;?>js/custom.js"></script>
		<script src="<?php echo $tmpl;?>js/parallax.js"></script>
		<script src="<?php echo $tmpl;?>js/jquery.mixitup.min.js"></script>
		
		<script type="text/javascript">
		  WebFontConfig = {
			google: { families: [ 'Fjalla+One::latin' ] }
		  };
		  (function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		  })(); 
		 </script>
		  <!-- Add fancyBox --> 
		  
		  
	
		<!-- SmartMenus jQuery plugin -->
		<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.smartmenus.js"></script>  
		<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.smartmenus.bootstrap.js"></script>
		 <?php 
		 if(JRequest::getVar("option") == "com_dpcalendar"){?>
		 <style>
		 .modal {
			background-clip: padding-box;
			background-color: #fff;
			border: 1px solid rgba(0, 0, 0, 0.3);
			border-radius: 6px;
			box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
			left: 50%;
			margin-left: -280px;
			outline: medium none;
			position: fixed;
			top: 10%;
			width: 580px;
			z-index: 1050;
		}
		 </style>
		 <?php }?>
	</head>

	<body> 
		<div id="wrapper">
			<header id="header">
				<section id="headnev" class="navbar navbar-fixed-top">		
					<div class="container"> 
						<div class="top_header">
							<h3 class="col-sm-5 pull-left h3_logo"><a class="logo" href=""><img src="<?php echo $tmpl;?>img/logo.png"></a></h3> 
							<h3 class="col-sm-3 pull-right h3_logo_2"><a href="http://www.frederiksberg.dk/" target="_blank" class="logo_right"> <img src="<?php echo $tmpl;?>img/logo_right.jpg"> </a>  </h3>					
							
							<div class="col-sm-4 right_top">
								<div class="pull-left navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<?php if($user->guest){?> 
								<a href="javascript:void(0);" class="btn  btn_login" data-toggle="modal" data-target="#myModal_login" ><i class="fa fa-lock"></i> Login</a>
								<?php } else {?>
								<div class="w_user_loged">
									<div class="w_user"><span class="user_name">Velkommen <?php echo $user->firstname.' '.$user->lastname;?></span> <a href="index.php?option=com_users&task=user.logout&return=<?php echo base64_encode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>"> Log ud <i class="fa fa-angle-double-right"></i> </a></div>
									<a class="btn btn_calendar" href="index.php?option=com_dpcalendar&view=calendar&Itemid=125">Kalender</a>
									<a href="index.php?option=com_content&view=article&layout=gallery&id=10&Itemid=123" class="btn btn_fotoalbum">Fotoalbum</a>
									<a href="index.php?option=com_users&view=profile&Itemid=122" class="btn btn_minkonto">Min konto</a> 						
								</div>
								<?php }?>
							</div> 
						</div>  
					</div> <!-- /.container -->	
					  
					<div class="container-full">
						 <div class="container"> 
						  <!--   navbar -->
						   	<div class="navbar" role="navigation"> 
								<div class="navbar-collapse collapse navbar_top">
								  <!-- Left nav -->
								  {module Main Menu}
								</div><!--/.nav-collapse -->
							  </div>  
						  <!-- End   navbar -->  
						</div> <!-- /container -->			 
					</div> <!--container-full -->
			
				</section><!-- /#headnev -->
			</header><!-- /#Header-->
		
		<jdoc:include type="component" />
		 <section id="footer">
			<footer class="container-full">
				<div class="container">
					<div class="col-xs-12 col-md-6 copyright">
						<p> Fritids- junior- og ungdomsklubben FILIPPA - Filippavej 5 - 1928 Frederiksberg C <br>Telefon: 38 21 10 80  -  E-mail: <a href="mailto:filippa@frederiksberg.dk">filippa@frederiksberg.dk </a> </p> 
					</div> <!--  .copyright --> 			 
					<div class=" col-xs-12 col-md-3 sticky-sidebar-social w_social_icons"> 
						<span>FØLG OS PÅ </span>
						<div class="social-icons">
							<a href="https://www.facebook.com/groups/164268508339/" title="følg os på Facebok" class="facebook" target="_blank"><i class="social_icon fa fa-facebook"></i></a> 
						</div> 
					</div> <!--social-icons-->
				</div>
			</footer> <!-- /.container-full -->
		</section> <!-- /.footer --> 
		
		
		<!-- Begin Modal Login -->
		<?php if($user->guest){?>
			<div class="modal fade" id="myModal_login" tabindex="-1" role="dialog" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">  </button>
					<h4 class="modal-title title-pp">LOGIN ELLER OPRET KONTO</h4>         
				  </div>
				  <div class="modal-body w_popup_login"> 
						<div class="col-sx-6 col-md-6  pp_left">
							<h5>Eksisterende bruger</h5>
							{module Login Form}
						</div><!--pp_left-->                         
						<div class="col-sx-6 col-md-6  pp_right">
							<h5>Ny bruger</h5>
							<p>Vil du registere dig som bruger ? </p>
									<p>Tryk venligst tilmeld.</p>
							<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration&Itemid=120'); ?>" class="btn btn_tilmeld">Tilmeld</a>                
						</div><!--pp_right-->  
				  </div><!--modal-body-->
				  <div class="modal-footer">
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset&Itemid=121'); ?>">Har du glemt dit kodeord, tryk her >> </a>
				  </div>
				</div><!--modal-content-->
			  </div><!--modal-dialog-->
			</div><!--#myModal_login-->
			<!--End  Modal Login -->
			<?php }?>
			
		</div><!--#wrapper-->
	</body>
</html>
