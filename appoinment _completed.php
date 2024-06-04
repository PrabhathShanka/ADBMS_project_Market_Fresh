
<?php

if (isset($_GET['id'])) {
    

    $appoimentID	 = $_GET['id'];
    
  
}


if(isset($_POST["submit"])) {

   // echo "appoimentID is : . $appoimentID";



$totalPrice = $_POST['model'];
$description = $_POST['request'];
$r1=$_POST['1'];$r2=$_POST['2'];$r3=$_POST['3'];$r4=$_POST['4'];$r5=$_POST['5'];$r6=$_POST['6'];$r7=$_POST['7'];$r8=$_POST['8'];$r9=$_POST['9'];$r10=$_POST['10'];$r11=$_POST['11'];$r12=$_POST['12'];$r13=$_POST['13'];





$servername = "localhost";
$username = "root";
$password = "";
$database = "reg";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("error:" . mysqli_connect_error());
} else {

    $sql = "UPDATE `appoinment` SET `description`='$r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$r12,$r13,$description', `totalPrice`='$totalPrice', `status`='completed' WHERE `appoimentID`=$appoimentID";

    // Debugging: Output the SQL query
    echo "Debug: SQL query: $sql<br>";

    if ($con->query($sql)) {
        echo "Appointment updated successfully..";
        header("Location: admin_dash.php?msg=Messages+");
        exit();
    } else {
        echo "Something went wrong: " . $con->error;
    }

    $con->close();
}


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


    <style>
 
 label.checkbox-label {
        display: flex;
        align-items: center;
        color: white;
    }

    label.checkbox-label input {
        margin-right: 5px;
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
            <h2 class="m-0 text-primary"> <!--i class="fa fa-car me-3"--> </i>GPSI PREMIUM</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#go-home" class="nav-item nav-link "></a>
                    <a href="#go-about" class="nav-item nav-link"></a>
                    <a href="#go-services" class="nav-item nav-link"></a>
                    <a href="#go-pricing" class="nav-item nav-link"></a>
                    <a href="#go-booking" class="nav-item nav-link active"></a>
                    <a href="#go-contact" class="nav-item nav-link"></a>


                        <div class="nav-item dropdown">
                            <a href="index-AfterLogin.php" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Home</a>
                        </div>
                </div>


        </div>
      
        
    </nav>
    <!-- Navbar End -->


     <!-- Booking Start -->
     <div class="main" id="go-booking">
            <h1 class="text-white mb-0"> . </h1>
            <h1 class="text-white mb-0"> . </h1>
        </div>

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">- Completed Appoinment -</h1>
        </div>

        <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-3 py-10">
                        
                    </div>
                <div class="col-lg-6">   <!--dikkaranna-->
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Appoinment Detail</h1>  
                              
                               <br>
                            <form action = "#" method="POST" id ="form1">
                                
                                <div class="row g-3">
                                        

                                <label class="checkbox-label">
                                Body wash :- 
                                    <input type="checkbox" id="Body wash" name="1" value="Body wash">
                                 </label>

                                 <label class="checkbox-label">
                                 Interior wash   :- 
                                    <input type="checkbox" id=" Interior wash " name="2" value=" Interior wash ">
                                 </label>

                                 <label class="checkbox-label">
                                 Engine oil  :- 
                                    <input type="checkbox" id=" Engine oil" name="3" value=" Engine oil">
                                 </label>

                                 <label class="checkbox-label">
                                 Gia box oil  :- 
                                    <input type="checkbox" id=" Gia box oil" name="4" value=" Gia box oil">
                                 </label>

                                 <label class="checkbox-label">
                                 Power steering oil  :- 
                                    <input type="checkbox" id=" Power steering oil" name="5" value=" Power steering oil">
                                 </label>

                                 <label class="checkbox-label">
                                 Brake oil  :- 
                                    <input type="checkbox" id=" Brake oil" name="6" value=" Brake oil">
                                 </label>

                                 <label class="checkbox-label">
                                 AC filter   :- 
                                    <input type="checkbox" id=" AC filter " name="7" value=" AC filter ">
                                 </label>

                                 <label class="checkbox-label">
                                 Air filter  :- 
                                    <input type="checkbox" id=" Air filter" name="8" value=" Air filter">
                                 </label>

                                 <label class="checkbox-label">
                                 Battery water   :- 
                                    <input type="checkbox" id=" Battery water " name="9" value=" Battery water ">
                                 </label>

                                 <label class="checkbox-label">
                                 Wiper liquid  :- 
                                    <input type="checkbox" id=" Wiper liquid" name="10" value=" Wiper liquid">
                                 </label>

                                 <label class="checkbox-label">
                                 Radiator coolant  :- 
                                    <input type="checkbox" id=" Radiator coolant" name="11" value=" Radiator coolant">
                                 </label>

                                 <label class="checkbox-label">
                                 Engine tune-up  :- 
                                    <input type="checkbox" id=" Engine tune-up" name="12" value=" Engine tune-up">
                                 </label>

                                <label class="checkbox-label">
                                Wheel Alignment :-
                                     <input type="checkbox" id="alignment" name="13" value="Wheel Alignment">
                                </label>

                                        <div class="col-12">
                                            <textarea class="form-control border-0"  name="request" placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-12 col-sm-6">  
                                            <input type="text" name = "model"  class="form-control border-0" placeholder="Totale Price" style="height: 55px;"required>  
                                        </div>

            


                                    
                                        <div class="col-12">
                                            <!-- Helicopter<input type="submit" value="Register" class="btn btn-primary w-100 py-3  spinner-border"> </input>  -->
                                            <input type="submit" name="submit" value="SUBMIT" class="btn btn-secondary w-100 py-3"> </input>
                                        </div>
                                </div>
                            </form>
                                
                        
                            
                                <br>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Booking End -->
             


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