<?php
$sql_ostali_ucitelji="SELECT * FROM ucitelji
WHERE id_ucitelja not in(SELECT id_ucitelja from ucitelj_predmet, ucenec_predmet
  WHERE ucenec_predmet.id_ucenca='1'
  and ucenec_predmet.id_predmeta=ucitelj_predmet.id_predmeta)";
$res_ostali_ucitelji=mysqli_query($con, $sql_ostali_ucitelji);
 ?>
