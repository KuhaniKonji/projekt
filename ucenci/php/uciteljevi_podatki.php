<?php
$sql_uciteljevi_podatki="SELECT * FROM ucitelji
where ucitelji.id_ucitelja='$id_ucitelja'";
$res_uciteljevi_podatki=mysqli_query($con, $sql_uciteljevi_podatki);
$row_uciteljevi_podatki=mysqli_fetch_array($res_uciteljevi_podatki);
 ?>
