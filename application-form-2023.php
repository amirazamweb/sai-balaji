<?php session_start();
 require_once("db_connection.php");
$email=$_GET['email'];
?>
<html>
<head>
    <title>College Admission Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cap/application/style.css">
    <link rel="stylesheet" type="text/css" href="cap/application/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="cap/application/media.css">
    <script src="cap/application/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="cap/application/cities.js"></script>
</head>
<body>
     <header>
        <div class="row">
            <div clas="col-md-12 col-sm-12">
                <div>
                        <img src="https://harshainstitutions.in/images/harsha-logo.png" class="logo logo-mob">
                 </div>
            </div>
        </div>
    </header>
    <!-- multistep form -->
    <div class="container">
        <div class="row">
            <?php
           if(!empty($_GET['email'])){
        	    $sql = "SELECT * FROM `application` WHERE email='$email'";
        	    $result = mysqli_query($conn, $sql);
        		$row = mysqli_fetch_assoc($result);
        	//	print_r($row);
        	}
            ?>
            <form id="msform" method="post" enctype="multipart/form-data" action="#">
                
                <?php
                    if (isset($_POST['submit'])) {
                       // print_r($_POST);
                    $name = $_POST['name'];
                    $DOB = $_POST['DOB'];
                    $nationality = $_POST['nationality'];
                    $gender = $_POST['gender'];
                    $category = $_POST['category'];
                    $language = mysqli_real_escape_string($conn, $_POST['language']);
                    $course = $_POST['course'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $fname = $_POST['fname'];
                    $foccupation = $_POST['foccupation'];
                    $fmobile = $_POST['fmobile'];
                    $femail = mysqli_real_escape_string($conn, $_POST['femail']);
                    $mname = $_POST['mname'];
                    $moccupation = $_POST['moccupation'];
                    $mmobile = $_POST['mmobile'];
                    $memail = $_POST['memail'];
                    $house_no = $_POST['house_no'];
                    $street = $_POST['street'];
                    $city = mysqli_real_escape_string($conn, $_POST['city']);
                    $state = $_POST['state'];
                    $phouse_no = mysqli_real_escape_string($conn, $_POST['phouse_no']);
                    $pstreet = $_POST['pstreet'];
                    $pcity = $_POST['pcity'];
                    $pstate = $_POST['pstate'];
                    $Highschools = $_POST['Highschools'];
                    $intermediate = $_POST['intermediate'];
                    $Graduation = $_POST['Graduation'];
                    $CAT = $_POST['CAT'];
                    $MAT = $_POST['MAT'];
                    $XAT = $_POST['XAT'];
                    $otherexam = $_POST['otherexam'];
                    $Declaration = $_POST['Declaration'];
                    $uploadtime = date("Y-m-d H:i:s");
                    $cname = $_FILES['picture']['name'];
               
                    $tname = $_FILES['picture']['tmp_name'];
                    $tname = $_FILES['picture']['tmp_name'];
                    $size = $_FILES['picture']['size'];
                    $fext = pathinfo($cname, PATHINFO_EXTENSION);
                    $fire = pathinfo($name, PATHINFO_FILENAME);
                    $savename = $fire . "." . $fext;
                    $finalfile = "images/profile_photo/$savename";
                
                    $filename=$_FILES['image']['name'];
        			$target_dir = "images/profile_photo/".$filename;
        			$file=$_FILES["image"]["tmp_name"];
				    	if (move_uploaded_file($file, $target_dir)) {
				            $target_dir=$filename;
				    	}
				
				    if(empty($name)){
				       $nameErr = "Name is required";
                     }
				    if(empty($email)){
				        $Emailerror='Email is required';
				    }
				    if(empty($mobile)){
				       $mobileError='Mobile No is required';
				    }
				     else{
				         
				         $enquiry_source="College admission";
                          $insertsql = "INSERT INTO `application`(`student_id`,`name`, `DOB`, `nationality`,`picture` , `gender` , `category` ,`language`, 
				         `course` , `email` , `mobile`, `fname`,`foccupation`, `fmobile`, `femail`,`mname`, `moccupation`, `mmobile`,`memail`, 
				         `house_no`,`street`, `city`,`state`, `phouse_no`, `pstreet`,`pcity`, `pstate`,`Highschools`, `intermediate`,
				         `Graduation`, `CAT`, `MAT`,`XAT`, `otherexam`, `Declaration`, `created`) 
                        VALUES ('$student_id','$name', '$DOB', '$nationality','$filename', '$gender', '$category', '$language', '$course', '$email', '$mobile',
                        '$fname', '$foccupation', '$fmobile', '$femail','$mname', '$moccupation', '$mmobile', '$memail', '$house_no',
                        '$street', '$city', '$state','$phouse_no', '$pstreet', '$pcity','$pstate', '$Highschools',  '$intermediate', 
                        '$Graduation', '$CAT', '$MAT', '$XAT', '$otherexam','$Declaration',  '$uploadtime')";
                            //exit();
                        
                        $insertresult = mysqli_query($conn, $insertsql);
                                if($insertresult > 0){
                                    echo "<script>
                                    alert('Application submitted successfully');
                                    window.location.href='https://sam-global-university.topbschoolsinindia.in/checkout.php?amount=800&college=sam-global-university&email=$email';
                                    </script>";
    						     }
        					    else{
        							echo "<script>
        							alert('Application not submitted... try again');
                                    window.location.href='https://sam-global-university.topbschoolsinindia.in/application-form-2023.php';
                                    </script>";
        						}
				     }
                    } //$post if close
			     ?>
                
                
                <div class="succ-msg message" style="display:none;color:green;font-weight:bold;text-align:center;font-size:15px;">Thank You for submitting your details at Careermantra. Our Team will contact you soon.</div>
                <!-- progressbar -->
                <ul id="progressbar" class="progressbarmob">
                    <li class="active">Personal Information</li>
                    <li> Parents Information</li>
                    <li> Address Information</li>
                    <li>Education Information</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">PERSONAL INFORMATION</h2>
                    <h3 class="fs-subtitle">Submit Your Personal Information</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                                <div class="error text-danger"> <?php echo $nameErr;?></div>
                                <input type="text"  name="name" placeholder="Candidate Name" value="">
                         </div>
                        <div class="col-md-6 col-sm-6">
                               <div class="error text-danger"><?php echo $Emailerror; ?></div>
                                <input type="email"  name="email" placeholder="Candidate Email Address" value="">
                         </div>
                        <div class="col-md-6 col-sm-6">
                                <div class="error text-danger"><?php  echo $mobileError; ?></div>
                                <input type="tel"  name="mobile" placeholder="Candidate Phone Number" value="">
                        </div>
                        <div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
                            <input data-format="dd/MM/yyyy" type="text" name="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth" ></input>
                            <span class="add-on" />
                        </div>
                        <!--<div class="col-md-6 col-sm-6" id="">
                            <input  type="date" name="DOB"  placeholder="Date of Birth" ></input>
                            <span class="add-on" />
                        </div>-->
                        <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                            <select name="nationality" class="form-control" >
                                <option value="select">Select Nationality</option>
                                <option value="Indian">Indian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                            <select name="gender" class="form-control" >
                                <option value="select">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female"> Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                            <select name="category" class="form-control" >
                                <option value="Select">Select Category</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="General">General</option>
                                <option value="OBC">OBC</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                            <select name="language" class="form-control" >
                                <option value="select">Select Language</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                            <select name="course" class="form-control" >
                                <option value="select">Select Course</option>
                                <option value="Post Basic Nursing">Post Basic Nursing</option>
                                <option value="General Nursing and Midwifery"> General Nursing and Midwifery</option>
                                <option value="B.SC Nursing">B.SC Nursing</option>
                                <option value="B.Pharm"> B.Pharm</option>
                                <option value="D.Pharm">D.Pharm</option>
                                <option value="B.Sc Hons (Agriculture)"> B.Sc Hons (Agriculture)</option>
                                <option value="Diploma in Agriculture">Diploma in Agriculture</option>
                                <option value="M.Sc"> M.Sc</option>
                                <option value="Diploma in (CSE/ME/EX/CE)">Diploma in (CSE/ME/EX/CE)</option>
                                <option value="B.Tech (CSE with sterlite technologies)"> B.Tech (CSE with sterlite technologies)</option>
                                <option value="B.Tech (CSE)">B.Tech (CSE)</option>
                                <option value="B.Tech (CE/ME/EC)"> B.Tech (CE/ME/EC)</option>
                                <option value="BBA"> BBA</option>
                                <option value="MBA">MBA</option>
                                <option value="BPT">BPT</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                            <input type="file" id="fileName" accept="image/*" name="image" class="form-control" >
                            <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Candidate Photo*</span>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Parents Information</h2>
                    <h3 class="fs-subtitle">Submit Your Fathers & Mothers Information</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="fname" placeholder="Fathers Name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" name="femail" placeholder="Fathers Email Address">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="tel" name="fmobile" placeholder="Fathers Phone Number">
                        </div>
                        <div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
                            <input type="text" name="foccupation" placeholder="Fathers Occupation">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="mname" placeholder="Mothers Name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" name="memail" placeholder="Mothers Email Address">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="tel" name="mmobile" placeholder="Mothers Phone Number">
                        </div>
                        <div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
                            <input type="text" name="moccupation" placeholder="Mothers Occupation">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">ADDRESS INFORMATION</h2>
                    <h3 class="fs-subtitle">Submit Your Current & Permanent Mailing Address</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="house_no" name="house_no" placeholder="Enter Your House Number" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="street" name="street" placeholder="Complete Street Information" >
                        </div>
                        <div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
                            <input type="text" class="form-control" id="state" name="state" placeholder="Complete state Information" >
                        </div>
                        <div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Complete city Information" >
                        </div>
                        <div class="form-check col-sm-12 col-md-12">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" style="
    width: auto;
">
                            <label class="form-check-label" for="exampleCheck1" style="
    font-family: auto;
    font-size: medium;
    color: slategrey;
">If same secondary address select this box.</label>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="house_no" name="phouse_no" placeholder="Enter Your House Number">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="street" name="pstreet" placeholder="Complete Street Information">
                        </div>
                        <div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
                            <input type="text" class="form-control" id="pstate" name="pstate" placeholder="Complete state Information">
                        </div>
                        <div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
                            <input type="text" class="form-control" id="pcity" name="pcity" placeholder="Complete city Information">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">EDUCATION INFORMATION</h2>
                    <h3 class="fs-subtitle">Submit Your Education Details</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="class10th" name="Highschools" placeholder="Enter Your 10th Class Percantage" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="class12th" name="intermediate" placeholder="Enter Your 12th Class Percantage" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="graduationper" name="Graduation" placeholder="Enter Your Graduation/UG Percantage" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="catper" name="CAT" placeholder="Enter Your CAT Exam Percantage" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="matper" name="MAT" placeholder="Enter Your MAT Exam Percantage" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="xatper" name="XAT" placeholder="Enter Your XAT Exam Percantage" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="otherper" name="otherexam" placeholder="Enter Your Other Exam Percantage">
                            <input type="hidden" class="form-control" id="status" name="status" value="Application submited" placeholder="Enter Your Other Exam Percantage">
                        </div>
                        <div class="form-check col-sm-12 col-md-12">
                            <input type="checkbox" class="form-check-input" name="Declaration" value="I certify that all of the information included in my application is true, complete and accurate. I understand that all
components of my application are subject to verification and I give my permission for any person or entity to
provide Careermantra or its duly authorized agency with information relevant to such verification. If Careermantra determines
that I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and
including expulsion from Careermantra. Disputes of any kind during the admission process or the course/program are
subject to the jurisdiction of Noida courts only. I understand that all components of my application become the
property of Careermantra and that they will not be returned to me or duplicated for me. I understand that the application fee
is not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the
proposed study program." id="datails" style="
    width: auto;
">
                            <label class="form-check-label" for="exampleCheck1" style="
    font-family: auto;
    font-size: medium;
    color: slategrey;
     text-align: left;
">I certify that all of the information included in my application is true, complete and accurate. I understand that all
                                components of my application are subject to verification and I give my permission for any person or entity to
                                provide Careermantra or its duly authorized agency with information relevant to such verification. If Careermantra determines
                                that I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and
                                including expulsion from Careermantra. Disputes of any kind during the admission process or the course/program are
                                subject to the jurisdiction of Noida courts only. I understand that all components of my application become the
                                property of Careermantra and that they will not be returned to me or duplicated for me. I understand that the application fee
                                is not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the
                                proposed study program.</label>
                        </div>
                        <hr>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class=" action-button" value="Submit" />
                </fieldset>
                
            </form>
        </div>
    </div>
    <footer class="mt-5"></footer>
    <!-- jQuery -->
    <!-- jQuery easing plugin -->
    <script type="text/javascript" src="cap/application/main.js"></script>
    <script type="text/javascript" src="cap/application/js/bootstrap.js"></script>
    <script src="cap/application/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            var startDate = new Date('1985-01-01'),
                endDate = new Date('1995-01-01');
            $('#from-datepicker').datetimepicker({
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 4,
                keyboardNavigation: 1,
                minView: 2,
                forceParse: 0,
                startDate: startDate,
                endDate: endDate,
                setDate: startDate
            });
        });
    </script>
    <script type="text/javascript">
        window.pressed = function() {
            var a = document.getElementById('aa');
            if (a.value == "") {
                fileLabel.innerHTML = "Choose file";
            } else {
                var theSplit = a.value.split('\\');
                fileLabel.innerHTML = theSplit[theSplit.length - 1];
            }
        };
    </script>
    <style type="text/css">
        input[type=file] {
            width: 90px;
            color: transparent;
        }
    </style>
</body>
</html>