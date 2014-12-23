<head>
	<meta charset="UTF-8">
	<meta name="description" content="" >
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link href="nav.ico" rel="shortcut icon"/>

	<title>Fritids- og juniorklubben Filippa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="css/ekko-lightbox.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_mobile.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font/stylesheet.css" type="text/css" charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.5; user-scalable=1;" />    

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/ekko-lightbox.js"></script>
	
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
	  <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
	  <script type="text/javascript">
	    $(document).ready(function() {
		    $(".fancybox").fancybox();
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
  	<script type="text/javascript" src="js/jquery.smartmenus.js"></script>  
	<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
	 
</head>