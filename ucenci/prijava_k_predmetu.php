<?php
include("php/linki.php");
include("php/session.php");
include("php/sql_ucenec.php");
include("php/naloga.php");
$id_predmeta=$_GET['id_predmeta'];


$sql = "insert into ucenec_predmet (id_predmeta, id_ucenca) values('$id_predmeta', '$id_ucenca')";
$result = mysqli_query($con, $sql);
header("location:index.php");
 ?>
