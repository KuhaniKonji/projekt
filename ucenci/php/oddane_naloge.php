<?php
$sql_oddane_naloge="SELECT * FROM oddane_naloge, naloge, predmeti
WHERE oddane_naloge.id_ucenca='$id_ucenca'
and oddane_naloge.id_naloge=naloge.id_naloge
and naloge.id_predmeta=predmeti.id_predmeta
and oddane_naloge.id_oddane_naloge not in(select id_oddane_naloge from ocenjene_naloge)";
$res_oddane_naloge=mysqli_query($con, $sql_oddane_naloge);
 ?>
