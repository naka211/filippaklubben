<?php
defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/filip/";
$user = JFactory::getUser();
$user = JUser::getInstance($user->id);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<script src="<?php echo $tmpl;?>js/jquery-1.9.1.min.js"></script>
		<meta charset="UTF-8">
		<jdoc:include type="head" />
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']); ?>
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-noconflict.js']); ?>
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']); ?>
		<?php unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/font-awesome.min.css">
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
		<script src="<?php echo $tmpl;?>js/ekko-lightbox.js"></script>
		
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
		  <script type="text/javascript" src="<?php echo $tmpl;?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		  <script type="text/javascript" src="<?php echo $tmpl;?>fancybox/source/helpers/jquery.fancybox-media.js"></script>
		  <script type="text/javascript">
			$(document).ready(function() {
			  jQuery(".fancybox").fancybox();  
			}); 
		  </script>
		  <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                });

                //Programatically call
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

				// navigateTo
                $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {

							var a = this.modal_content.find('.modal-footer a');
							if(a.length > 0) {

								a.click(function(e) {

									e.preventDefault();
									this.navigateTo(2);

								}.bind(this));

							}

                        }
                    });
                });


            });
        </script>
	
		<!-- SmartMenus jQuery plugin -->
		<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.smartmenus.js"></script>  
		<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.smartmenus.bootstrap.js"></script>
		 
	</head>

	<body> 
		<div id="wrapper">
			<header id="header">
				<section id="headnev" class="navbar topnavbar">		
					<div class="container"> 
						<div class="top_header">
							<h3 class="col-sm-6 pull-left h3_logo"><a class="logo" href=""><img src="<?php echo $tmpl;?>img/logo.png"></a></h3> 
							<h3 class="col-sm-2 pull-right h3_logo_2"><a href="http://www.frederiksberg.dk/" target="_blank" class="logo_right"> <img src="<?php echo $tmpl;?>img/logo_right.jpg"> </a>  </h3>					
							
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
								<a href="#" class="btn  btn_login" data-toggle="modal" data-target="#myModal_login" ><i class="fa fa-lock"></i> Forældre Log-ind</a>
								<?php } else {?>
								<div class="w_user_loged">
									<div class="w_user"><span class="user_name">Velkommen Rene Hansen</span> <a href="index.php"> Log ud <i class="fa fa-angle-double-right"></i> </a></div>
									<a href="gallery.php" class="btn btn_fotoalbum">Fotoalbum</a>
									<a href="minkonto.php" class="btn btn_minkonto">Min konto</a> 						
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
						<p> Fritids/junior- og ungdomsklubben Filippa - Filippavej 5 1928 Frederiksberg C <br>Telefon: 38 21 10 80  |  E-mail: <a href="mailto:filippa@frederiksberg.dk"> filippa@frederiksberg.dk </a> </p> 
					</div> <!--  .copyright --> 			 
					<div class=" col-xs-12 col-md-3 sticky-sidebar-social w_social_icons"> 
						<span>FØLG OS PÅ </span>
						<div class="social-icons">
							<a href="#" title="følg os på Facebok" class="facebook" target="_blank"><i class="social_icon fa fa-facebook"></i></a> 
							<a href="#" title="følg os på Goo<h4>Thinkin bout You beatbox cover</h4>gle+" class="googleplus" target="_blank"><i class="social_icon fa fa-googleplus"></i></a>
							<a href="#" title="følg os på Instagram" class="instagram" target="_blank"><i class="social_icon fa fa-instagram"></i></a>
						</div> 
					</div> <!--social-icons-->
				</div>
			</footer> <!-- /.container-full -->
		</section> <!-- /.footer --> 
		
		
		<!-- Begin Modal Login -->
			<div class="modal fade" id="myModal_login" tabindex="-1" role="dialog" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">  </button>
					<h4 class="modal-title title-pp">FORÆLDRE LOGIN ELLER OPRET KONTO</h4>         
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
							<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration&Itemid='); ?>" class="btn btn_tilmeld">Tilmeld</a>                
						</div><!--pp_right-->  
				  </div><!--modal-body-->
				  <div class="modal-footer">
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset&Itemid='); ?>">Har du glemt dit kodeord, tryk her >> </a>
				  </div>
				</div><!--modal-content-->
			  </div><!--modal-dialog-->
			</div><!--#myModal_login-->
			<!--End  Modal Login -->
			
			
		</div><!--#wrapper-->
	</body>
</html>