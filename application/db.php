<?php  session_start();
/* Database connection start */

$conn = mysqli_connect("localhost","topbschoolsinind_alliance-univer","alliance@123","topbschoolsinind_alliance-university") or die("Connection failed: " . mysqli_connect_error());
//print_r($conn);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>