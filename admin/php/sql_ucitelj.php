<?php
$sql_ucitelj_podatki="select * from ucitelji where id_ucitelja='$id_ucitelja'";
$res_ucitelj_podatki=mysqli_query($con, $sql_ucitelj_podatki);
$row_ucitelj_podatki=mysqli_fetch_array($res_ucitelj_podatki);
$ime_ucitelja=$row_ucitelj_podatki['ime_ucitelja'] . " " . $row_ucitelj_podatki['priimek_ucitelja'];
 ?>
