<!doctype html>
<html lang="en"> 
   <?php require_once('head.php'); ?>
<body> 
<div id="wrapper">
<?php require_once('header-2.php'); ?> 

<section class="temp"> 
        <div class="container">
            <div class="w_breadcrumb">
                <ol class="breadcrumb">
                      <li><a href="index-2.php">Forside </a></li>  
                      <li class="active">Min konto</li>
                </ol>
            </div><!--w_breadcrumb-->
            <div class="each_row">
                <div class="col-sm-3 w_nav_left">
                    <ul class="nav_left">
                        <li class="active"><a href="minkonto.php">Min konto</a></li>  
                    </ul>
                </div>
                
                <div class="col-sm-9 form_reg">
                    <h3>Min konto</h3>
                    <div class="form-group">
                        <input type="text" value="rene@graphit.dk" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" value="Rene Hansen" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" value="Tran" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" value="22 22 22 22" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Kodeord (skal være min 4 tegn) *" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Bekræft kodeord *" class="form-control">
                    </div>
                    <p><i>Felter markeret med * skal udfyldes</i> </p>
                     <a class="btn btn_send">GEM</a>
                </div>                  
            </div><!-- /.each_row -->
        </div> <!-- /.container -->
 </section>

 <?php require_once('footer.php'); ?> 
</div><!--#wrapper-->
</body>
</html>