<?php
$server = "localhost";
$username= "root";
$email= "root";
$password="";
$database="user_01a";

$conn=mysqli_connect($server,$username, $password, $database);
if(!$conn){
	die("error".mysqli_connect_error());
}
?>