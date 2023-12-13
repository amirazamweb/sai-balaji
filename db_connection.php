<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


$servername = "localhost";
$username = "zjyosduo_harsha";
$password = "harsha@123";
$dbname = "zjyosduo_harsha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
	//echo "connected";
}
