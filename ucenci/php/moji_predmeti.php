<?php
$sql_moji_predmeti="SELECT * FROM predmeti, ucenec_predmet, ucitelj_predmet, ucitelji
WHERE predmeti.id_predmeta=ucenec_predmet.id_predmeta
and ucenec_predmet.id_ucenca='$id_ucenca'
and ucitelj_predmet.id_predmeta=predmeti.id_predmeta
and ucitelj_predmet.id_ucitelja=ucitelji.id_ucitelja";
$res_moji_predmeti=mysqli_query($con, $sql_moji_predmeti);
 ?>
