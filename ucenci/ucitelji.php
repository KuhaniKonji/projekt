<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/moji_ucitelji.php");
include("php/ostali_ucitelji.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title>Učitelji</title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/ucitelji.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1>Moji učitelji</h1>
       <?php include("tabele/moji_ucitelji.php"); ?><br><br>
       <h1>Ostali učitelji</h1>
       <?php include("tabele/ostali_ucitelji.php"); ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
