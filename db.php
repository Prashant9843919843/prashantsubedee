<?php

$server = "	sql204.epizy.com";
$username = "epiz_27882951";
$password = "s3o1PbiusZdCgp";
$dbname= "epiz_27882951_prashantsubedee";

$conn = mysqli_connect($srver,$username,$password,$dbname);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}

?>