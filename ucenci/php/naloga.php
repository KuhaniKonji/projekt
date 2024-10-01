<?php
$sql_naloga="select * from naloge where id_naloge='$id_naloge'";
$res_naloga=mysqli_query($con, $sql_naloga);
$row_naloga=mysqli_fetch_array($res_naloga);
 ?>
