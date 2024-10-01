<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucitelj.php");
include("php/moji_predmeti.php");


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
       <?php while($row_moji_predmeti=mysqli_fetch_array($res_moji_predmeti)){ ?>
        <h1>
          <?php 
          $id_predmeta=$row_moji_predmeti['id_predmeta'];
          echo $row_moji_predmeti['ime_predmeta'] . " " . $row_moji_predmeti['letnik']; 
          ?>
        </h1>
        	<?php include("tabele/ucenci_pri_predmetu.php"); ?>


        <?php } ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
