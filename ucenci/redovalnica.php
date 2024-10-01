<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/moji_predmeti.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title>Redovalnica</title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/redovalnica.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1>Moje ocene</h1>
       <?php include("tabele/redovalnica.php"); ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
