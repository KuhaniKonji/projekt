<?php
include("../../php/conn.php");
session_start();
$email=$_POST['email'];
$geslo=$_POST['geslo'];
$email = stripcslashes($email);
$geslo = stripcslashes($geslo);
$email = mysqli_real_escape_string($con, $email);
$geslo = mysqli_real_escape_string($con, $geslo);
$sql = "select * from ucenci where email = '$email' and geslo = '$geslo'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1){
               $_SESSION['id_ucenca']=$row['id_ucenca'];
			         header("location:../index.php");
             }
               else{
                 header("location:../prijava.php?napaka=1");
               }
//header("location:../index.php");

 ?>
