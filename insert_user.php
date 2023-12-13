<?php

if(isset($_POST['username']) && isset($_POST['user_email']) && isset($_POST['user_password'])){

// CHECK IF FIELDS ARE NOT EMPTY

if(!empty(trim($_POST['username'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_password'])){



// Escape special characters.
$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
$user_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_email']));
$mobile = mysqli_real_escape_string($conn, htmlspecialchars($_POST['mobile']));
$state = mysqli_real_escape_string($conn, htmlspecialchars($_POST['state']));
$city = mysqli_real_escape_string($conn, htmlspecialchars($_POST['city']));
$course = mysqli_real_escape_string($conn, htmlspecialchars($_POST['course']));
$status = mysqli_real_escape_string($conn, htmlspecialchars($_POST['status']));

//IF EMAIL IS VALID
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {  



// CHECK IF EMAIL IS ALREADY REGISTERED

$check_email = mysqli_query($conn, "SELECT `user_email` FROM `users` WHERE user_email = '$user_email'");

if(mysqli_num_rows($check_email) > 0){    
$error_message = "This Email Address is already registered. Please Try another.";
	header('location:login.php');
}
else{
// IF EMAIL IS NOT REGISTERED
/* -- 

ENCRYPT USER PASSWORD USING PHP password_hash function 
LEARN ABOUT PHP password_hash - http://php.net/manual/en/function.password-hash.php

-- */
$user_hash_password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_password']));



// INSER USER INTO THE DATABASE

$insert_user = mysqli_query($conn, "INSERT INTO `users` (username, user_email, mobile,user_password,state,city,course,status) VALUES ('$username', '$user_email','$mobile', '$user_hash_password','$state','$city','$course','$status')");

if($insert_user === TRUE){
$success_message = "Thanks! You have successfully signed up.";
header('location:login.php');
}
else{
$error_message = "Oops! something wrong.";
header('location:login.php');
}

}    

}
else {
// IF EMAIL IS INVALID
$error_message = "Invalid email address";
header('location:login.php');
}

}
else{
// IF FIELDS ARE EMPTY

$error_message = "Please fill in all the required fields.";
header('location:login.php');

}

}

?>