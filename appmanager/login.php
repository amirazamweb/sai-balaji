<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CM Lead Manager Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="images/favicon/favicon.ico">

</head>

<body class="bg-dark">
 
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="
    text-align: center;
">CM Admin Login</div>
      <div class="card-body">
        <form method="post" action="login3.php">
            <?php if (isset($_GET['error'])) { ?>

            <p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>

        <?php } ?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" name="uname" class="form-control"  required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" >
              <label for="inputPassword">Password</label>
            </div>
          </div>
          
          
          <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block"> 
         
        </form>
      </div>
    </div>
  </div>
 
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
