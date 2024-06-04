<?php
session_start();


if (isset($_SESSION['nic'])) {

    $cusID = $_SESSION['nic'];

} else {

    header("Location: Sign in3.html");
    exit();
}

//echo "<p> $cusID </p>";
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


    <style>
           table {
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}

h1 {
    color: #337ab7; /* Bootstrap's primary color */
}

a {
    color: #333;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

hr {
            border: 1px solid black;
            margin: 20px 0; /* Adjust the margin as needed */
        }

            
    </style>




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
                    <a href="#go-home" class="nav-item nav-link ">Home</a>
                    <a href="#go-about" class="nav-item nav-link">About</a>
                    <a href="#go-pricing" class="nav-item nav-link">Orders</a>
                    <a href="#go-contact" class="nav-item nav-link">location </a>
                    <a href="register_update_user.php" class="nav-item nav-link">settings</a>


                        <div class="nav-item dropdown">
                            <a href="index.html" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
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
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">- grocery shop -</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Market Fresh </h1>
                                <a href="Sign in.html" class="btn btn-primary py-3 px-5 animated slideInDown">Sign In / Sign Up<i class="fa fa-arrow-right ms-3"></i></a>
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
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">- grocery shop-</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Market Fresh</h1>
                                <a href="Sign in.html" class="btn btn-primary py-3 px-5 animated slideInDown">Sign In / Sign Up<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated wow zoomIn" data-wow-delay="0.2s">
                                <img class="img-fluid" src="img/car3.png" alt="Front Car 3">
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
                    <h1 class="mb-4"><span class="text-primary">Market Fresh</span> Is The Best Place For Your grocery shop</h1>
                    <p class="mb-4"> 
                        At Market Fresh we strive to provide the best levels of service to all our 
                        customers ensuring they enjoy a safe and pleasant
                         shoping experience. We offer an extensive range of shoping  services for life of
                          all makes and models all under one roof.

                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Fresh & Quality</h6>
                                    <span>This category emphasizes the grocery store's dedication to providing fresh, high-quality products sourced from reputable suppliers. It includes fresh produce, meats, dairy, and bakery items known for their freshness and superior quality. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Selection & Variety</h6>
                                    <span>This category highlights the extensive range of products available at the grocery store, catering to diverse tastes, preferences, and dietary requirements. It encompasses fruits, vegetables, pantry staples, international foods, and specialty items, offering customers ample choices during their shopping experience.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Health-conscious</h6>
                                    <span>This category emphasizes the grocery store's commitment to promoting health and wellness by offering nutritious, wholesome food options. It includes organic produce, gluten-free products, natural snacks, vegan and vegetarian options, and other healthier alternatives, supporting customers in making informed, health-conscious decisions while shopping.</span>
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


    <!-- orders -->
    <div class="main" id="go-pricing">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">- Orders -</h1>
            </div>          
        </div>





        <?php
$conn = new mysqli('localhost', 'root', '', 'reg');
if ($conn->connect_error) {
    die('Not Connected..');
} else {

   // $rawValue = $NIC; // Replace this with the actual value you are comparing

    $sql = "SELECT * FROM orders";
    $data = $conn->query($sql);
    
    // Move the table and header row outside of the loop
    echo "<table>
            <tr>
                <th>OrdeId </th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>stetus</th>
                <th>Actions</th>
            </tr>";
            
    while ($raw = mysqli_fetch_array($data)) {
        if (($raw[1] == $cusID) && (($raw[4] == 'Order Processing') OR ($raw[4] == 'Pending Order') OR ($raw[4] == 'Receiv completed Confirm order')) ) { 
            echo "<tr>
                    <td>" . $raw[0] . "</td>
                    <td>" . $raw[2] . "</td>
                    <td>" . $raw[3] . "</td>
                    <td>" . $raw[4] . "</td>
                    <td>
                        <a href='confirm_order_&_customer_feedback.php?id=" . $raw[0] . "'><b>| Confirm Order |</b></a>
                        <a href='delete_orders.php?id=" . $raw[0] . "'><b>| Delete order |</b></a>
                    </td>
                </tr>";
       }
    }


    // Close the table outside of the loop
    echo "</table>";



   // echo "<a href='New_order_insert.php'><h4><b><right>| NEW ORDER |</right></b></h4></a>";

    $conn->close();
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date and Time Form</title>
    <script>
        window.onload = function() {
            // Get current date and time
            var currentDate = new Date();
            
            // Format date as YYYY-MM-DD
            var year = currentDate.getFullYear();
            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
            var day = ('0' + currentDate.getDate()).slice(-2);
            var formattedDate = year + '-' + month + '-' + day;
            
            // Format time as HH:MM:SS
            var hours = ('0' + currentDate.getHours()).slice(-2);
            var minutes = ('0' + currentDate.getMinutes()).slice(-2);
            var seconds = ('0' + currentDate.getSeconds()).slice(-2);
            var formattedTime = hours + ':' + minutes + ':' + seconds;
            
            // Set values to date and time inputs
            document.getElementById('dateInput').value = formattedDate;
            document.getElementById('timeInput').value = formattedTime;
        };
    </script>
</head>
<body>
  
    <form action="create_new_order.php" method="post">
        <div>
            
              <input type="hidden" id="dateInput" name="dateInput" >
        </div>
       
        <div>
            <input type="submit" value="NEW ORDER">
        </div>
    </form>
</body>
</html>




    </div>
    <!-- Orders-->




    
      <!-- LOCATION  Start -->
      <div class="main" id="go-contact">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">- location -</h6>
 
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.690303517259!2d80.22145247578415!3d6.037167728622127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173b12f4deb15%3A0x31ccbc33eb91d2ac!2sNIBM%20Galle%20Centre!5e0!3m2!1sen!2slk!4v1687097033392!5m2!1sen!2slk" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
            </div>
        </div>
    </div>
    <!-- LOCATION  End -->



       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-0">
            <div class="row g-2">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Market Fresh, Galle, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9476 771 1597</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>marketfresh@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">24 HOURES</h6>
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
                        Designed By <a class="border-bottom" href="index.html">Market Fresh</a>
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
    <script src="js/main.js"></script>
</body>

</html>