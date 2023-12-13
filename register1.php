<?php
	include('conn.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
$name=check_input($_POST['name']);
	$email=check_input($_POST['email']);
	$mobile=check_input($_POST['mobile']);
	$password=(check_input($_POST['password']));
	$state=check_input($_POST['state']);
	$city=check_input($_POST['city']);
	$course=check_input($_POST['course']);
	$status=check_input($_POST['status']);
	$uploadtime = date("Y-m-d H:i:s");

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "Invalid email format";
  		header('location:index.php');
	}

	else{

		$query=mysqli_query($conn,"select * from user where email='$email'");
		if(mysqli_num_rows($query)>0){
			$_SESSION['sign_msg'] = "Email already taken";
  			header('location:index.php');
		}
		else{
		//depends on how you set your verification code
		

		mysqli_query($conn,"insert into user (name,email,mobile, password,state,city,course, status,created) values ('$name','$email', '$mobile','$password','$state','$city','$course', '$status','$uploadtime')");
		
		//default value for our verify is 0, means it is unverified

		//sending email verification
		$to = $email;
			$subject = "Mangalmay User Details Mail";
			$message = "
				<html>
				<head>
				<title>Thank You Mangalmay</title>
				</head>
				<body>
				<h2 >Thank you for Registering.</h2>
				<p>Your Account:</p>
				<p>Email: ".$email."</p>
				<p>Password: ".$_POST['password']."</p>
				<p>THank You For Visit Mangalmay.</p>
			
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: mangalmayadmission2021@gmail.com". "\r\n" .
						"CC:admin@careermantra.net";

		mail($to,$subject,$message,$headers);
	

		$_SESSION['sign_msg'] = "You are successfully Register Kindly Login please.";
  		header('location:login.php');

  		}
	}
	}
?>