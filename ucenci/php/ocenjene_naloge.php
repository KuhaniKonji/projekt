<?php
$sql_ocenjene_naloge="SELECT * FROM ocenjene_naloge, oddane_naloge, naloge, predmeti
WHERE ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge
and oddane_naloge.id_ucenca='$id_ucenca' 
and oddane_naloge.id_naloge=naloge.id_naloge
and naloge.id_predmeta=predmeti.id_predmeta";
$res_ocenjene_naloge=mysqli_query($con, $sql_ocenjene_naloge);
 ?>
