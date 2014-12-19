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
                  <li><a href="index.php">Forside</a></li> 
                  <li class="active">Kontakt</li>
            </ol>
        </div><!--w_breadcrumb-->
        <div class="each_row">
        	 <h3>Kontakt os</h3>
            <div class="col-sm-6 info_kontackt">                
                 <h4>Fritids/junior og ungdomsklubben Filippa</h4>
                 <p>Filippavej 5 1928 Frederiksberg C <br> Telefon: 38 21 10 80<br> E-mail: <a href="mailto:filippa@frederiksberg.dk">filippa@frederiksberg.dk</a></p>
                 <p></p> 

                 <h4>Leder: Michael Vork  </h4>
                 <p>Telefon: 38 21 10 80 / 28 98 10 81 <br> E-mail: <a href="mailto:mivo01@frederiksberg.dk">mivo01@frederiksberg.dk</a></p> 

                 <h4>Souschef: Linda Nordam Larsen</h4>
                 <p>Telefon: 38 21 10 80 / 28 98 10 82<br> Telefon: 38 21 10 80<br> E-mail: <a href="mailto:lila02@frederiksberg.dk">lila02@frederiksberg.dk</a></p> 
                 <p>Vi kan kontaktes i dagtimerne mellem kl. 9,00-16,00</p> 
                 <p>Såfremt I skal melde jeres børn fri mv. skal følgende mail benyttes:</p>
                 <p><a href="mailto:filippa@frederiksberg.dk">filippa@frederiksberg.dk</a></p>

            </div>
            <div class="col-sm-6 form_kontackt">
                <h4>Kontakt formular</h4>
                <form role="form">
                      <div class="form-group">
                        <input type="text" placeholder="Navn *" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Telefon *" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="email" placeholder="E-mail *" class="form-control">
                      </div>
                      <div class="form-group">
                        <textarea placeholder="Besked" rows="4" class="form-control"></textarea>
                      </div>
                      <p><i>Felter markeret med * skal udfyldes</i></p>
                      <a class="btn btn_send">SEND</a>
                </form>                
            </div>                 
        </div><!-- /.each_row -->
    </div> <!-- /.container -->
</section>

 <?php require_once('footer.php'); ?>
 <?php require_once('popup_login.php'); ?>
</div><!--#wrapper-->
</body>
</html>