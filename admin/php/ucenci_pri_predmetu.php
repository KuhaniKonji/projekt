<?php
$sql_ucenci_pri_predmetu="select * from ucenec_predmet, ucenci 
where ucenec_predmet.id_predmeta='$id_predmeta' 
and ucenec_predmet.id_ucenca=ucenci.id_ucenca";
$res_ucenci_pri_predmetu=mysqli_query($con, $sql_ucenci_pri_predmetu);

 ?>
