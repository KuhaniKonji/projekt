<?php
$sql_nove_naloge="SELECT * FROM predmeti, naloge, ucenec_predmet
WHERE ucenec_predmet.id_predmeta=naloge.id_predmeta
and predmeti.id_predmeta=ucenec_predmet.id_predmeta
and ucenec_predmet.id_ucenca='$id_ucenca'
and naloge.id_naloge not in(SELECT id_naloge FROM oddane_naloge where id_ucenca='$id_ucenca')";
$res_nove_naloge=mysqli_query($con, $sql_nove_naloge);
 ?>
