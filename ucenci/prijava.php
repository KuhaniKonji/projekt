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
           <label for="email">Email:</label><br>
           <input type="email" name="email" placeholder="Email" required><br>
           <label for="geslo">Geslo:</label><br>
           <input type="password" name="geslo" placeholder="Geslo" required><br>
           <input class="submit" type="submit" value="Prijava"><br>
           <?php if (isset($_GET['napaka'])) {
            
            ?>
           <p>Napačno geslo ali email!</p>
         <?php } ?>
         <?php if (isset($_GET['napaka3'])) {
          
          ?>
         <p>Prijavi se</p>
       <?php } ?>
         </form>
       </div>
      <h1>Registracija</h1>  <div class="box">
         <form action="php/registracija.php" method="post">
           <label for="ime">Ime:</label><br>
           <input type="text" name="ime" placeholder="Ime" required><br>
           <label for="priimek">Priimek:</label><br>
           <input type="text" name="priimek" placeholder="Priimek" required><br>
           <label for="email">Email:</label><br>
           <input type="email" name="email" placeholder="Email" required><br>
           <label for="geslo">Geslo:</label><br>
           <input type="password" name="geslo" placeholder="Geslo" required><br>
           <input class="submit" type="submit" value="Registracija"><br>
           <?php if (isset($_GET['napaka2'])) {
             
            ?>
           <p>Email že obstaja</p>
         <?php } ?>
         </form>
       </div>
      <a href="../ucitelji/prijava.php">Prijava kot učitelj</a>
     </main>
   </body>
 </html>
