<?php 
include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        	<title>Mangalmay Application Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="media.css">
	<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="cities.js"></script>
	<link href="../ims_pic/favicon.ico" type="image/x-icon" rel="icon"/>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="ims_pic/favicon.ico" type="image/x-icon" rel="icon"/>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
         <style>
            .alert {
  padding: 20px;
  background-color: #36589e; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
        </style>
    </head>
    <body class="sb-nav-fixed">
        <?php include '../hedder.php'?>
        <div id="layoutSidenav">
           <?php include '../sidevar.php'?>
            <div id="layoutSidenav_content">
                <main>
                    	<!-- multistep form -->
<div class="container">
	<div class="row">
	    
	     <?php
 // include 'db.php';
 
$login_session=$_SESSION['email'];
$query=mysqli_query($conn,"SELECT * FROM user where email='$login_session'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?> 
	    
		<form id="msform"  method="post" enctype="multipart/form-data" action="#">
		    
		    <div class="succ-msg message" style="display:none;color:green;font-weight:bold;text-align:center;font-size:15px;">Thank You for submitting your details at Mangalmay. Our Team will contact you soon.</div>
	<!-- progressbar -->
	<ul id="progressbar" class="progressbarmob">
		   <li class="active">Personal Information</li>
		   <li>	Parents Information</li>
		   <li> Address Information</li>
   <li>Education Information</li>
   
	</ul>
	<!-- fieldsets -->

	<fieldset>
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
				 <input data-format="dd/MM/yyyy" type="text" name="DOB"  onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth" required></input>
				 <span class="add-on" />
			</div>

			<div class="col-md-6 col-sm-6" style="margin-top: 13px;">
				 <select name="nationality" class="form-control" required>
                        <option value="select">Select Nationality</option>
                        <option value="Indian">Indian</option>
                        <option value="Other">Other</option>
                    </select>
			</div>

			<div class="col-md-6 col-sm-6" style="margin-top: 13px;">
				<select name="gender" class="form-control" required>
                        <option value="select">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female"> Female</option>
                    </select>
			</div>

			<div class="col-md-6 col-sm-6" style="margin-top: 13px;">
				<select name="category" class="form-control" required >
                      <option value="Select">Select Category</option>
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>
                      <option value="General">General</option>
                      <option value="OBC">OBC</option>
                    </select>
			</div>

			<div class="col-md-6 col-sm-6" style="margin-top: 13px;">
				
                    <select name="language" class="form-control" required>
                        <option value="select">Select Language</option>
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

	
		
<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>

	<fieldset>
		<h2 class="fs-title">Parents Information</h2>
		<h3 class="fs-subtitle">Submit Your Fathers & Mothers Information</h3>
		
  <div class="row">
			<div class="col-md-6 col-sm-6">
				<input type="text" name="fname" placeholder="Fathers Name" >
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="email" name="femail" placeholder="Fathers Email Address" >
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="tel" name="fmobile" placeholder="Fathers Phone Number" >
			</div>

			<div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
				 <input type="text" name="foccupation" placeholder="Fathers Occupation" >
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" name="mname" placeholder="Mothers Name" >
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="email" name="memail" placeholder="Mothers Email Address" >
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="tel" name="mmobile" placeholder="Mothers Phone Number" >
			</div>

			<div class="col-md-6 col-sm-6 input-append" id="from-datepicker">
				 <input type="text" name="moccupation" placeholder="Mothers Occupation" >
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
				<input type="text" class="form-control" id="house_no" name="house_no" placeholder="Enter Your House Number" required>
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="street" name="street" placeholder="Complete Street Information" required>

			</div>

			<div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
			<input type="text" class="form-control" id="state" name="state" placeholder="Complete state Information" required>
			</div>

			<div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">

       <input type="text" class="form-control" id="city" name="city" placeholder="Complete city Information" required>
			</div>

    <div class="form-check col-sm-12 col-md-12">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="
    width: auto;
" >
    <label class="form-check-label" for="exampleCheck1" style="
    font-family: auto;
    font-size: medium;
    color: slategrey;
">If same secondary address select this box.</label>
  </div>

  
  	<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="house_no" name="phouse_no" placeholder="Enter Your House Number" >
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="street" name="pstreet" placeholder="Complete Street Information" >

			</div>

			<div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">
			<input type="text" class="form-control" id="pstate" name="pstate" placeholder="Complete state Information" >
			</div>

			<div class="col-md-6 col-sm-6" id="selection" style="margin-top: 13px;">

       <input type="text" class="form-control" id="pcity" name="pcity" placeholder="Complete city Information" >
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
				<input type="text" class="form-control" id="class10th" name="Highschools" placeholder="Enter Your 10th Class Percantage" required>
			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="class12th" name="intermediate" placeholder="Enter Your 12th Class Percantage" required>

			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="graduationper" name="Graduation" placeholder="Enter Your Graduation/UG Percantage" required>

			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="catper" name="CAT" placeholder="Enter Your CAT Exam Percantage" required>

			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="matper" name="MAT" placeholder="Enter Your MAT Exam Percantage" required>

			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="xatper" name="XAT" placeholder="Enter Your XAT Exam Percantage" required>

			</div>

			<div class="col-md-6 col-sm-6">
				<input type="text" class="form-control" id="otherper" name="otherexam" placeholder="Enter Your Other Exam Percantage">
				<input type="hidden" class="form-control" id="status" name="status" value="Application submited" placeholder="Enter Your Other Exam Percantage">
			</div>
			 <div class="form-check col-sm-12 col-md-12">
    <input type="checkbox" class="form-check-input" name="Declaration" value="I certify that all of the information included in my application is true, complete and accurate. I understand that all
components of my application are subject to verification and I give my permission for any person or entity to
provide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines
that I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and
including expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are
subject to the jurisdiction of Noida courts only. I understand that all components of my application become the
property of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee
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
provide Mangalmay or its duly authorized agency with information relevant to such verification. If Mangalmay determines
that I have omitted or in any way misrepresented any facts, I may be subject to disciplinary action, up to and
including expulsion from Mangalmay. Disputes of any kind during the admission process or the course/program are
subject to the jurisdiction of Noida courts only. I understand that all components of my application become the
property of Mangalmay and that they will not be returned to me or duplicated for me. I understand that the application fee
is not refundable. I also declare that, to the best of my knowledge, my health allows me to undertake the
proposed study program.</label>
  </div>

			
<hr>


			
    
		</div>

		
		
<input type="button" name="previous" class="previous action-button" value="Previous" />
	
	<input type="submit" name="submit" class=" action-button" value="Submit" />
</fieldset>


<?php 
//require ('db.php');
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $DOB = $_POST['DOB'];
  $nationality = $_POST['nationality'];
  $gender = $_POST['gender'];
  $category = $_POST['category'];
  $language = mysqli_real_escape_string($conn,$_POST['language']);
  $course= $_POST['course'];
  $email = $_POST['email'];
   $mobile = $_POST['mobile'];
  $fname = $_POST['fname'];
  $foccupation = $_POST['foccupation'];
  $fmobile = $_POST['fmobile'];
  $femail = mysqli_real_escape_string($conn,$_POST['femail']);
  $mname= $_POST['mname'];
  $moccupation = $_POST['moccupation'];
 $mmobile = $_POST['mmobile'];
  $memail = $_POST['memail'];
  $house_no = $_POST['house_no'];
  $street = $_POST['street'];
  $city = mysqli_real_escape_string($conn,$_POST['city']);
  $state = $_POST['state'];
  $phouse_no = mysqli_real_escape_string($conn,$_POST['phouse_no']);
  $pstreet = $_POST['pstreet'];
  $pcity = $_POST['pcity'];
   $pstate = $_POST['pstate'];
  $Highschools = $_POST['Highschools'];
 $intermediate = $_POST['intermediate'];
 $Graduation= $_POST['Graduation'];
  $CAT= $_POST['CAT'];
 $MAT= $_POST['MAT'];
 $XAT= $_POST['XAT'];
 $otherexam= $_POST['otherexam'];
 $Declaration=$_POST['Declaration'];
 $uploadtime = date("Y-m-d H:i:s");
  $cname = $_FILES['picture']['name'];

          
}
if(!empty($cname))  { 
        $tname = $_FILES['picture']['tmp_name'];
        $tname = $_FILES['picture']['tmp_name'];
        $size = $_FILES['picture']['size'];
        $fext = pathinfo($cname, PATHINFO_EXTENSION);
        $fire = pathinfo($name,PATHINFO_FILENAME);
        $savename = $fire.".".$fext;
        $finalfile = "../ims_pic/$savename";
                            }
    if(!empty($cname)){
   if($size < 50000000){
        $check = move_uploaded_file($tname,$finalfile);
        if($check){
            
$qry1 = "INSERT INTO `application`(`name`, `DOB`, `nationality`,`picture` , `gender` , `category` ,`language`, `course` , `email` , `mobile`, `fname`,`foccupation`, `fmobile`, `femail`,`mname`, `moccupation`, `mmobile`,`memail`, `house_no`,`street`, `city`,`state`, `phouse_no`, `pstreet`,`pcity`, `pstate`,`Highschools`, `intermediate`,`Graduation`, `CAT`, `MAT`,`XAT`, `otherexam`, `Declaration`, `created`) VALUES ('$name', '$DOB', '$nationality','$savename', '$gender', '$category', '$language', '$course', '$email', '$mobile', '$fname', '$foccupation', '$fmobile', '$femail','$mname', '$moccupation', '$mmobile', '$memail', '$house_no', '$street', '$city', '$state','$phouse_no', '$pstreet', '$pcity','$pstate', '$Highschools',  '$intermediate',  '$Graduation', '$CAT', '$MAT', '$XAT', '$otherexam','$Declaration',  '$uploadtime')";
$test = mysqli_query($conn,$qry1);

if($test = TRUE){?>
  if(confirm("File Uploaded Sucessfully!!!"))
        {
         <?php
    include ("db.php");
    
    if(isset($_POST['submit'])){
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
         
        }
        else
        { 
         
        }<?php
                      }
          else {?>
             <script>
            $('.fail-msg').show();
            $('.fail-msg').delay(7000).hide(400);
        </script>
            <?php
                          //echo "file is not uploaded";
        }
      }
   }
   else{
     echo "file size is too large"; 
   }
 }else
 {  
  echo "Please select an file to upload";
 }                        
 ?>
 
</form>

	</div>
</div>
                </main>
               
            </div>
        </div>
      
        <script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
 <!-- jQuery -->

<!-- jQuery easing plugin -->
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function () {
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
	window.pressed = function(){
    var a = document.getElementById('aa');
    if(a.value == "")
    {
        fileLabel.innerHTML = "Choose file";
    }
    else
    {
        var theSplit = a.value.split('\\');
        fileLabel.innerHTML = theSplit[theSplit.length-1];
    }
};
</script>


<style type="text/css">
	input[type=file]{
    width:90px;
    color:transparent;
}
</style>

   <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website <?php echo date("Y"); ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
