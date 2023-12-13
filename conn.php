<?php session_start();

#$con = mysqli_connect("localhost","my_user","my_password","my_db");
$conn = mysqli_connect("localhost","topbschoolsinind_alliance-univer","alliance@123","topbschoolsinind_alliance-university");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}else{
}
?>