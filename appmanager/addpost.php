<?php 
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CM Lead Manager</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link rel="icon" type="image/png" href="images/favicon/favicon.ico">
  <!-- Page level plugin CSS-->
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="js/datepickers.js"></script>
<style type="text/css">
	/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #3e3c88;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #3e3c88;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}
</style>

</head>

<body id="page-top">
<?php include 'header.php'?>

  <div id="wrapper">

    <!-- Sidebar -->
      <?php include 'sidevar.php'?>
    <!-- Sidebar -->
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
         
        
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Create Application</div>
      <div class="card-body">
       <div class="container">
  <form action="" method="post">
<div class="succ-msg message" style="display:none;color:#3e3c88;font-weight:bold;text-align:center;font-size:15px;">Thank You for submitting your Post.</div>
<label for="country">Course</label>
    <select id="category" name="category">
      <option value="Managment">Managment</option>
      <option value="Engineering">Engineering</option>
      <option value="other">other</option>
    </select>

    <label for="fname">Application Number</label>
    <input type="text" id="Appno" name="Appno" placeholder="Your Application number..">

    <label for="lname">FEES</label>
    <input type="text" id="fees" name="fees" placeholder="Your Fees..">

    <label for="lname">Link</label>
    <input type="text" id="link" name="link" placeholder="Your link..">


    <input type="submit" name="submit" value="Submit">
 <?php

         if(isset($_POST["submit"])){
        $date = date("Y:m:d H:i:s");
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
           
            $sql = "INSERT INTO  posts (category,Appno,fees,link,created)VALUES ('".$_POST["category"]."','".$_POST["Appno"]."','".$_POST["fees"]."','".$_POST["link"]."','".$date."')";

            if (mysqli_query($conn, $sql)) {
               //echo "<script> alert('Data submited Thank you '); </script>"; 
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
            $conn->close();
         }
      ?>
  </form>
</div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  

  <!-- Core plugin JavaScript-->

  <!-- Page level plugin JavaScript-->
 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  
 

  <!-- Custom scripts for all pages-->
  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  

</body>

</html>