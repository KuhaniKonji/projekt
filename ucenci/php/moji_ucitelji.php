<?php
$sql_moji_ucitelji="SELECT * FROM ucitelji
WHERE id_ucitelja in(SELECT id_ucitelja from ucitelj_predmet, ucenec_predmet
  WHERE ucenec_predmet.id_ucenca='$id_ucenca'
  and ucenec_predmet.id_predmeta=ucitelj_predmet.id_predmeta)";
$res_moji_ucitelji=mysqli_query($con, $sql_moji_ucitelji);
 ?>
