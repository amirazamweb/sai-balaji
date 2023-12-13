<?php session_start();
   // require_once('../db_connection.php');
    require_once("dbcontroller.php");
    $db_handle = new DBController();
     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
     $url;  
     require_once('../db_connection.php');
	
   	if(!empty($_SESSION["student_id"]))
	{
	    $student_id=$_SESSION['student_id'];
	    $selectstudentname = "SELECT * FROM `studenttable` WHERE studant_id='$student_id'";
	    $resultstudentname = mysqli_query($conn, $selectstudentname);
		$rowstudentname = mysqli_fetch_assoc($resultstudentname);
		$name=$rowstudentname['name'];
		$email=$rowstudentname['email'];
		$mobileno=$rowstudentname['mobileno'];
		//print_r($_SESSION);
	}
	/*------------------------for payment-----------------------------------*/
           $MERCHANT_KEY = "tHMJix";
            $SALT = "PI3nqI61";
            
            // Merchant Key and Salt as provided by Payu.
            
            //$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
            $PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode
            
            $action = '';
            
            $posted = array();
            if(!empty($_POST)) {
                //print_r($_POST);
              foreach($_POST as $key => $value) {    
                $posted[$key] = $value; 
            	
              }
            }
            
            $formError = 0;
            
            if(empty($posted['txnid'])) {
              // Generate random transaction id
              $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            } else {
              $txnid = $posted['txnid'];
            }
            $hash = '';
            // Hash Sequence
            $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
            if(empty($posted['hash']) && sizeof($posted) > 0) {
              if(
                      empty($posted['key'])
                      || empty($posted['txnid'])
                      || empty($posted['amount'])
                      || empty($posted['firstname'])
                      || empty($posted['email'])
                      || empty($posted['phone'])
                      || empty($posted['productinfo'])
                      || empty($posted['surl'])
                      || empty($posted['furl'])
            		  || empty($posted['service_provider'])
              ) {
                $formError = 1;
              } else {
                //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
            	$hashVarsSeq = explode('|', $hashSequence);
                $hash_string = '';	
            	foreach($hashVarsSeq as $hash_var) {
                  $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                  $hash_string .= '|';
                }
            
                $hash_string .= $SALT;
            
            
                $hash = strtolower(hash('sha512', $hash_string));
                $action = $PAYU_BASE_URL . '/_payment';
              }
            } 
            elseif(!empty($posted['hash'])) 
            {
              $hash = $posted['hash'];
              $action = $PAYU_BASE_URL . '/_payment';
            }
/*------------------------for payment-----------------------------------*/
	if(isset($_POST['btnsubmit'])){
	    print_r($_POST);
	}
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <meta name="description" content="careermantra latest news, top news , colleges news">
      <meta name="keywords" content="careermantra latest news, top news , colleges news">
      <meta name="author" content="careermantra latest news, top news , colleges news">
      <title>careermantra latest news, top news , colleges news</title>
      <?php require_once('../careermantra_v1/head.php'); ?>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
      <style>
         .rupee svg{
         fill: #198754!important
         }
         .courselist-view ul li:hover {
         background-color: #f9f9fb;
         }
         @media (max-width: 480px) {
         .college-name {
         height:auto!important;
         }
         .college-image img{
         height: 5rem;
         width: 5rem!imporatnt;
         }
         }
      </style>
      <script>
         $(document).ready(function(){
             
           $(".btn1").click(function(){
              var id = $(this).attr('id');  
                 $(".course-item").append("<span>" + id + "</span>,");
                 $(".delete-icon").attr("style", "display:block")
             });
                $("#delete").click(function(){
                  $(".course-item").remove();
                  $(".delete-icon").attr("style", "display:none")
                  //$(".course-item").html("<h6>No course selected, Select course/s and add college to cart</h6>");
                  location.replace("<?php echo $url; ?>")
                });
            
         });
         
            var hash = '<?php echo $hash ?>';
            function submitPayuForm() {
              if(hash == '') {
                return;
              }
              var payuForm = document.forms.payuForm;
              payuForm.submit();
            }
    </script>
    <script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0203103334_0) return;
        window.mm_menu_0203103334_0 = new Menu("root",91,19,"Century Gothic",13,"#FFFFFF","#000000","#660000","#FF9900","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0203103334_0.addMenuItem("History","window.open('109651history.html', '_self');");
  mm_menu_0203103334_0.addMenuItem("Objectives","window.open('109651objective.html', '_self');");
   mm_menu_0203103334_0.hideOnMouseOut=true;
   mm_menu_0203103334_0.bgColor='#555555';
   mm_menu_0203103334_0.menuBorder=1;
   mm_menu_0203103334_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0203103334_0.menuBorderBgColor='#FEFFF9';
    window.mm_menu_0203103632_0 = new Menu("root",170,19,"Century Gothic",13,"#FFFFFF","#000000","#660000","#FF9900","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0203103632_0.addMenuItem("Admission","window.open('109651admission.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("School Timing","window.open('109651schooltiming.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("Evaluation Procedure","window.open('109651evaluation.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("Co-Curricular Activities","window.open('109651cocurricular.html', '_self');");
   mm_menu_0203103632_0.hideOnMouseOut=true;
   mm_menu_0203103632_0.bgColor='#555555';
   mm_menu_0203103632_0.menuBorder=1;
   mm_menu_0203103632_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0203103632_0.menuBorderBgColor='#FEFFF9';

mm_menu_0203103632_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
   </head>
   <body>
      <?php require_once'../careermantra_v1/header.php'; ?>
      <?php include('../careermantra_v1/menubar-header.php');?>
      <section class="banner mt-5">
         <?php if(!empty($_GET["code"])) {
            $sql_banner = "SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'";
            $resultsql_banner = mysqli_query($conn, $sql_banner);
               $rowbanner = mysqli_fetch_assoc($resultsql_banner);
               $banner=$rowbanner['background_image'];
               $id=$rowbanner['id'];
               $name=$rowbanner['name'];
               $payment_url=$rowbanner['payment_url'];
            	    }
            ?>		
         <img class="img-fluid" src="<?php echo $banner; ?>" style="">
         <?php // } ?>
      </section>
      <section class="courses-detail">
 <div class="container">
            <div class="row py-3">
               <div class="col-lg-8 col-xs-12 courselist-view">
                  <h2>Courses are offered by <?php echo $name; ?></h2>
                  <ul class="list-group list-group-flush mx-3">
                     <?php $sql_select_courses="select * from cap_courses where college_id=$id";
                        $resultcourses = mysqli_query($conn, $sql_select_courses);
                        while($row=mysqli_fetch_assoc($resultcourses)){
                        $course_name=$row['course_name'];
                        ?>
                     <li class="list-group-item d-flex justify-content-between align-items-start college_course" value="<?php echo $course_name; ?>">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold"><?php echo $course_name; ?></div>
                        </div>
                        <button class="btn btn-outline-danger btn1" id="<?php echo $course_name; ?>">Add</button>
                     </li>
                     <?php } ?>
                  </ul>
               </div>
               <?php 
                  if(!empty($_GET['code'])){
                      $sql_select_college="SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'";
                      $sql_college_result= mysqli_query($conn, $sql_select_college);
                      $rowcollege = mysqli_fetch_assoc($sql_college_result);
                  ?>
            <div class="col-lg-4 col-xs-12 shadow py-3 my-auto border">
                 <form action="#" method="post">  
                    <div class="p-3">
                     <div class="row">
                        <div class="col-lg-10 d-flex text-left mx-auto">
                           <h5 class="fw-bold"><?php echo $rowcollege['name']; ?></h5>
                        </div>
                        <div class="col-lg-2 fw-bold delete-icon" style="display:none;" id="delete" onclick="myFunction()">
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                           </svg>
                        </div>
                     </div>
                     <p class="course-item"></p>
                     <p name="course" class="course-item-error" style="display:none"><span></span></p>
                     <div class="rupee d-flex d-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                           <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
                        </svg>
                     </div>
                     <div class="text-center">
                        <h3 class="fw-bold text-success"><?php echo $rowcollege['price']; ?> </h3>
                     </div>
                     <hr>
                    <?php if(empty($student_id)) {?> 
                    <div class="d-flex mx-auto">
                        <a href="https://careermantra.net/student_dashboard/login">
                            <input type="button" name="" class="btn btn-success mx-4" onclick="openPayment()" value="Checkout">
                        </a> 
                    </div>
                    <?php } else { ?>
                    <div class="d-flex mx-auto">
                        <a href="https://careermantra.net/cap/payu/index.php?amount=<?php echo $rowcollege['price'];  ?>&college=<?php echo $rowcollege['name']; ?>&name=<?php $name;?>email=<?php echo $email; ?>&mobile=<?php echo $mobileno; ?>">
                            <input type="button" name="" class="btn btn-success mx-4" onclick="openPayment()" value="Checkout">
                        </a> 
                    </div>
                    <?php } ?>
                    </div>
                  </div>
            </div>
               <?php 
                    } 
               ?>
                </div>
            </div>
        </section>
        
        <section class="d-none">
               <div class="col-lg-6 col-xs-12 px-5 mx-auto">
                   <?php if($formError) { ?>
	                    <div><span style="color:red">Please fill all mandatory fields.</span></div> 
		            <?php } ?>
                  <div class="p-3 border shadow">
                     <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                		<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                		<input type="hidden" name="txnid" value="<?php echo $txnid ?>" /> 
                          <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">name</label>
                             <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your name">
                          </div>
                          <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Email address</label>
                             <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Phone</label>
                             <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter your mobile no">
                          </div>
                          <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Amount</label>
                             <input type="text" name="amount" readonly="readonly" value="<?php echo $rowcollege['price']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter your mobile no">
                          </div>
                          <input type="hidden" name="serial" value="serial_no"/>
                          <div class="mb-3">
                             <input type="text" name="productinfo" readonly="readonly" class="form-control" value="<?php echo $rowcollege['name']; ?>"/>
                          </div>
                          <div class="mb-3">
                             <input type="hidden" name="course" readonly="readonly" class="form-control" value="<?php  ?>"/>
                          </div>
                          <input type="hidden" name="surl" value="https://careermantra.net/cap/success.php" size="64" />
                          <input type="hidden" name="furl" value="https://careermantra.net/cap/failure.php" size="64" />
                          <input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
                          <div class="mb-3">
                           <?php if(!$hash)
    		                { ?>
                                <input type="submit" class="btn btn-primary" value="Pay Now" />
                            <?php } ?>
                        </div>
                  </form>
               </div>
              </div>
         </section>   
      <section class="cap-colleges py-3">
         <div class="container">
            <div id="college-grid" class="row">
               <div class="mb-2">
                  <h2>Colleges you may also like to explore</h2>
               </div>
               <?php
                  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
                  if (!empty($product_array)) { 
                  	foreach($product_array as $key=>$value){
                  ?>
               <div class="col-lg-3 mb-2">
                  <div class="college-item p-3 border">
                     <form method="post" action="courses.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>&name=<?php echo $product_array[$key]["name"]; ?>">
                        <div class="row mb-2 d-flex mx-auto">
                           <div class="col college-image">
                              <img class="img-fluid border p-2 college_logo" style="height:4rem; width:4rem;" src="<?php echo $product_array[$key]["image"]; ?>">
                           </div>
                           <div class="col college-fee my-auto">
                              <div class="course-detail mb-1 d-none"><span class="mark">262 Courses</span></div>
                              <div class="">
                                 <h4 class="text-success"><?php echo "Rs".$product_array[$key]["price"]; ?></h4>
                              </div>
                           </div>
                        </div>
                        <div class="college-name overflow-auto mb-2" style="height:5rem"><?php echo $product_array[$key]["name"]; ?></div>
                        <div class="col-lg-12 col-xs-12">
                           <div class="cart-action"><input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
                              <input  class="btn btn-outline-danger w-100" type="submit" value="Apply Now" class="btnAddAction" />
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <?php
                  }
                  }
                  ?>
            </div>
         </div>
      </section>
      <?php include('../careermantra_v1/footer_1.php');?>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
      <script src="../careermantra_v1/js/bootstrap.bundle.min.js"></script>
   </body>
</html>