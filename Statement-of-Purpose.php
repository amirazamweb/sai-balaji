<?php 
session_start();
include('conn.php');


$login_session=$_SESSION['email'];
if($login_session==true)
{

}
else
{
header('location:../index.php');

}
echo "";?>
<!DOCTYPE html>
<html>
<head>
	<title>New Delhi Institute of Management Statement of Purpose 2023-2025</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="">
	
	<link  rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<script type="text/javascript" src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
	<link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
	<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src="cities.js"></script>
		<style type="text/css" src="media.css"></style>
	<style type="text/css">
		* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
   
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #901d78;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #901d78;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #901d78
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #901d78;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #901d78;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: #901d78;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: #901d78;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #901d78
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 16%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #901d78
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #901d78
}

.fit-image {
    width: 100%;
    object-fit: cover
}
	</style>
	<script type="text/javascript">
	$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
</head>
<body>
	<div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <img class="ttstart" src="https://new-delhi-institute-of-management-delhi.topbschoolsinindia.in/images/NDIM-logo190x70.webp" alt="" style="    margin-left: 162px;
    height: 108px;
    width: 274px;">
                <p style="
    color: black;
    font-size: 22px;
    font-family: ;
    font-family: sans-serif;
   " >Statement of Purpose Form New Delhi Institute of Management 2023-2025</p>
   <?php
  include 'conn.php';
 
$login_session=$_SESSION['email'];
$query=mysqli_query($conn,"SELECT * FROM user where email='$login_session'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?> 
 <div class="succ-msg message" style="display:none;color:green;font-weight:bold;text-align:center;font-size:15px;">Thank You for submitting your details at New Delhi Institute of Management. Our Team will contact you soon.</div>

                 <form id="msform"  method="post" enctype="multipart/form-data" action="#">
                    <!-- progressbar 
-->
                    <ul id="progressbar" class="kallu"style="
    width: 675px;
">
                        <li class="active" id="account"><strong>Basic Info:</strong></li>
                        <li id="personal"><strong>Q.1</strong></li>
                        <li id="personal"><strong>Q.2</strong></li>
                           <li id="personal"><strong>Q.3</strong></li>
                        <li id="personal"><strong>Q4</strong></li>
                      
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> 

                    <!-- fieldsets -->
                     <fieldset>
                        <div class="form-card">
                            <div class="row">
                           </div> <label class="fieldlabels">Name: *</label> 
                            <input type="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Your name" readonly /> 
                            <label class="fieldlabels">Email: *</label> 
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Enter your Email Id"  readonly/> 
                            <label class="fieldlabels">Mobile: *</label>
                            <input type="tel" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>" placeholder="Enter Your mobile Number"  readonly/> 
                            <label class="fieldlabels">Course *</label>
                          <input type="text" name="course" class="form-control" value="<?php echo $row['course']; ?>" placeholder="Enter Your mobile Number"  readonly/> 
  <label class="fieldlabels">State *</label>
                         <input type="text" name="state" class="form-control" value="<?php echo $row['state']; ?>" placeholder="Enter Your mobile Number"  readonly/>
  <label class="fieldlabels">City *</label>
                        <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>" placeholder="Enter Your mobile Number"  readonly/>
<br>
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                            </div> <label class="fieldlabels" > <h2 class="fs-title">Q1. Why do you want to pursue Management degree?(max 250 words only) *</h2></label>
                            <input type="hidden" name="Q1" Value="Why do you want to pursue Management degree?(max 250 words only) *"/>
                            <textarea id="w3review" name="ans1" rows="4" cols="50">

</textarea>
                        </div> <input type="button" name="next" class="next action-button" value="Next" /><input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                
                            </div> <label class="fieldlabels" ><h2 class="fs-title">Q2.What are your post program objectives? (max 250 words only) *</h2></label>
                            <input type="hidden" name="Q2" value="What are your post program objectives? (max 250 words only) *"/>
                            <textarea id="w3review" name="ans2" rows="4" cols="50">

</textarea>
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                               
                               
                            </div> <label class="fieldlabels" ><h2 class="fs-title">Q3. Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *</h2></label> 
                           <input type="hidden" name="Q3" value="Summary of your profile -Who Am I? (It should demonstrate your skills and various achievements academic & non-academic? (max 500 words only)  *"/>  
                            <textarea id="w3review" name="ans3" rows="4" cols="50">

</textarea>
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                               
                               
                            </div> <label class="fieldlabels" ><h2 class="fs-title">Q4. Your experience on Case Analysis? (max 1000 words only)*</h2></label>
                        <input type="hidden" name="Q4" value="Your experience on Case Analysis? (max 1000 words only)*"/>   
                            <textarea id="w3review" name="ans4" rows="4" cols="50">

</textarea>
                        </div> <input type="submit" name="submit" class="next action-button"  value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                     
                   
                     <?php

         if(isset($_POST["submit"])){
        $date = date("Y:m:d H:i:s");
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
           
            $sql = "INSERT INTO SOPforms (name,email,mobile,state,city,course,Q1,ans1,Q2,ans2,Q3,ans3,Q4,ans4,created)VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["state"]."','".$_POST["city"]."','".$_POST["course"]."',
            '".$_POST["Q1"]."',
            '".$_POST["ans1"]."',
            '".$_POST["Q2"]."',
            '".$_POST["ans2"]."',
            '".$_POST["Q3"]."','".$_POST["ans3"]."',
            '".$_POST["Q4"]."',
            '".$_POST["ans4"]."',
            '".$date."')";

            if (mysqli_query($conn, $sql)) {
                ?>
               <script>
            $('.succ-msg').show();
            $('.succ-msg').delay(5000).hide(400);
        </script>
         <?php
            } else {
               //echo "Error: " . $sql . "" . mysqli_error($db);
                ?>
             <script>
            $('.fail-msg').show();
            $('.fail-msg').delay(7000).hide(400);
        </script>
        <?php
            }
            $db->close();
         }
      ?>
                    
                </form>
            </div>
        </div>
    </div>
</div>
	<style type="text/css">
			.desktop-img, .mobile-img {
	width: 100%;
	height: auto;
	margin:20px 0 0;
}
.mobile-img {
	display: none;
}
@media (min-width: 768px) and (max-width: 1024px) {
.ttstart{
	        margin-left: 78px!important;
	}
	.kallu{
	      width: 404px!important;
	}
}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/

@media (min-width: 481px) and (max-width: 767px) {
    .ttstart{
	        margin-left: 78px!important;
	}
	.kallu{
	      width: 404px!important;
	}
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 330px to 479px
*/

@media (min-width: 330px) and (max-width: 480px) {
.ttstart{
	        margin-left: 78px!important;
	}
	.kallu{
	      width: 404px!important;
	}
}
/*iphone css*/
@media only screen 
and (min-device-width : 375px) 
and (max-device-width : 812px)
and (-webkit-device-pixel-ratio : 3)
{ 
.ttstart{
	        margin-left: 78px!important;
	}
	.kallu{
	      width: 404px!important;
	}
}
		</style>

</body>

</html>