<!doctype html>
<html lang="en"> 
   <?php require_once('head.php'); ?>
<body> 
<div id="wrapper">
<?php require_once('header.php'); ?> 

<section class="temp"> 
        <div class="container">
            <div class="w_breadcrumb">
                <ol class="breadcrumb">
                      <li><a href="index.php">Forside </a></li>  
                      <li class="active">Glemt kodeord</li>
                </ol>
            </div><!--w_breadcrumb-->
            <div class="each_row">
                <div class="col-sm-3 w_nav_left">
                    <ul class="nav_left">
                        <li><a href="register.php">Register</a></li>
                        <li class="active"><a href="glemtpass.php">Glemt  kodeord</a></li>  
                    </ul>
                </div>
                <div class="col-sm-9 form_gotpass">
                    <h3>Glemt din adgangskode?</h3>
                    <p>Angiv venligst emailadressen til din konto. En verificeringskode vli blive sendt til dig. Når du har modtaget verificeringskoden vil du kunne vælge en ny adgangskode til din konto.</p>
                    <div class="form-group">
                        <input type="text" placeholder="Email adresse *" class="form-control">
                    </div>
                     <a class="btn btn_send">SEND</a>
                </div> 
                               
            </div><!-- /.each_row -->
        </div> <!-- /.container -->
 </section>

 <?php require_once('footer.php'); ?>
 <?php require_once('popup_login.php'); ?>
</div><!--#wrapper-->
</body>
</html>