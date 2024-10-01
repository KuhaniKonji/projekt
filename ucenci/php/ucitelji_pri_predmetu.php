<?php
$sql_ucitelji_pri_predmetu="SELECT * FROM ucitelji, ucitelj_predmet
where ucitelji.id_ucitelja=ucitelj_predmet.id_ucitelja
and ucitelj_predmet.id_predmeta='$id_predmeta'";
$res_ucitelji_pri_predmetu=mysqli_query($con, $sql_ucitelji_pri_predmetu);
 ?>
