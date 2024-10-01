<?php
$sql_nazadnje_ocenjeno="SELECT * 
FROM ocenjene_naloge, oddane_naloge, naloge, ucitelj_predmet, predmeti, ucenci 
WHERE ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge 
and oddane_naloge.id_naloge=naloge.id_naloge and naloge.id_predmeta=ucitelj_predmet.id_predmeta 
and ucitelj_predmet.id_ucitelja='1' and ucitelj_predmet.id_predmeta=predmeti.id_predmeta 
and oddane_naloge.id_ucenca=ucenci.id_ucenca limit 5; ";
$res_nazadnje_ocenjeno=mysqli_query($con, $sql_nazadnje_ocenjeno);
 ?>