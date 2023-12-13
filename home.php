<?php include('conn.php');
session_start();
$login_session = $_SESSION['email'];
/*if(empty($_SESSION['email']) or $_SESSION){
	    header("Location: https://careermantra.net/mangalmaymba.com/login.php"); 
	}
	print_r($_SESSION);
	$login_session=$_SESSION['email'];
    $query=mysqli_query($conn,"SELECT * FROM user where email='$login_session'")or die(mysqli_error());
    $row=mysqli_fetch_array($query);*/
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
    <link href="https://new-delhi-institute-of-management-delhi.topbschoolsinindia.in/favicon/favicon.ico.png" type="image/x-icon" rel="icon" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        .alert {
            padding: 20px;
            background-color: #36589e;
            /* Red */
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
    <?php include 'header.php' ?>
    <div id="layoutSidenav">
        <?php include 'sidevar.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <a class="btn btn-success" href="https://new-delhi-institute-of-management-delhi.topbschoolsinindia.in/Statement-of-Purpose.php" style="
    color: black;
    background-color: #ff0303;
    border-color: #ff0303;
    font-family: monospace;
">click here</a>
                        <p style="
    font-size: 14px;
    margin-top: -28px;
    margin-left: 104px;
    font-family: -webkit-pictograph;
">Application Form Feeling Is Mandotry Before Submission SOP IF You Already Filled It via Offline Or Online Please Ignore This Mesaage.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Application(s) In Progress <i class="fas fa-hourglass-half "></i></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Application(s) Completed <i class="fas fa-th-list"></i></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">No
                                    Query Raised <i class="fas fa-question"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="table-responsive removeFixedHeader vMid">
                                    <div class="table-header">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="col1 text-left">Application Form</th>
                                                    <th class="col2 text-center">Application No.</th>
                                                    <th class="col4 text-center">Application Fees</th>
                                                    <th class="col5 text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="no-data-row" style="display:none;">
                                                    <td colspan="6" class="text-center">
                                                        <p class="text-muted no-data-text"><i class="fa fa-database fa-2x text-muted" aria-hidden="true"></i>&nbsp;No Applications In-Progress</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM `posts` ORDER BY id DESC LIMIT 4");
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    ?>
                                        <div class="table-body">
                                            <div class="category-table category_heading" data-category="66">
                                                <h4 class="sub-header category_66" style="color:#1B880B;">Admission Application Portal</h4>
                                                <table class="table table-bordered cat1 incomplete category_form_66" style="border-left-color: rgb(27, 136, 11); display: table;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col1 text-left"><strong><?php echo $row['category'] ?></strong></td>
                                                            <td class="col2 text-center"> <?php echo $row['Appno'] ?> </td>
                                                            <td class="col4 text-center"><span class="font0"><b>Rs.</b></span>
                                                                <?php echo $row['fees'] ?> </td>
                                                            <td class="col5 text-center">
                                                                <a href="<?php echo $row['link'] ?>?email='<?php echo $_SESSION['email']; ?>'" class="btn " role="button" style="background:#901d78;color: white;">Continue</a><br>
                                                                <br>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    //  mysqli_close($conn);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            //Disable cut copy paste
            $('body').bind('cut copy paste', function(e) {
                e.preventDefault();
            });
            //Disable mouse right click
            $("body").on("contextmenu", function(e) {
                return false;
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>