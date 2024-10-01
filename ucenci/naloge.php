<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/nove_naloge.php");
include("php/oddane_naloge.php");
include("php/ocenjene_naloge.php");


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
       <h1>Nove naloge</h1>
       <?php include("tabele/nove_naloge.php"); ?><br><br>
       <h1>Oddane naloge</h1>
       <?php include("tabele/oddane_naloge.php"); ?><br><br>
       <h1>Ocenjene naloge</h1>
       <?php include("tabele/ocenjene_naloge.php"); ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
