<?php
$sql_moji_predmeti="SELECT * FROM predmeti, ucitelj_predmet
WHERE ucitelj_predmet.id_predmeta=predmeti.id_predmeta
and ucitelj_predmet.id_ucitelja='$id_ucitelja'";
$res_moji_predmeti=mysqli_query($con, $sql_moji_predmeti);
 ?>
