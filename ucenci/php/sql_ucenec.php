<?php
$sql_ucenec_podatki="select * from ucenci where id_ucenca='$id_ucenca'";
$res_ucenec_podatki=mysqli_query($con, $sql_ucenec_podatki);
$row_ucenec_podatki=mysqli_fetch_array($res_ucenec_podatki);
$ime_ucenca=$row_ucenec_podatki['ime'] . " " . $row_ucenec_podatki['priimek'];
 ?>
