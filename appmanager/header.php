<?php include('db.php');

 ?>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top"style="
    background-color:#b51212 !important;
">

    <a class="navbar-brand mr-1" href="index.php">Leads</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
       
        <div class="input-group-append">
          
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
  
    color: rgb(255, 255, 255);
">
          <i class="fas fa-user-circle fa-fw"></i>
            <?php 
//session_start();

$login_session=$_SESSION['username'];
if($login_session==true)
{

}
else
{
header('location:login.php');
}
echo $login_session;?>
</a>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>

  </nav>