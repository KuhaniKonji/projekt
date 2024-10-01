<?php
include("php/linki.php");


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php
     include("../php/fonts.php");
      ?>
     <title>Prijava</title>
     <style media="screen">
       <?php
       include("../css/master.css");
       include("../css/table.css");
       include("css/prijava.css");
        ?>
     </style>
   </head>
   <body>
     <main>
       <h1>Prijava</h1>
       <div class="box">
         <form action="php/prijava.php" method="post">
           <label for="email">Uporabniško ime:</label><br>
           <input type="text" name="email" placeholder="Email" required><br>
           <label for="geslo">Geslo:</label><br>
           <input type="password" name="geslo" placeholder="Geslo" required><br>
           <input class="submit" type="submit" value="Prijava"><br>
           <?php if (isset($_GET['napaka'])) {
             // code...
            ?>
           <p>Napačno geslo ali email!</p>
         <?php } ?>
         <?php if (isset($_GET['napaka3'])) {
           // code...
          ?>
         <p>Prijavi se</p>
       <?php } ?>
         </form>
       </div>
     </main>
   </body>
 </html>
