<?php
// Configure connection settings
$db = 'id7465941_maged';
$db_admin = 'id7465941_root';
$db_password = '123!@#123';
$con = mysqli_connect("localhost", "$db_admin", "$db_password", "$db");

// show arabic result
$arabicsql= 'SET CHARACTER SET utf8';
mysqli_query($con,$arabicsql) or die(mysqli_error($con));
session_start();
?>

