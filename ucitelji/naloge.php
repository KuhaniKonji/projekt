<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucitelj.php");
include("php/oceni_nalogo.php");
include("php/nazadnje_ocenjeno.php");
include("php/naloge.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title>Naloge</title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/naloge.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1>Naloge</h1>
       <?php include("tabele/naloge.php"); ?><br><br>
       <h1>Oceni nalogo</h1>
       <?php include("tabele/oceni_nalogo.php"); ?><br><br>
       <h1>Ocenjene naloge</h1>
       <?php include("tabele/nazadnje_ocenjeno.php"); ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
