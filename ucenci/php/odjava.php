<?php

session_start();
$_SESSION['id_ucenca']="";
session_unset();
session_destroy();
header("location:../prijava.php");



 ?>
