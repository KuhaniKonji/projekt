<?php
ob_start();
include("php/linki.php");
include("php/session.php");
if (isset($_POST['izbris_ucitelja'])) {
  $id_ucitelja=$_POST['id_ucitelja'];
  $sql = "delete from ucitelji where id_ucitelja='$id_ucitelja'";
  mysqli_query($con, $sql);
  header("location:ucitelji_zaposleni.php");
}
if (isset($_POST['dodaj_ucitelja'])) {
  $ime=$_POST['ime_ucitelja'];
  $priimek=$_POST['priimek_ucitelja'];
  $email=$_POST['email'];
  $geslo=$_POST['geslo'];
  $sql = "insert into ucitelji (id_ucitelja, ime_ucitelja, priimek_ucitelja, email, geslo) values ('$id_ucitelja', '$ime', '$priimek', '$email' , '$geslo')";
  mysqli_query($con, $sql);
  header("location:ucitelji_zaposleni.php");
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
        
        	<?php include("tabele/ucitelji_zaposleni.php"); ?>


          
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>