<?php
$id_predmeta=$_GET['id_predmeta'];
include("php/linki.php");
include("php/session.php");
include("php/sql_ucitelj.php");
include("php/predmet.php");



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
       <?php $row_predmet=mysqli_fetch_array($res_predmet)?>
        <h1>
          <?php 
          $id_predmeta=$row_predmet['id_predmeta'];
          echo $row_predmet['ime_predmeta'] . " " . $row_predmet['letnik']; 
          ?>
        </h1>
<?php 
  echo"<h2> Ocene </h2>";
  include("tabele/ucenci_pri_predmetu.php");
  echo"<h2> Naloge </h2>";
  include("tabele/naloge_pri_predmetu.php");
?>


     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
