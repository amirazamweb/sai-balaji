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
    <title>Online Application Form | Sai Balaji Group</title>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="js/jquery.js"></script>
    <script src="js/cities.js"></script>
    <link rel="icon" type="image/png" href="">
    <meta name="msapplication-TileColor" content="favicon/favicon.ico.png#ffffff">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/styleae24.css?v=14">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <link rel="stylesheet" type="text/css" href="css/custom3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
      .image-overly {
        background: #00000094;
        padding: 10px;
    }
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

      @media screen and (max-width: 768px) {
        img.img1 {
          width:100%
        }
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
                            <img src="images/sai-logo3.png" class="main-logo" alt="" style="width:320px"/>
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <!-- <ul class=" navigation-box one-page-scroll-menu ">
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
                        </ul> -->
                    </div><!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.header-one -->
<section class="banner-one" id="home">
  <div class="banner-one-col-1">
  <p>Empowering Leaders, Transforming Futures</p>
<p>SAIBALAJI GROUP OF INSTITUTES <br>( IIMS | SBIIMS | IIMHRD )</p>
  <div class="header-achievement">
      <div><img src="images/trophy.png" alt="trophy"></div>
      <p>6TH TOP PRIVATE MBA INSTITUTIONS, PUNE - <br>OUTLOOK, INDIA'S BEST B SCHOOL SURVEY - 2023</p>
  </div>
  <div class="header-achievement">
      <div><img src="images/trophy.png" alt="trophy"></div>
      <p>8TH TOP PRIVATE MBA INSTITUTIONS, MAHARASHTRA - <br>OUTLOOK, INDIA'S BEST B SCHOOL SURVEY - 2023</p>
  </div>

  <div class="header-highligter-container">
      <div class="header-highlighter-item">
          <div>28 LPA</div>
          <div>HIGHEST <br>PLACEMENT</div>
      </div>
      <div class="header-highlighter-item">
          <div>8.5 LPA</div>
          <div>AVERAGE <br>PLACEMENT</div>
      </div>
      <div class="header-highlighter-item">
          <div>300+</div>
          <div>TOP <br>RECRUITERS</div>
      </div>
  </div>

  </div>
  <div class="banner-one-col-2">
    <div class="enquiry_form" id="admission_form" style="z-index:0">
                               <div>
                                  <h5 style="
                                     text-align: center;font-weight:600;color:#000;
                                     ">Admissions Open 2024 Batch</h5>
                               </div>
                               <div class="content__wrapper my-auto">
                                  <p class="text-center text-danger"><?php echo $err; ?></p>
                                  <p class=" text-center text-success"><?php echo $ses; ?></p>
                                  <form method="post" action="register.php" id="verifyotp" style="">
                                     <div class="form-group">
                                        <input type="text" class="form-control" name="otp" id="" placeholder="Enter Your OTP">
                                        <button type="submit" name="verifyotp" class="btn btn-primary" style="
                                           width: 100%;background-color: #2F4E6A; border-color:#2F4E6A;">Verify OTP</button>
                                     </div>
                                  </form>
                               </div>
                            </div>
</div>
 </section>

 <br>

 <section>
     <div class="about-sai">
        <div class="about-sai-col-1">
             <div><img src="images/welcome-img.jpg" alt="welcome-img"></div>
        </div>
        <div class="about-sai-col-2">
         <div>WELCOME TO</div>
         <div>SAIBALAJI GROUP OF INSTITUTES</div>
         <hr>
         <div>
             <p>SAIBALAJI GROUP OF INSTITUTES, Pune, fosters academic
 brilliance and holistic development. A hub of innovation
 and learning, we empower students with quality
 education, cutting-edge facilities, and industry-relevant
 programs, preparing them for a dynamic future.</p>
         </div>
         <div class="about-sai-col-1-ranked">
             <div class="about-sai-col-1-ranked-item">
               <img src="images/welcome-ranked-1.jpg" alt="welcome-ranked-1">
             </div>
             <div class="about-sai-col-1-ranked-item">
               <img src="images/welcome-ranked-2.jpg" alt="welcome-ranked-2">
             </div>
             <div class="about-sai-col-1-ranked-item">
               <img src="images/welcome-ranked-3.jpg" alt="welcome-ranked-3">
             </div>
             <div class="about-sai-col-1-ranked-item">
               <img src="images/welcome-ranked-4.jpg" alt="welcome-ranked-4">
             </div>
             <div class="about-sai-col-1-ranked-item">
               <img src="images/welcome-ranked-5.jpg" alt="welcome-ranked-5">
             </div>
             <div class="about-sai-col-1-ranked-item">
               <img src="images/welcome-ranked-6.jpg" alt="welcome-ranked-6">
             </div>
         </div>
        </div>
     </div>
 </section>

 <br>

 <section>
     <div class="course-offered">
         <div class="course-offered-col-1">
           <div>Courses Offered by <br> SAIBALAJI Group OF INSTITUTES</div>
           <button data-bs-toggle="modal" data-bs-target="#registerModal">Download Brochure</button>
         </div>
         <div class="course-offered-col-2">
           <div>
             <img src="images/MBA-sai.jpg" alt="MB-sai">
             <ul>
                 <li>2Years Program</li>
                 <li>International Visit</li>
                 <li>Internship Available</li>
                 <li>50% Practical Exposure</li>
                 <li>20% Field work</li>
             </ul>
           </div>
           <div>
             <img src="images/PGDM-sai.jpg" alt="MB-sai">
             <ul>
                 <li>2Years Program</li>
                 <li>International Visit</li>
                 <li>Internship Available</li>
                 <li>50% Practical Exposure</li>
                 <li>20% Field work</li>
             </ul>
           </div>
         </div>
     </div>
 </section>

 <br>

 <section>
 <div class="placement">
 	<div class="placement__title">
 		<p>Placement Details</p>
 	</div>
 	<div class="placement-slider-wrapper">
 		<div class="placement-slider-container">
 			<div class="placement-slider">
 				<img src="images/placement1.jpeg" alt="placement1">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement2.jpeg" alt="placement2">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement3.jpeg" alt="placement3">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement4.jpeg" alt="placement4">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement5.jpeg" alt="placement5">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement6.jpeg" alt="placement6">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement7.jpeg" alt="placement7">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement8.jpeg" alt="placement8">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement1.jpeg" alt="placement1">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement2.jpeg" alt="placement2">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement3.jpeg" alt="placement3">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement4.jpeg" alt="placement4">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement5.jpeg" alt="placement5">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement6.jpeg" alt="placement6">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement7.jpeg" alt="placement7">
 			</div>
 			<div class="placement-slider">
 				<img src="images/placement8.jpeg" alt="placement8">
 			</div>
 		</div>
 	</div>
 </div>
 </section>

 <section class="brand-one" id="placement">
             <div class="container text-center">
                 <div class="pb-5">
                         <img src="images/placement.png"  class="img-fluid border" alt="Recruiters" />
                 </div>
             </div><!-- /.container -->
 </section><!-- /.brand-one -->

 <br>

 <section>
	<div class="testimonial">
		<div class="testimonials_title">
			<p>Student Testimonials</p>
		</div>
		<div class="testimonials_container-wrapper">
			<div class="testimonial_container">
				<div class="testimonial-item">
           <img src="images/Abhishek _Pandey.JPG" alt="testimonial-1">
					 <div class="testimonial_name">
					 	 <b>Mr. Abhishek Pandey</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	The PGDM program at Sai Balaji Group of Institutes exceeded my expectations. The faculty is top-notch, providing in-depth knowledge and real-world insights. The curriculum is well-structured, and the industry exposure through guest lectures and internships is invaluable. I feel well-prepared for the corporate world.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Mayur_Dahire.JPG" alt="testimonial-2">
					 <div class="testimonial_name">
					 	 <b>Mr. Mayur Dahire</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	Sai Balaji's PGDM program is a perfect blend of theory and practical application. The case-study based approach helped me develop critical thinking skills. The campus infrastructure is excellent, and the supportive environment fostered my overall growth. I highly recommend this institute for aspiring business leaders.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Shashank_Sangole.JPG" alt="testimonial-3">
					 <div class="testimonial_name">
					 	 <b>Mr. Shashank Sangole</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	Choosing Sai Balaji for my PGDM was a game-changer. The faculty members are not just teachers; they are mentors who guide you at every step. The emphasis on soft skills and personality development is commendable. The placement support is robust, ensuring a smooth transition from student life to a promising career.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Nazmin_Sayyed.JPG" alt="testimonial-4">
					 <div class="testimonial_name">
					 	 <b>Ms. Nazmin Sayyed</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	The PGDM program at Sai Balaji offers a holistic learning experience. The industry-oriented curriculum and the emphasis on practical skills make it stand out. The institute's tie-ups with leading companies open doors to excellent internship and placement opportunities. I'm grateful for the exposure and learning I received here.
					 </div>
           <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Priyanka_Agnihotri.JPG" alt="testimonial-5">
					 <div class="testimonial_name">
					 	 <b>Ms. Priyanka Agnihotri</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 Sai Balaji's PGDM program goes beyond textbooks. The emphasis on research projects and group activities enhances teamwork and problem-solving skills. The campus is vibrant, and the cultural events add a fun element to the rigorous academic schedule. Proud to be an alumnus of this institute.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/testimonial-6.jpg" alt="testimonial-6">
					 <div class="testimonial_name">
					 	 <b>Rajat Verma</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 Sai Balaji Group of Institutes provides a platform for holistic development. The faculty is approachable, and the interactive teaching methods make learning enjoyable. The guest lectures by industry experts were enlightening. The institute's commitment to grooming leaders reflects in every aspect of the PGDM program.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Abhishek _Pandey.JPG" alt="testimonial-1">
					 <div class="testimonial_name">
					 	 <b>Mr. Abhishek Pandey</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	The PGDM program at Sai Balaji Group of Institutes exceeded my expectations. The faculty is top-notch, providing in-depth knowledge and real-world insights. The curriculum is well-structured, and the industry exposure through guest lectures and internships is invaluable. I feel well-prepared for the corporate world.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Mayur_Dahire.JPG" alt="testimonial-2">
					 <div class="testimonial_name">
					 	 <b>Mr. Mayur Dahire</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	Sai Balaji's PGDM program is a perfect blend of theory and practical application. The case-study based approach helped me develop critical thinking skills. The campus infrastructure is excellent, and the supportive environment fostered my overall growth. I highly recommend this institute for aspiring business leaders.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Shashank_Sangole.JPG" alt="testimonial-3">
					 <div class="testimonial_name">
					 	 <b>Mr. Shashank Sangole</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	Choosing Sai Balaji for my PGDM was a game-changer. The faculty members are not just teachers; they are mentors who guide you at every step. The emphasis on soft skills and personality development is commendable. The placement support is robust, ensuring a smooth transition from student life to a promising career.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/Nazmin_Sayyed.JPG" alt="testimonial-4">
					 <div class="testimonial_name">
					 	 <b>Ms. Nazmin Sayyed</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 	The PGDM program at Sai Balaji offers a holistic learning experience. The industry-oriented curriculum and the emphasis on practical skills make it stand out. The institute's tie-ups with leading companies open doors to excellent internship and placement opportunities. I'm grateful for the exposure and learning I received here.
					 </div>
           <div class="right-side-quote">&#8221;</div>
				</div>
				<div class="testimonial-item">
           <img src="images/testimonial-6.jpg" alt="testimonial-6">
					 <div class="testimonial_name">
					 	 <b>Rajat Verma</b>
					 </div>
					 <div class="left-side-quote">&#x201C;</div>
					 <div class="">
					 Sai Balaji Group of Institutes provides a platform for holistic development. The faculty is approachable, and the interactive teaching methods make learning enjoyable. The guest lectures by industry experts were enlightening. The institute's commitment to grooming leaders reflects in every aspect of the PGDM program.
					 </div>
					 <div class="right-side-quote">&#8221;</div>
				</div>
			</div>
		</div>
		<div class="flat-off">
			<div>Get Flat 50% Off on Application Fee</div>
			<div><span class="conditional-hide">( Offer Valid for Limited Seats )</span> <button>Register Now</button> </div>
		</div>
		<div class="download__placement__btn__desktop">
			  <button data-bs-toggle="modal" data-bs-target="#registerModal">Download Placement Details</button>
		</div>
	</div>
</section>

 <!-- footer -->

 <footer>
   <div class="footer_link_container">
   	<ul>
   		<li> <a href="#"> <img src="images/sai-logo3.png" alt="sai-logo"> </a> </li>
 			<li> <button><a href="#"></a>Contact With Us <span><i class="fa-solid fa-arrow-right-long"></i></span> </button> </li>
   	</ul>
 		<ul>
 			<li> <span>Useful Links</span> </li>
 			<li> <a href="#">Marketplace</a> </li>
 			<li> <a href="#">Kindergarden</a> </li>
 			<li> <a href="#">University</a> </li>
 			<li> <a href="#">GYM Coaching</a> </li>
 			<li> <a href="#">FAQ</a> </li>
 		</ul>
 		<ul>
 			<li> <span>Our Company</span> </li>
 			<li> <a href="#">Contact Us</a> </li>
 			<li> <a href="#">Become Teacher</a> </li>
 			<li> <a href="#">Blog</a> </li>
 			<li> <a href="#">Instructor</a> </li>
 			<li> <a href="#">Events</a> </li>
 		</ul>
 		<ul>
 			<li> <span>Get Contact</span> </li>
 			<li> Phone: (406) 555-0120 </li>
 			<li> Email: rainbow@example.com </li>
 			<li> Location: North America, USA </li>
 			<li>
 				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
 				<a href="#"><i class="fa-brands fa-twitter"></i></a>
 				<a href="#"><i class="fa-brands fa-instagram"></i></a>
 				<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
 			</li>
 		</ul>
   </div>
 </footer>

 <!-- copyright -->

 <section>
 	<div class="copyright-container-wrapper">
 		<hr>
 		<div class="copyright-container">
 			<div> Copyright &#169; 2023 <span>Rainbow Themes.</span> All Right Reserved </div>
 			<div>
 				<span> <a href="#">Terms of Service</a> </span>
 				<span> <a href="#">Privacy policy</a> </span>
 				<span> <a href="#">Subscription</a> </span>
 				<span> <a href="#">Login & Register</a> </span>
 			</div>
 		</div>
 	</div>
 </section>

 <!-- mobile view download button -->

 <div class="mobile__view__download__btn">
 	   <button data-bs-toggle="modal" data-bs-target="#registerModal"><span><i class="fa-solid fa-download"></i></span> Download Brochure</button>
 		  <button data-bs-toggle="modal" data-bs-target="#registerModal"><span><i class="fa-solid fa-download"></i></span> Placement Details</button>
 </div>
   <!------------------------------------------------- Register Modal ------------------------------------------>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row bg-white" style="" id="admissionForm">
                        <form class="" action="register.php" method="post" name="" id="">
                            <div class="col float-right">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <center><img src="images/sai-logo3.png" alt="logo" style="height: 70px;">
                            </center>
                            <div class=" hero-form-content">
                                <h5 class="text-center mx-2">Admissions Open 2024 Batch</h5>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-2">
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Id">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="phone_no" class="form-control" id="exampleFormControlInput1" placeholder="Enter Mobile No.">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="Enter City">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="state" class="form-control" id="exampleFormControlInput1" placeholder="Enter State">
                            </div>

                            <div class="mb-2">
																 <select class="form-control" name="course" id="coursename">
																		 <option value="">Select College</option>
																		 <option value="SBIIM">SBIIM</option>
																		 <option value="IIMS">IIMS</option>
																		 <option value="IIMHRD">IIMHRD</option>
																</select>
														</div>

                            <div class="mb-2">
                                <select class="form-control" name="course" id="coursename">
                                  <option value="">Select Course</option>
                                  <option value="SBIIM">SBIIM</option>
																		 <option value="IIMS">IIMS</option>
																		 <option value="IIMHRD">IIMHRD</option>
                              </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn fs-5" style="background-color: #5990A2; color: #FFFF">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------- /Register Modal ------------------------------------------>
<!--          <a href="https://api.whatsapp.com/send?phone=+919131606568&text=I%20want%20to%20know%20more%20about%20Sam%20Global%20University%20Bhopal" class="float" target="_blank">-->
<!--<i class="fa fa-whatsapp my-float"></i>-->
<!--</a>-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>

    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:17px;
	left:22px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
        <div id="sideNavi" class="sideNavi d-none" style="display: block;padding: 8px 26px;color: white!important; background-color: #b51212;">
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
<script>
$(document).ready(function(){
  //when modal opens
$('#registerModal').on('shown.bs.modal', function (e) {
  $("#pageContent").css({ opacity: 0.5 });
})

//when modal closes
$('#registerModal').on('hidden.bs.modal', function (e) {
  $("#pageContent").css({ opacity: 1 });
})
});
</script>
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
