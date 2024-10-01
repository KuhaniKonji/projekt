<?php
$id_ucitelja=$_GET['id_ucitelja'];
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/uciteljevi_predmeti.php");
include("php/uciteljevi_podatki.php");



 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title><?php echo "Učitelj"?></title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/ucitelj.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1><?php echo $row_uciteljevi_podatki['ime_ucitelja'] . " " . $row_uciteljevi_podatki['priimek_ucitelja'] ?></h1>
       <?php include("tabele/uciteljevi_podatki.php"); ?><br><br>
       <h2>Učiteljevi predmeti</h2>
       <?php include("tabele/uciteljevi_predmeti.php"); ?><br><br>

     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
