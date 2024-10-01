<?php
$sql_oceni_nalogo="SELECT * FROM oddane_naloge, naloge, predmeti, ucitelj_predmet, ucitelji, ucenci
WHERE ucenci.id_ucenca=oddane_naloge.id_ucenca
and ucitelj_predmet.id_ucitelja=ucitelji.id_ucitelja
and ucitelj_predmet.id_predmeta=predmeti.id_predmeta
and ucitelj_predmet.id_ucitelja='$id_ucitelja'
and  predmeti.id_predmeta=naloge.id_predmeta
and oddane_naloge.id_naloge=naloge.id_naloge 
and oddane_naloge.id_oddane_naloge not in(SELECT id_oddane_naloge from ocenjene_naloge)";
$res_oceni_nalogo=mysqli_query($con, $sql_oceni_nalogo);

 ?>
