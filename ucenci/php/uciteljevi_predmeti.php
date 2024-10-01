<?php
$sql_uciteljevi_predmeti="SELECT * FROM ucitelj_predmet, predmeti
where ucitelj_predmet.id_predmeta=predmeti.id_predmeta
and ucitelj_predmet.id_ucitelja='$id_ucitelja'";
$res_uciteljevi_predmeti=mysqli_query($con, $sql_uciteljevi_predmeti);
 ?>
