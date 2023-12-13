<?php
//session_start();
include('../conn.php');
//print_r($_SESSION);
$login_session = $_SESSION['email'];
if ($login_session == true) {
} else {
    header('location: https://saibalajigrouppune.topbschoolsinindia.in/');
}
echo "";
?>
<html>

<head>
    <title>SAIBALAJI GROUP OF INSTITUTES Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <script src="jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="cities.js"></script>
    <link href="https://kccmbanoida.com/favicon/favicon.ico.png" type="image/x-icon" rel="icon" />
</head>

<body style="background-color:#ecf0f1 !important">
    <header>
        <div class="row">
            <div clas="col-md-12 col-sm-12">
                <div><a href="../home.php">
                        <img src="../images/sai-logo3.png" class="logo logo-mob">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- multistep form -->
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM user where email='$login_session'";
            //echo $sql="SELECT * FROM user where email='$login_session'";
            $query = mysqli_query($conn, "$sql") or die(mysqli_error());
            $row = mysqli_fetch_array($query);
            ?>
            <form id="msform" method="post" enctype="multipart/form-data" action="#">
                <?php
                //print_r($_POST);
                //require ('db.php');
                if ($_POST) {
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
                    $tenmarksheet = $_FILES["tenmarksheet"]['name'];
                    $intermarksheet = $_FILES["intermarksheet"]['name'];
                    $gradmarksheet = $_FILES["gradmarksheet"]['name'];
                    $entrancemarksheet = $_FILES["entrancemarksheet"]['name'];
                    $experienceletter = $_FILES["experienceletter"]['name'];
                    $aadhar = $_FILES["aadhar"]['name'];
                    $castecertificate = $_FILES["castecertificate"]['name'];
                }
                if (!empty($cname)) {
                    $tname = $_FILES['picture']['tmp_name'];
                    $tname = $_FILES['picture']['tmp_name'];
                    $size = $_FILES['picture']['size'];
                    $fext = pathinfo($cname, PATHINFO_EXTENSION);
                    $fire = pathinfo($name, PATHINFO_FILENAME);
                    $savename = $fire . "." . $fext;
                    $finalfile = "../ims_pic/$savename";
                }
                if (!empty($cname)) {
                    if ($size < 50000000) {
                        $check = move_uploaded_file($tname, "../ims_pic/".$cname);
                            if(!empty($tenmarksheet)){
                                $tentname = $_FILES['tenmarksheet']['tmp_name'];
                                move_uploaded_file($tentname, "../ims_pic/".$tenmarksheet);
                            }
                            if(!empty($intermarksheet)){
                                $intertname = $_FILES['intermarksheet']['tmp_name'];
                                move_uploaded_file($intertname, "../ims_pic/".$intermarksheet);
                            }
                            if(!empty($gradmarksheet)){
                                $gradtname = $_FILES['gradmarksheet']['tmp_name'];
                                move_uploaded_file($gradtname, "../ims_pic/".$gradmarksheet);
                            }
                            if(!empty($entrancemarksheet)){
                                $entrancetname = $_FILES['entrancemarksheet']['tmp_name'];
                                move_uploaded_file($entrancetname, "../ims_pic/".$entrancemarksheet);
                            }
                            if(!empty($experienceletter)){
                                $experiencetname = $_FILES['experienceletter']['tmp_name'];
                                move_uploaded_file($experiencetname, "../ims_pic/".$experienceletter);
                            }
                            if(!empty($aadhar)){
                                $aadhartname = $_FILES['aadhar']['tmp_name'];
                                move_uploaded_file($aadhartname, "../ims_pic/".$aadhar);
                            }
                            if(!empty($castecertificate)){
                                $castetname = $_FILES['castecertificate']['tmp_name'];
                                move_uploaded_file($castetname, "../ims_pic/".$castecertificate);
                            }
                        if ($check) {
                            
                            $qry1 = "INSERT INTO `application`(`name`, `DOB`, `nationality`,`picture` , `gender` , `category` ,`language`, `course` , `email` , `mobile`, `fname`,`foccupation`, `fmobile`, `femail`,`mname`, `moccupation`, `mmobile`,`memail`, `house_no`,`street`, `city`,`state`, `phouse_no`, `pstreet`,`pcity`, `pstate`,`Highschools`, `intermediate`,`Graduation`, `CAT`, `MAT`,`XAT`, `otherexam`, `Declaration`, `created`, `college_name`, `10th_marksheet`, `12th_marksheet`, `grad_marksheet`, `entrance_marksheet`, `experience_letter`, `aadhar_card`, `caste_certificate`) 
VALUES ('$name', '$DOB', '$nationality','$cname', '$gender', '$category', '$language', '$course', '$email', '$mobile', '$fname', '$foccupation', '$fmobile', '$femail','$mname', '$moccupation', '$mmobile', '$memail', '$house_no', '$street', '$city', '$state','$phouse_no', '$pstreet', '$pcity','$pstate', '$Highschools',  '$intermediate',  '$Graduation', '$CAT', '$MAT', '$XAT', '$otherexam','$Declaration',  '$uploadtime', 'sai-balaji', '$tenmarksheet', '$intermarksheet', '$gradmarksheet', '$entrancemarksheet', '$experienceletter', '$aadhar', '$castecertificate')";
                            //exit();
                            $test = mysqli_query($conn, $qry1);
                            if ($test = TRUE) { 
                            
                                 ?>
                                
                                    <?php
                                        include("db.php");
                                        if (isset($_POST['submit'])) {
                                            $update_id = $login_session;
                                            $status = $_POST['status'];
                                            $update = "update user set
                                            status='$status' where email='$update_id'";
                                            $run = mysqli_query($conn, $update);
                                        }
                                    ?>
                                    <script>
                                        $('.succ-msg').show();
                                        $('.succ-msg').delay(5000).hide(400);
                                    </script>
                               <?php //header('location: https://kccmbanoida.com/application/index.php');
                                
                               echo"<script>alert('Your Application submitted suceessfully!.......');
                               window.location.href='http://saibalajigrouppune.topbschoolsinindia.in/thankyou.php';
                               </script>";
                               ?>
                                <?php

                                } else {
                                
                               echo"<script>alert('Your have an error in data saving');
                               </script>";
                               ?>
                                    <script>
                                        $('.fail-msg').show();
                                        $('.fail-msg').delay(7000).hide(400);
                                    </script>
                                <?php
                                    //echo "file is not uploaded";
                                }
                            }
                        } else {
                            echo "file size is too large";
                        }
                    } else {
                        echo "Please select an file to upload";
                    }
                ?>
                <div class="succ-msg message" style="display:none;color:green;font-weight:bold;text-align:center;font-size:15px;">Thank You for submitting your details at Mangalmay. Our Team will contact you soon.</div>
                <!-- progressbar -->
                <ul id="progressbar" class="progressbarmob">
                    <li class="active" style="color:#000">Personal Information</li>
                    <li style="color:#000"> Parents Information</li>
                    <li style="color:#000"> Address Information</li>
                    <li style="color:#000">Education Information</li>
                </ul>
                <!-- fieldsets -->
                <!-- <fieldset> -->
                <h2 class="fs-title">PERSONAL INFORMATION</h2>
                <h3 class="fs-subtitle">Submit Your Personal Information</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Candidate Name" readonly>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Candidate Email Address" readonly>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="tel" name="mobile" value="<?php echo $row['mobile']; ?>" placeholder="Candidate Phone Number" readonly>
                    </div>
                    <div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
                        <input data-format="dd/MM/yyyy" type="text" name="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth" required></input>
                        <span class="add-on" />
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <select name="nationality" class="form-control" required>
                            <option selected disabled>Select Nationality</option>
                            <option value="Indian">Indian</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <select name="gender" class="form-control" required>
                            <option selected disabled>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female"> Female</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <select name="category" class="form-control" required>
                            <option selected disabled>Select Category</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="General">General</option>
                            <option value="OBC">OBC</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <select name="language" class="form-control" required>
                            <option selected disabled>Select Language</option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="course" name="course" value="<?php echo $row['course']; ?>" placeholder="Candidate course" readonly>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="file" id="fileName" accept="image/*" name="picture" class="form-control" required>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Candidate Photo*</span>
                    </div>
                </div>
                <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
                <!-- </fieldset> -->
                <!-- <fieldset> -->
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
                        <input type="tel" name="fmobile" placeholder="Fathers Phone Number" maxlength="10">
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
                        <input type="tel" name="mmobile" placeholder="Mothers Phone Number" maxlength="10">
                    </div>
                    <div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
                        <input type="text" name="moccupation" placeholder="Mothers Occupation">
                    </div>
                </div>
                <!-- <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" /> -->
                <!-- </fieldset> -->
                <!-- <fieldset> -->
                <h2 class="fs-title">ADDRESS INFORMATION</h2>
                <h3 class="fs-subtitle">Submit Your Current & Permanent Mailing Address</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="house_no" name="house_no" placeholder="Enter Your House Number" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="street" name="street" placeholder="Complete Street Information" required>
                    </div>
                    <div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
                        <input type="text" id="state" name="state" value="<?php echo $row['state']; ?>" placeholder="Complete state Information" readonly>
                    </div>
                    <div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
                        <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>" placeholder="Complete city Information" readonly>
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
                <!-- <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" /> -->
                <!-- </fieldset> -->
                <!-- <fieldset> -->
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
                        <input type="text" class="form-control" id="graduationper" name="Graduation" placeholder="Enter Your Graduation/UG Percantage">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="catper" name="CAT" placeholder="Enter Your CAT Exam Percantage">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="matper" name="MAT" placeholder="Enter Your MAT Exam Percantage">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="xatper" name="XAT" placeholder="Enter Your XAT Exam Percantage">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="otherper" name="otherexam" placeholder="Enter Your Other Exam Percantage">
                        <input type="hidden" class="form-control" id="status" name="status" value="Application submited" placeholder="Enter Your Other Exam Percantage">
                    </div>
                    </div>
                    <h2 class="fs-title">DOCUMENTS INFORMATION</h2>
                <h3 class="fs-subtitle">Submit Your Documents Here</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6" style="margin-top: 0px;">
                        <input type="file" id="fileName" accept="image/*" name="tenmarksheet" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload 10th Marksheet</span>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 0px;">
                        <input type="file" id="fileName" accept="image/*" name="intermarksheet" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload 12th Marksheet</span>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="file" id="fileName" accept="image/*" name="gradmarksheet" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Graduation Marksheet </span>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="file" id="fileName" accept="image/*" name="entrancemarksheet" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Entrance Exam Marksheet</span>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="file" id="fileName" accept="image/*" name="experienceletter" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Experience Letter</span>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="file" id="fileName" accept="image/*" name="aadhar" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Aadhar Card</span>
                    </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 13px;">
                        <input type="file" id="fileName" accept="image/*" name="castecertificate" class="form-control" accept='image/*'>
                        <span class="label label-primary" style="font-size: 12px;background: bisque">Upload Caste Certificate</span>
                    </div>
                    <div class="form-check col-sm-12 col-md-12">
                        <input type="checkbox" class="form-check-input" name="Declaration" value="I certify that all of the information included in my application is true, complete and accurate. I understand that all
components of my application are subject to verification and I give my permission for any person or entity to
provide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines
that I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and
including expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are
subject to the jurisdiction of Noida courts only. I understand that all components of my application become the
property of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee
is not refundable." id="datails" style="
    width: auto;
">
                        <label class="form-check-label" for="exampleCheck1" style="
    font-family: auto;
    font-size: medium;
    color: slategrey;
     text-align: left;
">I certify that all of the information included in my application is true, complete and accurate. I understand that all
                            components of my application are subject to verification and I give my permission for any person or entity to
                            provide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines
                            that I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and
                            including expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are
                            subject to the jurisdiction of Noida courts only. I understand that all components of my application become the
                            property of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee
                            is not refundable.</label>
                    </div>
                    </div>
                    <hr>
                
                <!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
                <input type="submit" name="submit" class=" action-button" value="Submit" />
                <!-- </fieldset> -->
            </form>
        </div>
    </div>
    <footer class="mt-5"></footer>
    <!-- jQuery -->
    <!-- jQuery easing plugin -->
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="jquery.easing.min.js" type="text/javascript"></script>
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