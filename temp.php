<?php
session_start();
//  include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Application Form | KCC Institute of Technology & Management</title>
    <script src="js/jquery.js"></script>
    <script src="js/cities.js"></script>
    <link rel="icon" type="image/png" href="https://kccmbanoida.com/favicon/favicon.ico.png">
    <meta name="msapplication-TileColor" content="favicon/favicon.ico.png#ffffff">
    <meta name="keywords" content="Best MBA College in Noida UTTAR PRADESH | Top Management Colleges in India | KCC Institute of Technology & Management" />
    <meta name="description" content="KCC Institute of Technology & Management-Admission Form-2021, Top MBA Colleges, MBA Noida" />
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/styleae24.css?v=14">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <style>
        .custom-combobox {
            position: relative;
            display: inline-block;
        }

        .custom-combobox-toggle {
            position: absolute;
            top: 0;
            bottom: 0;
            margin-left: -1px;
            padding: 0;
        }

        .custom-combobox-input {
            margin: 0;
            /*padding: 5px 10px;*/
        }

        .ui-menu-item {
            margin: 7px !important;
        }

        a.ui-corner-all:hover {
            margin: 7px !important;
        }

        .ui-autocomplete-input {
            padding: 10px !important;
            font-size: 14px !important;
            width: 90% !important;
        }

        .ui-autocomplete.ui-menu.ui-widget.ui-widget-content.ui-corner-all {
            /* display: none !important;
    height: 300px !important;*/
            overflow: scroll !important;
        }
    </style>
</head>

<body>
    <!-- <div class="preloader"></div> -->
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header header-one">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo-1-1.png" class="main-logo" alt="" />
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box one-page-scroll-menu ">
                            <li class="current scrollToLink">
                                <a href="#home">Home</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#aboutus">About Us</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#programmes">Programmes</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#placement">Placement</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#contacts">Contact</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="https://kccmbanoida.com/login.php">login</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.header-one -->
        <section class="banner-one" id="home">
            <span class="banner-one__bubble banner-one__bubble-one"></span>
            <span class="banner-one__bubble banner-one__bubble-two"></span>
            <span class="banner-one__bubble banner-one__bubble-three"></span>
            <span class="banner-one__bubble banner-one__bubble-four"></span>
            <span class="banner-one__bubble banner-one__bubble-five"></span>
            <!-- <div class="banner-one__mocs-wrapper">
                <img src="images/banner-moc-1-1.png" class="banner-one__moc-1" alt="Awesome Image" />
                <img src="images/banner-moc-1-2.png" class="banner-one__moc-2" alt="Awesome Image" />
            </div> -->
            <!-- /.banner-one__moc-wrapper -->
            <style>
                .headline-contents {
                    //margin-botttom:100px;
                }
            </style>
            <div class="container">
                <!-- /.banner-one__content -->
                <div class="row">
                    <div class="col-lg-7 text-white my-auto mt-0">
                        <div class="headline-contents">
                            <h2>Welcome to</h2>
                            <h1>KCC Institute of Technology & Management</h1>
                            <h6>Approved by All India Council for Technical Education, Ministry of HRD, Govt. of India.</h6>
                            <h5><b>Admissions Open For Batch 2022</b></h5>
                            <h6>More than 500+ companies of repute have recruited and given 100% finest placements</h6>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="enquiry_form">
                            <div>
                                <h5 style="text-align: center;">KCC Admission 2021-23</h5>
                            </div>
                            <br>
                            <div class="content__wrapper">
                                <form method="POST" action="register.php" id="admissionForm" style="margin-top: -23px">
                                    <?php
                                    if (isset($_SESSION['log_msg'])) {
                                    ?>
                                        <div class="alert alert-danger">
                                            <span>
                                                <center>
                                                    <?php echo $_SESSION['log_msg'];
                                                    unset($_SESSION['log_msg']);
                                                    ?>
                                                </center>
                                            </span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['sign_msg'])) {
                                    ?>
                                        <div></div>
                                        <div class="alert alert-danger">
                                            <span>
                                                <center>
                                                    <?php echo $_SESSION['sign_msg'];
                                                    unset($_SESSION['sign_msg']);
                                                    ?>
                                                </center>
                                            </span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-group" style="margin: 15px;">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group" style="margin: 15px;">
                                        <input type="email" class="form-control" id="emailAddr" name="email" placeholder="Enter Your Email Address">
                                    </div>
                                    <div class="form-group" style="margin: 15px;">
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" maxlength="10">
                                    </div>
                                    <div class="form-group" style="margin: 15px;">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group" id="selection" style="margin: 15px;">
                                        <select class="form-control form-input form-field favouriteFive" id="listBox" name="state" value="" onchange='selct_district(this.value)' required="">
                                            <option value="" selected="selected">Select State</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="selection" style="margin: 15px;">
                                        <select class=" form-control form-input form-field favouriteFive" id='secondlist' name="city" onchange='selct_district(this.value)' required="">
                                            <option value="" selected="selected">Select City</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="margin: 15px;">
                                        <select class="form-control" name="course" id="coursename">
                                            <option value="">Select Course</option>
                                            <option value="MBA">MBA Plan</option>
                                            <option value="MBA +">MBA +</option>
                                            <option value="MBA + IMMBANGLORE">MBA + IMMBANGLORE</option>
                                        </select>
                                        <input type="hidden" placeholder="Enter username" id="status" name="status" value="aplication not submited" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;background-color: #b51212;">Register</button>
                                    <div class="text-center">
                                        <div class="small"><a href="https://kccmbanoida.com/login.php">
                                                Already Have an account? login here!</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-----col-lg-5------->
                </div>
                <!--------row------------->
            </div>
            <!-- /.container -->
        </section><!-- /.banner-one -->
        </br>
        </br>
        <section class="fun-fact-one" id="aboutus">
            <div class="container">
                <div class="row margin-top-60px">
                    <div class="col-md-6 text-right top-padding top-padding-1 top-padding-10">
                        <div class="block-title text-center mt-4">
                            <h2 class="block-title__title"><b><img src="images/Extra-Cashback.png" alt="KCC Institute of Technology & Management" / style="height: 100px;"></b></h2>
                        </div>
                        </br>
                        </br>
                        <div class="amaz_div">
                            <p style="margin: 0;"><span>Apply Now with your CAT enrollment number & get Cashback upto <h4><b>Rs. 500/-</b></h4></span></p>
                            <p><span>Deadline:- 31st January, 2023</span></p>
                        </div>
                        <img src="images/arrow.png" style="width:70px; height:auto; margin-right:-20px;" />
                    </div>
                    <div class="col-md-6 pad-top billu text-right ">
                        <h1><span style="
    font-size: 46px;
">KCC</span><br />KCC Institute of Technology & Management
                        </h1>
                        <p>Approved by All India Council for Technical Education, Ministry of HRD, Govt. of India.
                            Admissions Open For Batch 2022
                            More than 500+ companies of repute have recruited and given 100% finest placements</p>
                    </div>
                </div>
                <div class="row">
                    <h3 class="block-title__title programs-title d-none">
                        <b class="themecolor">Why KCC Institute of Technology & Management</b>
                    </h3>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <div class="exec"> <span>A</span>Grade "A" College of GGSIP University New Delhi</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>2nd</span> Ranked 2nd in North Region for 'faculty'
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>16LPA</span>Highest Placement Package Offered
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>8LPA</span> Average Placement Package Offered
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>2nd</span>RANKED 2nd In Innovative Teaching Technique in North India
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>1st</span> Ranked 1st 100 B-Schools by Times of India
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>500+</span>Recruiters
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-fact-one__single text-center box box-1 my-auto">
                            <span>100%</span>Placement Assistance
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.fun-fact-one -->
        <section class="service-one" id="programmes">
            <span class="service-one__bubble service-one__bubble-one"></span>
            <span class="service-one__bubble service-one__bubble-two"></span>
            <span class="service-one__bubble service-one__bubble-three"></span>
            <span class="service-one__bubble service-one__bubble-four"></span>
            <span class="service-one__bubble service-one__bubble-five"></span>
            <div class="container" style="
    margin-top: 29px;
">
                <hr class="service-one__line" />
                <div class="block-title text-center">
                    <h2 class="block-title__title programs-title">
                        <b class="themecolor">MBA PROGRAMS</b>
                        <span style="display:block;">Courses Offered by
KCC Institute of Technology & Management</sup>
                            </b></span>
                    </h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="service-one__single">
                            <div class="service-one__inner">
                                <h3 class="service-one__title">MBA – Regular</h3>
                                <p>Course fee:– 2,90,000</p>
                                <p>• Certificate Program in Digital Marketing</p>
                                <p>• Six sigma Green Belt</p>
                                <p>• Certificates program in Retail Management</p>
                                <p>• Certificate program in financial planning</p>
                                <p>• Certificates program in financial Derivates</p>
                                <p>• Workshops on Entrepreneurship & Start-ups</p>
                                <p>• NSIC Visit</p>
                                <p>• Certificate On Entrepreneurship Management</p>
                                <p>• Industrial Visits</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-one__single">
                            <div class="service-one__inner">
                                <h3 class="service-one__title">MBA++ <span>- in Association with IIM inodre
                                (CEEP + MDP)</span></h3>
                                <p>Course Fee:– 3,50,000</p>
                                <p>• Certificate in Digital Marketing (google Adwords, SEO, Social Media Marketing)</p>
                                <p>• 100+ Presentation Based upon case Studies</p>
                                <p>• Certification on Entrepreneurship Management</p>
                                <p>• Certification in Stock Market by BSE/NSE</p>
                                <p>• Corporate Grooming workshop</p>
                                <p>• Spoken and written communication</p>
                                <p>• Industrial visits as per as Specialization</p>
                                <p>• Certificate in corporate Etiquettes</p>
                                <p>• International Awareness project</p>
                                <p>• Foreign and international tours</p>
                                <p>+</p>
                                <p>• Certificate Program in Digital Marketing</p>
                                <p>• Six sigma Green Belt</p>
                                <p>• Certificate program in Retail Management</p>
                                <p>• Certificate program in Financial planning</p>
                                <p>• Certificate program in Financial Derivates</p>
                                <p>• Workshops on Entrepreneurship & Start-ups</p>
                                <p>• Certificate on Entrepreneurship Management</p>
                                <p>• NSIC Visit</p>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-4">
                        <div class="service-one__single">
                            <div class="service-one__inner">
                                <h3 class="service-one__title">MBA++ <span>- (IIM Banglore )</span></h3>
                                <p>Fees – 4.50 lac</p>
                                <p>Dual specialization</p>
                                <p>17 certificate + IIM Banglore</p>
                                <p>2 intership ( paid )</p>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="col-md-1"></div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->
        <!-- <section class="brand-one amazon_sec">
            <div class="container">
<div class="block-title text-center">
                    <h2 class="block-title__title"><b><img src="images/amazon.png" alt="NDIM-New Delhi Institute of Management" /></b></h2>
                </div>
                <div class="amaz_div">
                    <h4><span>Apply Now with your CAT enrollment number & get Amazon Gift Card Worth Rs. 500/-*</span></h4>
                    <h4><span>Deadline:- 31st December 2019</span></h4>
                </div>
            </div>
        </section> -->
        <section class="brand-one" id="placement">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title programs-title">
                        <b class="themecolor">PLACEMENTS</b>
                        <span style="display:block;">We will give you placement services once your MBA/PGDM Course completes
                            <sup>**</sup>100% PLACEMENTS SINCE INCEPTION
                            </b></span>
                    </h2>
                    <!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="brand-one__carousel owl-them owl-carousel">
                    <div class="item">
                        <img src="images/cipla.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/da.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/Genpact-logo-1.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/hero.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/st.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/fd.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/munjal.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                    <div class="item">
                        <img src="images/testimonial3.jpg" alt="KCC Institute of Technology & Management" />
                    </div>
                </div><!-- /.brand-one__carousel owl-them owl-carousel -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->
        <section class="testimonials-one" id="testimonials">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title"><b><span class="themecolor">ALUMNI</span> SPEAKS</b></h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
            <div class="container-fluid">
                <div class="testimonials-one__carousel owl-theme owl-carousel">
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__inner">
                                <div class="testimonials-one__top">
                                    <div class="testimonials-one__image">
                                        <img src="images/rishabh-srivastava.jpg" alt="rishabh-srivastava" />
                                        <span class="testimonials-one__qoute">
                                            <img src="images/qoute-1-1.png" alt="KCC Institute of Technology & Management" />
                                        </span>
                                    </div><!-- /.testimonials-one__image -->
                                </div><!-- /.testimonials-one__top -->
                                <div class="testimonials-one__content">
                                    <h3 class="testimonials-one__name">Rishabh Srivastava<br /><span>Placed with Moody's Corporation</span></h3>
                                    <p class="testimonials-one__text">It would be difficult to sum up my years of KCC in just few lines. I must say that the learning and exposure which it gives is just commendable. The faculty is just amazing and they stand by you from the first day to the end of placement days. The best part of college is that they give you internships and placements in best reputed organizations. During the most crucial time of placements, the CRD placement team provides students with lot of preparatory sessions so that they come up with their best. I'll definitely cherish these moments forever. Thank you KCC!!. </p>
                                </div><!-- /.testimonials-one__content -->
                            </div><!-- /.testimonials-one__inner -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__inner">
                                <div class="testimonials-one__top">
                                    <div class="testimonials-one__image">
                                        <img src="images/jenu-jayan.jpg" alt="Jenu Jayan" />
                                        <span class="testimonials-one__qoute">
                                            <img src="images/qoute-1-1.png" alt="KCC Institute of Technology & Management" />
                                        </span>
                                    </div><!-- /.testimonials-one__image -->
                                </div><!-- /.testimonials-one__top -->
                                <div class="testimonials-one__content">
                                    <h3 class="testimonials-one__name">Jenu Jayan<br /><span>Placed with Spicejet India Ltd.</span></h3>
                                    <p class="testimonials-one__text">As far as, I know KCC is the college which imparts education as per the need of present competitive environment. It is an institution where the emphasis is given on overall development of the student with much priority to industrial visits, guest lectures, and personality development and placement training activities with GD classes so that graduates can lead the world. It also provides good placements. It is a good college with friendly environment of proper management system. The team is excellent with deep knowledge of every subject. So, I will give 5 out of 5 marks to KCC. Thanks CRD Team.
                                    </p>
                                </div><!-- /.testimonials-one__content -->
                            </div><!-- /.testimonials-one__inner -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__inner">
                                <div class="testimonials-one__top">
                                    <div class="testimonials-one__image">
                                        <img src="images/amit-kumar-ojha.jpg" alt="Amit Kumar Ojha" />
                                        <span class="testimonials-one__qoute">
                                            <img src="images/qoute-1-1.png" alt="KCC Institute of Technology & Management" />
                                        </span>
                                    </div><!-- /.testimonials-one__image -->
                                </div><!-- /.testimonials-one__top -->
                                <div class="testimonials-one__content">
                                    <h3 class="testimonials-one__name">Amit Kumar Ojha<br /><span>Placed with Karvy Stock Broking Ltd.</span></h3>
                                    <p class="testimonials-one__text">I have been into sports since my school and that’s what I wished to continue in my college days also. KCCITM provided me that thing with the accessibility to sports like basketball, tennis etc. along with studies. I am very thankful to my college for such good exposure.</p>
                                </div><!-- /.testimonials-one__content -->
                            </div><!-- /.testimonials-one__inner -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__inner">
                                <div class="testimonials-one__top">
                                    <div class="testimonials-one__image">
                                        <img src="images/bharti.jpg" alt="Bharti" />
                                        <span class="testimonials-one__qoute">
                                            <img src="images/qoute-1-1.png" alt="KCC Institute of Technology & Management" />
                                        </span>
                                    </div><!-- /.testimonials-one__image -->
                                </div><!-- /.testimonials-one__top -->
                                <div class="testimonials-one__content">
                                    <h3 class="testimonials-one__name">Bharti<br /><span>Placed with Next Step Services Pvt Ltd.</span></h3>
                                    <p class="testimonials-one__text">We get adequate external exposure with in depth subject knowledge. We learn something new & significant everyday at KCCITM. The Training & Placement Cell arranges talks by eminent professionals, group discussions and personality development sessions that groom us to get good placement opportunities.
                                    </p>
                                </div><!-- /.testimonials-one__content -->
                            </div><!-- /.testimonials-one__inner -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__inner">
                                <div class="testimonials-one__top">
                                    <div class="testimonials-one__image">
                                        <img src="images/divya-mishra.jpg" alt="Divya Mishra" />
                                        <span class="testimonials-one__qoute">
                                            <img src="images/qoute-1-1.png" alt="KCC Institute of Technology & Management" />
                                        </span>
                                    </div><!-- /.testimonials-one__image -->
                                </div><!-- /.testimonials-one__top -->
                                <div class="testimonials-one__content">
                                    <h3 class="testimonials-one__name">Divya Mishra<br /><span>Placed with Religare Securities Ltd.</span></h3>
                                    <p class="testimonials-one__text">I am the student of Computer Science Engineering. Our department has well equipped labs and regular trainings/workshops are provided by the college. Well Maintained Infrastructure and accessible faculty and staffs develop a good learning environment.</p>
                                </div><!-- /.testimonials-one__content -->
                            </div><!-- /.testimonials-one__inner -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.testimonials-one__carousel owl-theme owl-carousel -->
            </div><!-- /.container-fluid -->
        </section><!-- /.testimonials-one -->
        <footer class="site-footer">
            <span class="site-footer__bubble site-footer__bubble-one"></span>
            <span class="site-footer__bubble site-footer__bubble-two"></span>
            <span class="site-footer__bubble site-footer__bubble-three"></span>
            <span class="site-footer__bubble site-footer__bubble-four"></span>
            <span class="site-footer__bubble site-footer__bubble-five"></span>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="">
                        <div class="row">
                            <div class="col-md-2"><img src="images/logo-1-1.png" class="main-logo" alt="NDIM-New Delhi Institute of Management" style="
    height: 88px;
    width: 153px;
" /></div>
                            <div class="col-md-10">
                                <p class="site-footer__copy"><b>Call Us +91 777-30-45555| Call Timings: 9:30 AM to 6:00 PM</b><br />
                                    ***GREATER NOIDA, UTTAR PRADESH | ** YEAR OF EST.-2002 |** ACCREDITED-NAAC
                                    APPROVED BY - AICTE
                                    .<br>*Terms & Condition</p>
                            </div>
                        </div>
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
        <div id="sideNavi" class="sideNavi" style="display: block;padding: 8px 26px;color: white!important; background-color: #b51212;">
            <a href="#" target="_blank" style="
    color: white;
">Statement of Purpose Form 2021-23</a>
        </div>
        <img src="" style="width:100%; height:auto;" />
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    <style>
        .sideNavi {
            position: fixed;
            top: 50%;
            right: -117px;
            z-index: 2;
            -moz-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);

            .sideNavi a {
                background-color: #c1500e;
                color: #FFF;
                cursor: pointer;
                font-size: 18px;
                padding: 8px 10px !important;
                border: 1px solid #FFF;
            }
    </style>
    <script type="text/javascript" src="../../../jaipuria.ac.in/admission/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../jaipuria.ac.in/admission/js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/theme.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Variables
            var clickedTab = $(".tabs > .active");
            var tabWrapper = $(".tab__content");
            var activeTab = tabWrapper.find(".active");
            var activeTabHeight = activeTab.outerHeight();
            // Show tab on page load
            activeTab.show();
            // Set height of wrapper on page load
            tabWrapper.height(activeTabHeight);
            $(".tabs > li").on("click", function() {
                // Remove class from active tab
                $(".tabs > li").removeClass("active");
                // Add class active to clicked tab
                $(this).addClass("active");
                // Update clickedTab variable
                clickedTab = $(".tabs .active");
                // fade out active tab
                activeTab.fadeOut(250, function() {
                    // Remove active class all tabs
                    $(".tab__content > li").removeClass("active");
                    // Get index of clicked tab
                    var clickedTabIndex = clickedTab.index();
                    // Add class active to corresponding tab
                    $(".tab__content > li").eq(clickedTabIndex).addClass("active");
                    // update new active tab
                    activeTab = $(".tab__content > .active");
                    // Update variable
                    activeTabHeight = activeTab.outerHeight();
                    // Animate height of wrapper to new tab height
                    tabWrapper.stop().delay(50).animate({
                        height: activeTabHeight
                    }, 500, function() {
                        // Fade in active tab
                        activeTab.delay(50).fadeIn(250);
                    });
                });
            });
        });
    </script>
</body>

</html>