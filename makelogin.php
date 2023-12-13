<?php
	include('conn.php');
	session_start();
	
if(isset($_POST['user_email']) && isset($_POST['user_password'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['user_email'])) && !empty(trim($_POST['user_password']))){


// Escape special characters.
$user_email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['user_email'])));

$query = mysqli_query($conn, "SELECT * FROM `users` WHERE user_email = '$user_email'");

if(mysqli_num_rows($query) > 0){

$row = mysqli_fetch_assoc($query);
$user_db_pass = $row['user_password'];

// VERIFY PASSWORD
$check_password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_password']));


if($check_password === TRUE){

session_regenerate_id(true);

$_SESSION['user_email'] = $user_email;  
header('Location: index.php');
exit;

}
else{
// INCORRECT PASSWORD
$error_message = "Incorrect Email Address or Password.";
header('Location: login.php');
}

}
else{
// EMAIL NOT REGISTERED
$error_message = "Incorrect Email Address or Password.";
header('Location: login.php');
}


}
else{

// IF FIELDS ARE EMPTY
$error_message = "Please fill in all the required fields.";
header('Location: login.php');
}

}
?>