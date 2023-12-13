 <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                             <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card "></i></div>
                                All Application Form(s)
                            </a>
                            <a class="nav-link" href="profile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                My Profile
                            </a>
                             <a class="nav-link" href="payment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                                My Application
                            </a>
                             <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-power-off "></i></div>
                               Log Out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <?php
                            $login_session=$_SESSION['email'];
                            $query=mysqli_query($conn,"SELECT * FROM user where email='$login_session'")or die(mysqli_error());
                            $row=mysqli_fetch_array($query);

                        ?>
                        <div class="small">Logged in as:&nbsp;<?php echo $row['name']; ?></div>
                        
                    </div>
                </nav>
            </div>