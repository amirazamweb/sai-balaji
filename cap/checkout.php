<?php session_start();
     require_once('db_connection.php');
   $amount=$_GET['amount'];
	$total_fees= $amount;
   $college=$_GET['college'];
   $email=$_GET['email'];
	if(!empty($email)){
       $sql="select * from application where email='$email'";
	    $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
	 }else{
      header("location:https://sam-global-university.topbschoolsinindia.in/application-form-2023.php");
    }
 $uploadtime = date("Y-m-d H:i:s");
   	
	if(isset($_POST['btnsubmit'])){
      //echo"Hi...................";
	    $name=$_POST['firstname'];
	    $email=$_POST['email'];
	    $mobile=$_POST['phone'];
	    $amount=$_POST['amount'];
        $college=$_POST['productinfo'];
      
	  	$cuponcode=$_POST['cuponcode'];
      	if(!empty($cuponcode)){
            if($cuponcode=='SAM50OFF'){
				$amount=$amount/2;
                     $url="https://sam-global-university.topbschoolsinindia.in/cap/payu/index.php?amount=$amount&college=$college&name=$name&email=$email&mobile=$mobile&student_id=$studant_id";
                   echo "<script>
                        alert('Coupon Applied Successfully');
                        window.location.href='$url';
                    </script>";
                }
				else if($cuponcode=='SAM100OFF'){
					$amount=$amount-$amount;
					   $url="https://sam-global-university.topbschoolsinindia.in/cap/payu/index.php?amount=$amount&college=$college&name=$name&email=$email&mobile=$mobile&student_id=$studant_id";
					 echo "<script>
						  alert('Coupon Applied Successfully');
						  window.location.href='$url';
					  </script>";
				}
				else{
				   $url="https://sam-global-university.topbschoolsinindia.in/cap/payu/index.php?amount=$amount&college=$college&name=$name&email=$email&mobile=$mobile&student_id=$studant_id";
				   echo "<script>
						alert('Invalid Coupon Code');
						window.location.href='$url';
					</script>";
				}
        }
		else{
				   $url="https://sam-global-university.topbschoolsinindia.in/cap/payu/index.php?amount=$amount&college=$college&name=$name&email=$email&mobile=$mobile&student_id=$studant_id";
				   echo "<script>
						alert('Application submitted Successfully');
						window.location.href='$url';
					</script>";
				}
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
      <style>
        
      </style>
  </head>
   <body>
      <?php require_once'../careermantra_v1/header.php'; ?>
      <?php include('../careermantra_v1/menubar-header.php');?>
         <section class="" style="margin-top:100px;margin-bottom:50px">
            <div class="container-fluid">
               <div class="col-lg-6 col-xs-12 border my-auto  mx-auto">
                  <div class="">
                      <form class="p-3" method="POST" action="checkout.php">
                        <div class="mb-2">
                             <label for="exampleFormControlInput1" class="form-label">name</label>
                             <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your name" required>
                          </div>
                          <div class="mb-2">
                             <label for="exampleFormControlInput1" class="form-label">Email address</label>
                             <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                          </div>
                          <div class="mb-2">
                             <label for="exampleFormControlInput1" class="form-label">Phone</label>
                             <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter your mobile no" required>
                          </div>
                          <div class="mb-2">
                             <label for="exampleFormControlInput1" class="form-label">Amount</label>
                             <input type="text" name="amount" readonly="readonly" value="<?php echo $amount; ?>" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          <div class="mb-4">
                              <label for="exampleFormControlInput1" class="form-label">College Name</label>
                             <input type="text" name="productinfo" readonly="readonly" class="form-control" value="<?php echo $college; ?>"/>
                          </div>
                          <div class="mb-2 text-center">
                             <input type="submit" name="btnsubmit" class="btn btn-danger px-4" value="Save"/>
                          </div>
                   </form>
               </div>
              </div>
            </div>
         </section>   
      <?php include('../careermantra_v1/footer_1.php');?>
      <script src="../careermantra_v1/js/bootstrap.bundle.min.js"></script>
   </body>
</html>