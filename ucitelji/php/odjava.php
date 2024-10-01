<?php

session_start();
$_SESSION['id_ucitelja']="";
session_unset();
session_destroy();
header("location:../prijava.php");



 ?>
