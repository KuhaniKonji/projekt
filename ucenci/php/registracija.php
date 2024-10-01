<?php
include("../../php/conn.php");
session_start();
$ime=$_POST['ime'];
$priimek=$_POST['priimek'];
$email=$_POST['email'];
$geslo=$_POST['geslo'];
$email = stripcslashes($email);
$geslo = stripcslashes($geslo);
$email = mysqli_real_escape_string($con, $email);
$geslo = mysqli_real_escape_string($con, $geslo);
$sql = "select * from ucenci where email = '$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1){
               $_SESSION['id_ucenca']=$row['id_ucenca'];
			         header("location:../prijava.php?napaka2=1");
             }
               else{
                 $sql2 = "insert into ucenci (ime, priimek, email, geslo) values('$ime', '$priimek', '$email', '$geslo')";
                 $result2 = mysqli_query($con, $sql2);
                 header("location:../prijava.php?napaka3=1");
               }
//header("location:../index.php");

 ?>
