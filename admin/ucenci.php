<?php
ob_start();
include("php/linki.php");
include("php/session.php");
if (isset($_POST['izbris_ucenca'])) {
  $id_ucenca=$_POST['id_ucenca'];
  $sql = "delete from ucenci where id_ucenca='$id_ucenca'";
  mysqli_query($con, $sql);
  header("location:ucenci.php");
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
        
        	<?php include("tabele/ucenci_pri_predmetu.php"); ?>


          
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
