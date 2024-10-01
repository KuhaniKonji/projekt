<?php
session_start();
if ($_SESSION['admin']=="") {
	header("location:prijava.php");
	# code...
}

 ?>
