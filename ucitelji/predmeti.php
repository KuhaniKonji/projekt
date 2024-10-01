<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucitelj.php");
include("php/moji_predmeti.php");
include("php/ostali_predmeti.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title>Predmeti</title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/predmeti.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1>Moji predmeti</h1>
       <?php include("tabele/moji_predmeti.php"); ?><br><br>
       <h1>Ostali predmeti</h1>
       <?php include("tabele/ostali_predmeti.php"); ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
