<?php
$sql_redovalnica="SELECT * FROM oddane_naloge, naloge, ocenjene_naloge
WHERE oddane_naloge.id_ucenca='$id_ucenca'
and oddane_naloge.id_naloge=naloge.id_naloge
and naloge.id_predmeta='$id_predmeta'
and ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge";
$res_redovalnica=mysqli_query($con, $sql_redovalnica);
$sql_avg="SELECT AVG(ocenjene_naloge.ocena) FROM oddane_naloge, naloge, ocenjene_naloge
WHERE oddane_naloge.id_ucenca='$id_ucenca'
and oddane_naloge.id_naloge=naloge.id_naloge
and naloge.id_predmeta='$id_predmeta'
and ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge";
$res_avg=mysqli_query($con, $sql_avg);

 ?>
