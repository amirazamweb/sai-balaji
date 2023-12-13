 <?php
include('conn.php');
	session_start();
  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

	$query=mysqli_query($conn,"select * from user where email='$search'");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
   $_SESSION['sign_msg'] = "Email not Register ";
  			header('location:login.php');

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $email = $row ['email'];
        $password = $row ['password'];
         


        $output .='<div> '.$name.''.$mobile.''.$state.''.$city.' '.$password.'</div>';
        	$to = $email;
			$subject = "mangalmay Forgate User Password";
			$message = "
				<html>
				<head>
				<title>Thank You mangalmay</title>
				</head>
				<body>
				<h2 >Thank You For Forgate password .</h2>
				<p>Your Account:</p>
				<p>Email: ".$email."</p>
				<p>Password: ".$password."</p>
				<p>THank You For Visit mangalmay Site.</p>
			
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: mangalmayadmission2021@gmail.com". "\r\n" .
						"CC:admin@careermantra.net ";

		mail($to,$subject,$message,$headers);

		$_SESSION['sign_msg'] = "your User and password Send your register email.";
  		header('location:login.php');
 
      }

    }
  }

  ?>