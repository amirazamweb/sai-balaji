<?php session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<HTML>
<HEAD>
<TITLE>colleges</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
	.college-item{
   -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: .3s;
     -webkit-transition-property: transform;
    transition-property: transform;
	}
</style>
</HEAD>
<BODY>
<div class="container">
	<div id="college-grid" class="row">
		<div class="text-center mb-2"><h2>Popular Colleges</h2></div>
		<?php
		$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
		if (!empty($product_array)) { 
			foreach($product_array as $key=>$value){
		?>
		
			<div class="col border card m-1">
				<div class="college-item p-3">
					<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
						<div class="row mb-2 list-inline">
								<div class="col-lg-5 col-xs-5 college-image">
									<img class="img-fluid border p-2" src="<?php echo $product_array[$key]["image"]; ?>">
								</div>
								<div class="col-lg-7 col-xs-7 college-fee my-auto">
									<div class="course-detail mb-1"><span class="mark">262 Courses</span></div>
									<div class=""><h4 class="text-success"><?php echo "Rs".$product_array[$key]["price"]; ?></h4></div>
								</div>
						</div>
						<div class="college name overflow-auto" style="height:7rem;"><?php echo $product_array[$key]["name"]; ?></div>
						<div class="col-lg-12 col-xs-12">
							<button type="button" class="btn btn-outline-danger w-100">Apply Now</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</BODY>
</HTML>