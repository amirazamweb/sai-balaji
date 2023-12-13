<?php session_start();
    require_once("dbcontroller.php");
    $db_handle = new DBController();
   	if(!empty($_SESSION["student_id"]))
	{
	  $student_id=$_SESSION['student_id'];
	  
	    $selectstudentname = "SELECT * FROM `studenttable` WHERE studant_id='$student_id'";
	    $resultstudentname = mysqli_query($conn, $selectstudentname);
		$rowstudentname = mysqli_fetch_assoc($resultstudentname);
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
     <style>
      @media (max-width: 480px) {
            .college-name {
                height:auto!important;
            }
            .college-image img{
                
            }
        }
       </style>
    
  </head>
  <body>
      <?php require_once'../careermantra_v1/header.php'; ?>
       <?php include('../careermantra_v1/menubar-header.php');?>
       <section class="banner mt-5">
           <img class="img-fluid" src="https://careermantra.net/cap-dashboard/assets/img/b11.jpg">
       </section>
       <section class="cap-colleges py-3">
           <div class="container">
        	<div id="college-grid" class="row">
        		<div class="text-center mb-2"><h2>Popular Colleges</h2></div>
        		<?php
        		$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
        		if (!empty($product_array)) { 
        			foreach($product_array as $key=>$value){
        		?>
        		
        			<div class="col-lg-3 mb-2">
        				<div class="college-item p-3 border">
        				<!--	<form method="post" action="courses.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>&name=<?php echo $product_array[$key]["name"]; ?>">-->
        						<form method="post" action="courses.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>&name=<?php echo $product_array[$key]["name"]; ?>">
        						
        						<div class="row mb-2 d-flex mx-auto">
        								<div class="col college-image">
        									<img class="img-fluid border p-2 college_logo" style="height:4rem; width:4rem;" src="<?php echo $product_array[$key]["image"]; ?>">
        								</div>
        								<div class="col college-fee my-auto">
        									<div class="course-detail mb-1 d-none"><span class="mark">262 Courses</span></div>
        									<div class=""><h4 class="text-success"><?php echo "Rs".$product_array[$key]["price"]; ?></h4></div>
        								</div>
        						</div>
        						<div class="college-name overflow-auto mb-2" style="height:5rem"><?php echo $product_array[$key]["name"]; ?></div>
        						<div class="col-lg-12 col-xs-12">
        						    <div class="cart-action"><input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
        						    <input  class="btn btn-outline-danger w-100" type="submit" value="Apply Now" class="btnAddAction" /></div>
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