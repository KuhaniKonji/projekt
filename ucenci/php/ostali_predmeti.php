<?php
$sql_ostali_predmeti="SELECT * FROM predmeti, ucitelj_predmet, ucitelji
WHERE ucitelji.id_ucitelja=ucitelj_predmet.id_ucitelja
and ucitelj_predmet.id_predmeta=predmeti.id_predmeta
and predmeti.id_predmeta not in(SELECT id_predmeta FROM ucenec_predmet 
  where id_ucenca='$id_ucenca');";
$res_ostali_predmeti=mysqli_query($con, $sql_ostali_predmeti);
 ?>
