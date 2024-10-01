<?php
include("php/linki.php");
include("php/session.php");



if (isset($_POST['izbris'])) {
  $id_naloge=$_POST['id_naloge'];
  $sql = "delete from naloge where id_naloge='$id_naloge'";
  mysqli_query($con, $sql);
  header("location:index.php");
}
if (isset($_POST['uredi'])) {
  $id_naloge=$_POST['id_naloge'];
  header("location:index.php?uredinalogo=$id_naloge");
}
if (isset($_POST['razpis'])) {
  $naslov=$_POST['ime_naloge'];
  $id_predmeta=$_POST['value'];
  $navodilo=$_POST['navodilo'];
  $rok_za_oddajo=$_POST['rok_za_oddajo'];
  $sql = "insert into naloge (id_naloge, ime_naloge, id_predmeta, navodilo, rok_za_oddajo) values ('$id_naloge', '$naslov', '$id_predmeta', '$navodilo', '$rok_za_oddajo')";
  mysqli_query($con, $sql);
  header("location:index.php");

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    include("../php/fonts.php");
     ?>
    <title>Domov</title>
    <style media="screen">
      <?php
      include("../css/master.css");
      include("../css/table.css");
      include("css/index.css");
       ?>
    </style>
  </head>
  <body>
    <header>
      <?php include("deli_strani/header.php"); ?>
    </header>
    <main>
      <h1>Pozdravljen <?php echo "Admin"; ?></h1>
      <div class="container">
        
        <div class="box-100">
          <h2>Moji predmeti</h2>
          <?php include("tabele/moji_predmeti.php"); ?>
        </div>
        <div class="box-100">
          <h2>Nazadnje ocenjeno</h2>
          <?php include("tabele/nazadnje_ocenjeno.php"); ?>
        </div>
        
      </div>
    </main>
    <footer>
      <?php include("deli_strani/footer.php"); ?>
    </footer>
  </body>
</html>
