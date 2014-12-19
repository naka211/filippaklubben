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
                      <li class="active">Register</li>
                </ol>
            </div><!--w_breadcrumb-->
            <div class="each_row">
                <div class="col-sm-3 w_nav_left">
                    <ul class="nav_left">
                        <li class="active"><a href="register.php">Register</a></li>
                        <li><a href="glemtpass.php">Glemt kodeord</a></li>  
                    </ul>
                </div>
                
                <div class="col-sm-9 form_reg">
                    <h3>Tak for tilmelding af firma</h3>
                    <p>En e-mail med dine login-oplysninger er sendt til lorem@ipsum.dk.</p>
                     
                     <a class="btn btn_send" href="index.php">FORSIDE</a>
                </div>                  
            </div><!-- /.each_row -->
        </div> <!-- /.container -->
</section>

 <?php require_once('footer.php'); ?>
 <?php require_once('popup_login.php'); ?>
</div><!--#wrapper-->
</body>
</html>