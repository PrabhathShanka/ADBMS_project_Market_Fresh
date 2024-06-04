<?php


    $first = $_POST['firstName'];
    $addre = $_POST['address'];
    $num = $_POST['number'];
    $em = $_POST['email'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
 


  $servername = "localhost";
  $username = "root";
  $password = "";
  $database ="reg";
  
  $con = mysqli_connect($servername,$username,$password,$database);

  if (!$con)
  {
      die("error:".mysqli_connect_error());
  }
  if($password1 == $password2) {
$sql = "INSERT INTO `customer`(`CusName`,`CusAddress`,  `CusTeleNo`, `CusEmail`,  `pass1`) VALUES ('$first','$addre','$num','$em','$password1')";

        if(mysqli_query($con,$sql))
                {     
                echo "registration successfully";
                header("Location: Sign in.html");
                exit();
                }
        else
            {
                echo"Somthing went wrong";
              
            }
          }
        
else{
        echo "Passwords not matched";
  }

 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Market Fresh</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div class="main" id="go-home"></div>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"> <!--i class="fa fa-car me-3"--> </i>Market Fresh</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#go-home" class="nav-item nav-link active">Home</a>
                <a href="#go-about" class="nav-item nav-link">About</a>
                <a href="#go-services" class="nav-item nav-link">Services</a>
                <a href="#go-pricing" class="nav-item nav-link">Pricing</a>
                <a href="#go-contact" class="nav-item nav-link">Contact</a>
            </div>

                    <div class="nav-item dropdown">
                        <a href="Sign in.html" class="nav-link dropdown-toggle btn btn-primary py-4 px-lg-5 d-none d-lg-block">Sign in </a>
                            <div class="dropdown-menu fade-up m-0">
                                <a href="Sign in.html" class="dropdown-item">Sign in</a>
                                <a href="Register.html" class="dropdown-item">Register</a>
                                <a href="" class="dropdown-item"></a>
                                <!--<a href="adminlogin.html" class="dropdown-item">Admin Login</a>-->
                            </div>
                    </div>

        </div>
    </nav>
    <!-- Navbar End -->


 <!-- Home Front Start -->
 <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image 1">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">- Car Servicing -</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">GPSI Premium Car <br> Service Center</h1>
                                <a href="Sign in.html" class="btn btn-primary py-3 px-5 animated slideInDown">Make an Appoinment<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated wow zoomIn" data-wow-delay="0.2s">
                                <img class="img-fluid" src="img/car1.png" alt="Front Car 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">- Car Servicing -</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">GPSI Premium Car <br> Service Center</h1>
                                <a href="Sign in.html" class="btn btn-primary py-3 px-5 animated slideInDown">Sign In / Sign Up<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated wow zoomIn" data-wow-delay="0.2s">
                                <img class="img-fluid" src="img/car3.png" alt="Front Car 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Front Side Button Start-->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        <!-- Front Side Button End-->
        </div>
    </div>
    <!-- Home Front End -->


    <!-- Service Start -->
    <div class="main" id="go-services">
        <h1 class="text-white mb-0"> . </h1>
        <h1 class="text-white mb-0"> . </h1>
    </div>
    
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5">- Our Services -</h1>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                       <img src="img/Tyre Service.svg" alt="Service1" width="18%" height="18%">    <!-- Icon -->
                        <div class="ps-4">
                            <br>
                            <h5 class="mb-3">Tyre Service</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <img src="img/Engine Service.svg" alt="Service2" width="18%" height="18%">    <!-- Icon -->
                        <div class="ps-4">
                            <br>
                            <h5 class="mb-3">Engine Service</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <img src="img/Tuning Service.svg" alt="Service3" width="18%" height="18%">    <!-- Icon -->
                        <div class="ps-4">
                            <br>
                            <h5 class="mb-3">Tuning Service</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="d-flex bg-light py-5 px-4">
                        <img src="img/Motor Service.svg" alt="Service4" width="18%" height="18%">    <!-- Icon -->
                        <div class="ps-4">
                            <br>
                            <h5 class="mb-3">Motor Service</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="d-flex py-5 px-4">
                        <img src="img/System Service.svg" alt="Service5" width="18%" height="18%">    <!-- Icon -->
                        <div class="ps-4">
                            <br>
                            <h5 class="mb-3">System Service</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="d-flex bg-light py-5 px-4">
                        <img src="img/Washing Service.svg" alt="Service6" width="18%" height="18%">    <!-- Icon -->
                        <div class="ps-4">
                            <br>
                            <h5 class="mb-3">Washing Service</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- About Start -->
    <div class="main" id="go-about">
        <h1 class="text-white mb-0"> . </h1>
        <h1 class="text-white mb-0"> . </h1>
    </div>

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5">- About Us -</h1>
    </div>

    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.2s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">20 <span class="fs-4">Years +</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4"><span class="text-primary">GPSI PREMIUM</span> Is The Best Place For Your Auto Care</h1>
                    <p class="mb-4"> 
                        At GPSI Premium we strive to provide the best levels of service to 
                        all our customers ensuring they enjoy a safe and pleasant driving experience.
                        We offer an extensive range of car repair services for cars of all makes and models all under one roof.

                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Our team is certified professionals. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>You can trust our center.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span>The workers have many awards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">4</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">6824</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15783</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Our Packages Start -->
    <div class="main" id="go-pricing">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">- Our Packages -</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-battery fa-2x me-3"></i>
                            <h4 class="m-0">Basic Package</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Standard Package</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Premium Package</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Custom Package</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">GPSI - Basic Package</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Car Washing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Battery Checking</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tires Replacement</p>
                                        <div class="col-md-4">
                                            <p class="btn-primary py-3 px-4">Rs.4000.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">GPSI - Standard Package</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Car Washing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Battery Checking</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tires Replacement</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Oil Changing</p>
                                        <div class="col-md-4">
                                            <p class="btn-primary py-3 px-4">Rs.10000.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">GPSI - Premium Package</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Car Washing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Oil Changing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tires Replacement</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Engine Service</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tuning Test</p>
                                    <p><i class="fa fa-check text-success me-3"></i>System Service</p>
                                        <div class="col-md-4">
                                            <p class="btn-primary py-3 px-4">Rs.20000.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">GPSI - Custom Package</h3>
                                    <p class="mb-4">Contact us for any service you need and place a custom order</p>
                                    <a href="#go-contact" class="btn btn-primary py-3 px-5 mt-3">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Packages End -->


    <!-- Booking Start -->
    <div class="main" id="go-booking">
        <h1 class="text-white mb-0"> . </h1>
        <h1 class="text-white mb-0"> . </h1>
    </div>

    
             
           





    <!-- Feedback Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">- Feedback -</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/feedbak1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jagath Mendis</h5>
                    <p>Chief Manager (Vallibel Finance PLC)</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">They Provided an Excellent service for my BMW car, as a team. 
                                    The staff is very friendly and I am highly satisfied with their service. Thank you, 
                                    team Sterling.
                    </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/feedbak2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sahan Madusanka</h5>
                    <p>CEO at Interior Architect</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Got the battery of my car Replaced at GPSI Premium Car Servise Center. 
                        Thank you for the fast and friendly service. A reliable place that can be 
                        recommended to anyone.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/feedbak4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Chathuni Nikesha</h5>
                    <p>Executive Officer (BOC)</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I recommend GPSI Premium to anyone for their services. They Pay attention to every detail of the car
                        and you can get any service from here. I managed toget my vehicle service done after visting and speaking to them.
                        even though I made a short notice. that is great customer service for me. considering my busy shedule.
                    </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/feedbak3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Shanaka Silva</h5>
                    <p>Founder at MAD Factory</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Best after care for my Honda Civic Type R. I had some performance issues and these guys did a great job.
                        Also have to mention their interior and exterior and exterior cleaning. Superb job! You guys highly  recommended.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feedback End -->


    <!-- Contact Start -->
    <div class="main" id="go-contact">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">- Contact Us -</h6>
                <h1 class="mb-5">- Contact For Any Query -</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2682.48498885404!2d80.04170250974035!3d6.8227842187858645!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25270fc43835f%3A0xc04ff76f967f5c28!2sFaculty%20of%20Technology%2C%20University%20of%20Sri%20Jayewardenepura!5e0!3m2!1sen!2sin!4v1664995712481!5m2!1sen!2sin%22%20width=%22600%22%20height=%22450%22%20style=%22border:0;%22%20allowfullscreen=%22%22%20loading=%22lazy%22%20referrerpolicy=%22no-referrer-when-downgrade"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="message.php" method="GET">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject"class="form-control" id="subject" placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 140px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit" >Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-0">
            <div class="row g-2">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>GPSI Premium, Homagama, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9476 771 1597</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>gpsipremium@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">08.00 AM - 06.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">08.00 AM - 09.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <ul><li><a>Tyre Replacement</a> </li>
                        <li><a>Engine Service</a> </li>
                        <li><a>Tuning Service </a> </li>
                        <li><a>System Service</a> </li>
                        <li> <a>Washing Service</a> </li> </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Informations</h4>
                    <a class="btn btn-link" href="Terms and Conditions.html">Terms and Conditions</a>
                    <a class="btn btn-link" href="FAQ.html">FAQ</a>
                    <a class="btn btn-link" href="Privacy.html">Privacy</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center mb-3 mb-md-0">
                        &copy; All Right Reserved.
                        Designed By <a class="border-bottom" href="index.html">GPSI Premium</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js">
    </script>

</body>

</html>
    

