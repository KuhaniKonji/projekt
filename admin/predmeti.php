<?php
ob_start();
include("php/linki.php");
include("php/session.php");
if (isset($_POST['izbris_predmeta'])) {
  $id_predmeta=$_POST['id_predmeta'];
  $sql = "delete from predmeti where id_predmeta='$id_predmeta'";
  mysqli_query($con, $sql);
  header("location:predmeti.php");
}
if (isset($_POST['razpis_predmeta'])) {
  $naslov=$_POST['ime_predmeta'];
  $id_predmeta=$_POST['id_predmeta'];
  $id_ucitelja=$_POST['id_ucitelja'];
  $letnik=$_POST['letnik'];
  $okrajsava=$_POST['okrajsava'];
  $sql = "insert into predmeti (id_predmeta, ime_predmeta, letnik, okrajsava) values ('$id_predmeta', '$naslov', '$letnik', '$okrajsava')";
  mysqli_query($con, $sql);
  $sql = "insert into ucitelj_predmet (id_predmeta, id_ucitelja) values ('$id_predmeta', '$id_ucitelja')";
  mysqli_query($con, $sql);
  header("location:predmeti.php");
}

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
       <?php include("tabele/predmet.php"); ?><br><br>
      

     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
