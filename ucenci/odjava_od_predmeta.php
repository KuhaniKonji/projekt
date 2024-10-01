
 <?php
 include("php/linki.php");
 include("php/session.php");
 include("php/sql_ucenec.php");
 include("php/naloga.php");
 $id_predmeta=$_GET['id_predmeta'];


 $sql = "delete from ucenec_predmet where id_ucenca='$id_ucenca' and id_predmeta='$id_predmeta'";
 $result = mysqli_query($con, $sql);
 header("location:index.php");
  ?>
