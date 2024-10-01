<?php
session_start();
if ($_SESSION['id_ucenca']=="") {
	header("location:prijava.php");
	# code...
}
$id_ucenca=$_SESSION['id_ucenca'];
 ?>
