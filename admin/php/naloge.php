<?php
$sql_naloge="select * from naloge, ucitelj_predmet, predmeti 
where naloge.id_predmeta=ucitelj_predmet.id_predmeta 
and ucitelj_predmet.id_ucitelja='$id_ucitelja' and ucitelj_predmet.id_predmeta=predmeti.id_predmeta and naloge.id_predmeta=predmeti.id_predmeta order by ucitelj_predmet.id_predmeta";
$res_naloge=mysqli_query($con, $sql_naloge);

 ?>
