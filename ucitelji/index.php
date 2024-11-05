<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucitelj.php");
include("php/oceni_nalogo.php");
include("php/moji_predmeti.php");
include("php/nazadnje_ocenjeno.php");


if (isset($_POST['oceni'])) {
  $ocena=$_POST['ocena'];
  $id_oddane_naloge=$_POST['id_oddane_naloge'];
  mysqli_query($con, "insert into ocenjene_naloge (ocena, id_oddane_naloge) values ('$ocena', '$id_oddane_naloge')");
  header("location:index.php");

}
if (isset($_POST['razpis'])) {
  $naslov=$_POST['naslov'];
  $id_predmeta=$_POST['value'];
  $navodilo=$_POST['navodilo'];
  $rok_za_oddajo=$_POST['rok_za_oddajo'];
  $sql_x = "insert into naloge (ime_naloge, id_predmeta, navodilo, rok_za_oddajo) values ('$naslov', '$id_predmeta', '$navodilo', '$rok_za_oddajo')";
  mysqli_query($con, $sql_x);
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
      <h1>Pozdravljen <?php echo $ime_ucitelja; ?></h1>
      <div class="container">
        <div class="naloge">
          <h2>Oceni nalogo</h2>
          <?php include("tabele/oceni_nalogo.php"); ?>
        </div>
        <div class="predmeti">
          <h2>Moji predmeti</h2>
          <?php include("tabele/moji_predmeti.php"); ?>
        </div>
        <div class="ocene">
          <h2>Nazadnje ocenjeno</h2>
          <?php include("tabele/nazadnje_ocenjeno.php"); ?>
        </div>
        <div class="ucitelji">
          <h2>Razpiši nalogo</h2>
          <?php include("tabele/razpisi_nalogo.php"); ?>
        </div>
      </div>
    </main>
    <footer>
      <?php include("deli_strani/footer.php"); ?>
    </footer>
  </body>
</html>
