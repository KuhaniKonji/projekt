<?php
include("php/linki.php");
include("php/session.php");

if (isset($_POST['izbris_naloge'])) {
  $id_naloge=$_POST['id_naloge'];
  $sql = "delete from naloge where id_naloge='$id_naloge'";
  mysqli_query($con, $sql);
  header("location:naloge.php");
}
if (isset($_POST['izbris_oddane_naloge'])) {
  $id_naloge=$_POST['id_oddane_naloge'];
  $sql = "delete from oddane_naloge where id_oddane_naloge='$id_naloge'";
  mysqli_query($con, $sql);
  header("location:naloge.php");
}
if (isset($_POST['izbris_ocenjene_naloge'])) {
  $id_naloge=$_POST['id_ocenjene_naloge'];
  $sql = "delete from ocenjene_naloge where id_ocenjene_naloge='$id_naloge'";
  mysqli_query($con, $sql);
  header("location:naloge.php");
}
if (isset($_POST['uredi_naloge'])) {
  $id_naloge=$_POST['id_naloge'];
  header("location:naloge.php?uredi_nalogo=$id_naloge");
}
if (isset($_POST['razpis_naloge'])) {
  $naslov=$_POST['ime_naloge'];
  $id_predmeta=$_POST['value'];
  $navodilo=$_POST['navodilo'];
  $rok_za_oddajo=$_POST['rok_za_oddajo'];
  $sql = "insert into naloge (id_naloge, ime_naloge, id_predmeta, navodilo, rok_za_oddajo) values ('$id_naloge', '$naslov', '$id_predmeta', '$navodilo', '$rok_za_oddajo')";
  mysqli_query($con, $sql);
  header("location:naloge.php");
}
if (isset($_POST['edit_naloge'])) {
  $id_naloge=$_POST['id_naloge'];
  $naslov=$_POST['ime_naloge'];
  $id_predmeta=$_POST['value'];
  $navodilo=$_POST['navodilo'];
  $rok_za_oddajo=$_POST['rok_za_oddajo'];
  $sql = "update naloge set id_naloge='$id_naloge', ime_naloge='$naslov', navodilo='$navodilo', rok_za_oddajo='$rok_za_oddajo' where id_naloge='$id_naloge'";
  mysqli_query($con, $sql);
  header("location:naloge.php");
}
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
       <?php include("tabele/naloge.php"); ?>
       <?php include("tabele/oddane_naloge.php"); ?>
       <?php include("tabele/ocenjene_naloge.php"); ?>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
