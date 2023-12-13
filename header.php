 <?php //session_start();
include('conn.php');
$login_session=$_SESSION['email'];
/*
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($curPageName=='login1.php' or $curPageName=='login1') 
    {
        
    }
    else
    {
        if(empty($_SESSION['email']))
        {
            header("location: https://careermantra.net/mangalmaymba.com/login1.php");
        }
    }
*/
?>
 <nav class="sb-topnav navbar navbar-expand navbar-dark ">
            <a class="navbar-brand" href="home.php"><img alt="college Logo" src="https://new-delhi-institute-of-management-delhi.topbschoolsinindia.in/images/NDIM-logo190x70.webp" style="
    height: 66px;width:100%
"></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#" style="
    color: black;
"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
    color: black;
">
     <?php 
$query=mysqli_query($conn,"SELECT * FROM user where email='$login_session'")or die(mysqli_error());
$row=mysqli_fetch_array($query);


//print_r($_SESSION);
if($login_session==true)
{

}
else
{
header('location:login1.php');
}
echo "welcome" .",".$row['name']?>
</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>