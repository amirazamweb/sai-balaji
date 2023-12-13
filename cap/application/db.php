<?php  session_start();
/* Database connection start */
$servername = "localhost";
$username = "seskpimy_wiseandrise";
$password = "wiseandrise@123";
$dbname = "seskpimy_careermantra_wiseandrise_database";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
//print_r($conn);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>