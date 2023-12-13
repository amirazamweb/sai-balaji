<?php  session_start();
//print_r($_SESSION);
/* Database connection start */
$servername = "localhost";
$username = "topbschoolsinind_alliance-univer";
$password = "alliance@123";
$dbname = "topbschoolsinind_alliance-university";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($curPageName=='login.php' or $curPageName=='login') 
    {
        
    }
    else
    {
        if(empty($_SESSION['username']))
        {
            header("location: http://saibalajigrouppune.topbschoolsinindia.in/appmanager/login.php");
        }
    }
?>

