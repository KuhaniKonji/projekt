<?php
$sql_nove_ocene="SELECT * FROM ocenjene_naloge, oddane_naloge, naloge, predmeti
WHERE ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge
and oddane_naloge.id_ucenca='$id_ucenca'
AND oddane_naloge.id_naloge=naloge.id_naloge
and naloge.id_predmeta=predmeti.id_predmeta";
$res_nove_ocene=mysqli_query($con, $sql_nove_ocene);
 ?>
