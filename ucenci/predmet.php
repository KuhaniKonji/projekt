<?php
$id_predmeta=$_GET['id_predmeta'];
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/ucitelji_pri_predmetu.php");
include("php/naloge_pri_predmetu.php");
include("php/redovalnica.php");
include("php/predmet.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title><?php echo $row_predmet['ime_predmeta'] . " " . $row_predmet['letnik']; ?></title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/predmet.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1><?php echo $row_predmet['ime_predmeta'] . " " . $row_predmet['letnik']; ?></h1>
       <h2>Učitelji</h2>
       <?php include("tabele/ucitelji_pri_predmetu.php"); ?><br><br>
       <h2>Ocene</h2>
       <?php include("tabele/ocene_pri_predmetu.php"); ?><br><br>
       <h2>Naloge</h2>
       <?php include("tabele/naloge_pri_predmetu.php"); ?><br><br>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
