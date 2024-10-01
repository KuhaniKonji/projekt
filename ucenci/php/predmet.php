<?php
$sql_predmet="select * from predmeti where id_predmeta='$id_predmeta'";
$res_predmet=mysqli_query($con, $sql_predmet);
$row_predmet=mysqli_fetch_array($res_predmet);
 ?>
