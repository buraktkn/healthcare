<?php
@ob_start(); 
@session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$db = "healthcare";

$baglan = mysqli_connect($servername, $username, $password,$db);

if (!$baglan) {
   die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($baglan, "UTF8");

?> 