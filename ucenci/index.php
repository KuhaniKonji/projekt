<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/nove_naloge.php");
include("php/moji_predmeti.php");
include("php/nove_ocene.php");
include("php/moji_ucitelji.php");


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
      <h1>Pozdravljen <?php echo $ime_ucenca; ?></h1>
      <div class="container">
        <div class="naloge">
          <h2>Nove naloge</h2>
          <?php include("tabele/nove_naloge.php"); ?>
        </div>
        <div class="predmeti">
          <h2>Moji predmeti</h2>
          <?php include("tabele/moji_predmeti.php"); ?>
        </div>
        <div class="ocene">
          <h2>Nove ocene</h2>
          <?php include("tabele/nove_ocene.php"); ?>
        </div>
        <div class="ucitelji">
          <h2>Moji učitelji</h2>
          <?php include("tabele/moji_ucitelji.php"); ?>
        </div>
      </div>
    </main>
    <footer>
      <?php include("deli_strani/footer.php"); ?>
    </footer>
  </body>
</html>
