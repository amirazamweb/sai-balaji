<?php session_start();
        include('conn.php');
print_r($_SESSION);
 echo $otp=$_SESSION['otp'];
 $userotp=$_POST['otp'];
	if (isset($_POST['verifyotp'])) {
			if ($userotp==""){
				 echo "<script>
						window.location.href='http://saibalajigrouppune.topbschoolsinindia.in/';
						alert('Enter Your OTP');
						</script>";
			}
			else if(strlen($userotp)<4 ){
				 echo "<script>
						window.location.href='http://saibalajigrouppune.topbschoolsinindia.in/';
						alert('Enter valid OTP');
						</script>";
			}
			else if ($otp==$userotp){

				$name=$_SESSION['name'];
				$email=$_SESSION['email'];
				$mobile=$_SESSION['mobile'];
				$state=$_SESSION['state'];
				$city=$_SESSION['city'];
				$course=$_SESSION['course'];
				$status=$_SESSION['status'];
				$uploadtime = date("Y-m-d H:i:s");
				$sourse='sai-balaji-group';

				$query=mysqli_query($conn,"select * from user where email='$email'");
					if(mysqli_num_rows($query)>0){
						echo "<script>
						window.location.href='https://saibalajigrouppune.topbschoolsinindia.in/thanks.php';
						alert('Email already Exist');
						</script>";
					}
					else{ 
						echo $sql="INSERT INTO `user`(`sourse`,`name`, `email`, `mobile`,`state`, `city`, `course`, `status`, `created`) 
					values ('$sourse','$name','$email', '$mobile','$state','$city','$course', '$status','$uploadtime')";
					$result=mysqli_query($conn,$sql);
					// die();
					  if ($conn->query($sql) == TRUE) {
						 echo "<script>
						window.location.href='https://saibalajigrouppune.topbschoolsinindia.in/thanks.php';
						alert('Registered Succesfully!');
						</script>";
                       //die();  
                        $to = "$email";
                     $subject = "Welcome to SAIBALAJI GROUP : India's most preferred University with 16LPA Highest Placement | Start Application form and get 100%off | Very Few Seats Left";
					$message = '
                    <html>
				<head>
				<title>Thanks you for applying Here</title>
				</head>
				<body>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family:Trebuchet MS, Helvetica, Arial, Verdana;color:#111;font-size:14px;line-height:24px;max-width:600px;margin:0 auto;background-color: #fff;border: 1px solid #ccc;" width="100%">
	<tbody>
		<tr>
			<td style="/* padding:0 30px; */text-align:center;">
			<table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family:Trebuchet MS, Helvetica, Arial, Verdana;color:#111;font-size:14px;line-height:24px;max-width:600px;margin:0 auto;" width="100%">
				<tbody>
					<tr>
						<td style="padding:10px 20px;text-align:center;background-color: #fff;"><font color="#000000" face="Times New Roman" size="3"><img height="60" src="http://saibalajigrouppune.topbschoolsinindia.in/wp-content/uploads/2023/05/sam-logo-new01.png" width="300" /></font></td>
					</tr>
					<tr>
						<td style="padding:5px 0px;text-align:center;font-size:21px; line-height:35px;background-color:#49688E;color: #fff;">&nbsp;</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px; text-align: center;">
						<p style="font-size: 15px; text-align: left;"><font color="#000000" face="Times New Roman" size="3">Dear&nbsp;,</font></p>

						<p style="font-size: 15px; text-align: left;"><font color="#000000" face="Times New Roman" size="3"><span style="background-color: rgb(255, 255, 255);">Welcome to SAIBALAJI Group OF INSTITUTES
: India&#39;s most preferred university&nbsp;with 16LPA Highest Placement</span></font><br />
						&nbsp;</p>

						<p style="font-size: 15px; color: rgb(17, 17, 17); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); text-align: left;"><font color="#000000" face="Times New Roman" size="3">-Number of Courses 70+<br />
						<span style="box-sizing: border-box;">-&nbsp;</span>SAM Global University&rsquo;s placement cell delivers 100% placement assurance to students<br />
						<span style="box-sizing: border-box;">-</span>16LPA Highest Placement Package Offered<br />
						-8LPA Average Placement Package Offered<br />
						-</font>25000+ Alumni<br />
						- 15000+ Placements<br />
						<font color="#000000" face="Times New Roman" size="3"><span style="box-sizing: border-box;">-</span><span style="background-color: rgb(255, 255, 255);">300+Recruiters</span></font><br />
						&nbsp;</p>

						<p style="font-size: 15px;"><span style="text-align: center; background-color: rgb(255, 255, 255);"><a align="center" data-saferedirecturl="https://www.google.com/url?q=https://u15340630.ct.sendgrid.net/ls/click?upn%3DRSST4Y-2BhMx-2FdBrdu-2FeDesCs2pxTvo8EgrCj8A7PLvNKyxT9AjKNQTsodxSF1RSYfK3LYzQIbiS5k6mtC3LMiWUZqxotMudwrXVmNEsWeIPN6lsnvyT-2BYo8LjNZydKanaWbWdAc5sMyKghRZZE5VUlay3cWoCFzryoT6CXFEdStWyuSt-2FkLiiho1wHety-2Fu8Iteq4QgEVz5Kfs0IDC4TOjUb4UMcgUzuSDwowmVcjwSlQTPpQAZZ-2FNxpQT1xz-2FIFmFEJ94NysJf37PaAk8wwtYWEQ0-2F-2FaJ09tTl2JQ9WydliOKWc2oa7Kb76p3KSjxfrya0myrojeymk6p46QnCGCVg-3D-3DrClh_7RSxXQ4xkW97zw1zLUBL6dVxtqQQYoPgNujEm5PDVishBB-2FmQM4cz47axM9LwQVYM7VI1eMUlGWsHncz0xAMmcTpvY2ZGPn1Sh-2FtH5VJXAnbHH7k9pvCxnubnx46TIofz4mE8CCG9TiGHSn7gG5r7qwcWgyvJ68wvSBrWJqDwLRnqDLxGXBBd31CZDTfDV3c5S34WSvG28MgM0Z-2FFwBg82Og5EgZoPn5hCLHkiJsObo-2BC4rktaYMFHlxo2-2FSPpgC0K-2BnYjMjFkGhUIeG63A6wcM4OjZesmcDvCSFD2uNVUy22hfe0xpQtNmVXjnW5CRmk8oJmWKBuFVB4axBgg8rntLUN-2Ftdp8ZpIOh2iLp8xfs-3D&amp;source=gmail&amp;ust=1642874851114000&amp;usg=AOvVaw1N4JX5hPSkgBrnJCxmquKe" href="http://saibalajigrouppune.topbschoolsinindia.in/application-form-2023.php" style="background-color: rgb(73, 104, 142); padding: 10px 30px; border-radius: 8px;" target="_blank"><span style="color:#FFFFFF;"><font face="Times New Roman" size="3">Start&nbsp;Application</font></span></a></span></p>

						<p style="font-size: 15px; color: rgb(17, 17, 17); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); text-align: left;"><font color="#000000" face="Times New Roman" size="3">Your application will be processed in following way -:</font></p>

						<p style="font-size: 15px; color: rgb(17, 17, 17); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); text-align: left;"><font color="#000000" face="Times New Roman" size="3">1) The student will fill the&nbsp;<span class="il">form</span>&nbsp;by clicking on the link mentioned</font></p>

						<p style="font-size: 15px; color: rgb(17, 17, 17); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); text-align: left;"><font color="#000000" face="Times New Roman" size="3">2) Once the&nbsp;<span class="il">form</span>&nbsp;is submitted,&nbsp;<span class="il">Institute</span>&nbsp;will review your application</font></p>

						<p style="font-size: 15px; color: rgb(17, 17, 17); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); text-align: left;"><font color="#000000" face="Times New Roman" size="3">3) Once the review is done. You will receive a call from our Admission Team.</font></p>

						<p style="font-size: 15px;">&nbsp;</p>
						</td>
					</tr>
					<tr>
						<td style="padding:10px 0;background-color:#49688E;color: #fff;font-size: 14px">
						<p><span style="color:#FFFFFF;"><font face="Times New Roman" size="3"><span style="text-align: center; background-color: rgb(73, 104, 142);">Best Wishes</span><span style="text-align: center; background-color: rgb(73, 104, 142);">,</span><br style="text-align: center; background-color: rgb(73, 104, 142);" />
						SAM Global University<br style="text-align: center; background-color: rgb(73, 104, 142);" />
						<big style="text-align: center; background-color: rgb(73, 104, 142);">Admissions Help Desk - </big></font>+91 98932 66177</span></p>

						<p><a href="" target="_blank"><font color="#000000" face="Times New Roman" size="3"><img alt="" height="50" src="http://www.careermantra.net/blog/wp-content/uploads/2021/03/WhatsApp-Image-2021-03-20-at-10.46.30-AM.jpeg" width="150" /></font></a></p>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

                </body>
				</html>';

                         $header = "From:admin@topbschoolsinindia.in". "\r\n";
                         $header .= "Cc:admin@careermantra.net";
                         $header .= "MIME-Version: 1.0\r\n";
                         $header .= "Content-type: text/html\r\n"; 

                         $retval = mail ($to,$subject,$message,$header);
                             if( $retval == true ) {
                                echo "mail sent successfully...";
                             }else {
                                echo "mail could not be sent...";
                             }
                        
					} else {
						  echo "<script>alert('error');location.replace('http://saibalajigrouppune.topbschoolsinindia.in/');</script>";
					}
				}
			}else{
				 echo "<script>
						window.location.href='http://saibalajigrouppune.topbschoolsinindia.in/';
						alert('Invalid OTP');
						</script>";
			}	
	}
		
?>