<?php 
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Student Panel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="https://kccmbanoida.com/favicon/favicon.ico.png" type="image/x-icon" rel="icon"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'header.php'?>
        <div id="layoutSidenav">
           <?php include 'sidevar.php'?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">My Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Personal Information</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                
                            </div>
                             <div class="col-xl-3 col-md-6">
                                                           </div>
                             <div class="col-xl-3 col-md-6">
                                
                            </div>
                                                  <?php
 // include 'conn.php';
  //session_start();
$login_session=$_SESSION['email'];
$query=mysqli_query($conn,"SELECT * FROM user where email='$login_session'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>                
                            
                           
                        </div>
   
                        <div class="card mb-4">
                             <div class="card-body">
                                        <form method="post" action="#" >
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName"> Name</label>
                                                        <input class="form-control py-4"  type="text" name="name" value="<?php echo $row['name']; ?>" readonly/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Email</label>
                                                        <input class="form-control py-4"  type="text" name="email" value="<?php echo $row['email']; ?>" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" > Mobile</label>
                                                        <input class="form-control py-4"  type="text" name="mobile" value="<?php echo $row['mobile']; ?>" readonly />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Alernate No</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" name="Alno" value="<?php echo $row['AlNo']; ?>"  />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">State</label>
                                                        <input class="form-control py-4" id="inputPassword" type="text" name="state" value="<?php echo $row['state']; ?>" readonly/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">City</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="text" name="city" value="<?php echo $row['city']; ?>" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Course</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" name="course" value="<?php echo $row['course']; ?>" readonly/>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button type="submit" name="submit" value="Update Now" id="submit" class="button" style="
    color: white;
    background: #901d78;
    border-color: #901d78;
">Save Changes</button></div>
                                
      <?php
 //   include ("conn.php");
    
    if(isset($_POST['submit'])){
        $update_id = $login_session;
        //getting the text data from the fields
  $Alno = $_POST['Alno'];
 
 
  
        //getting the image form the field
        $update = "update user set
       Alno='$Alno' where email='$update_id'";
        //$query=mysqli_query($con, $sql);
        $run = mysqli_query($conn, $update);
        if($run)
        {
            echo "<script>alert('Profile updated Successfully!..')</script>";

        }
        else
        {
            echo "<script>alert('There is something wrong!')</script>";
        }
    }
     ?>               
 
                                                                                 
                                        </form>
                                    </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
         
      
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
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
    </body>
</html>
