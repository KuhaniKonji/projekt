<?php
session_start();
if ($_SESSION['id_ucitelja']=="") {
	header("location:prijava.php");
	# code...
}
$id_ucitelja=$_SESSION['id_ucitelja'];
 ?>
