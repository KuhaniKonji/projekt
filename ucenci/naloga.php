<?php
$id_naloge=$_GET['id_naloge'];
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/naloga.php");

if (isset($_POST['upload'])) {
  $file=$_FILES['file']['name'];
  $file_loc=$_FILES['file']['tmp_name'];
  $file_folder="../Naloge/";
  if (move_uploaded_file($file_loc, $file_folder.$file)) {
    $file_for_db=$file_folder.$file;
    $sql2="insert into oddane_naloge (id_ucenca, id_naloge, naloga) values ('$id_ucenca', '$id_naloge', '$file_for_db')";
    mysqli_query($con, $sql2);
    header("location:index.php");
  }
    # code...
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title>Naloga</title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/naloga.css");
        ?>
     </style>
   </head>
   <body>
     <header>
       <?php include("deli_strani/header.php"); ?>
     </header>
     <main>
       <h1><?php echo $row_naloga['ime_naloge']; ?></h1>
       <h3>Navodilo:</h3>
       <p><?php echo $row_naloga['navodilo']; ?></p>
       <h3>Rok za oddajo:</h3>
       <p><?php echo $row_naloga['rok_za_oddajo']; ?></p>
       <br>
       <form action="#" method="post" enctype="multipart/form-data">
         <input type="file" name="file"><br><br>
         <input class="submit" type="submit" name="upload" value="Naloži">
       </form>
     </main>
     <footer>
       <?php include("deli_strani/footer.php"); ?>
     </footer>
   </body>
 </html>
