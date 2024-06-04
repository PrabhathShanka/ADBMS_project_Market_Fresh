<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Market Fresh</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

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


    <link rel="stylesheet" href="css/dashboard button.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


    <style>
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table tr{background-color: #f2f2f2;}
            
            #table tr:hover {background-color: #ddd;}
            
            #table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #cd0606;
                color: white;
            }
            .heading{
                    color: rgb(13, 0, 114);
                    font-size:100%;
                    }
            .heading:hover {
                    color: rgb(255, 255, 255);
                    font-size:110%;
                    }

            .sidebar0{
                    display:flex;
            }

            .sidebar1{
                    width:10%;
            }

            .sidebar2{
                    width:90%;
            }


            .box4 {
                width: 150%;
                height: 150%;
                
            }

            
    </style>
</head>

<body>

<div class="main" id="go-home"></div>

<!-- Spinner Start 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
 Spinner End -->


 
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
                    <a href="admin_dash.php?msg=Messages+" class="nav-item nav-link ">Pending Appoinment</a>
                    <a href="admin_dash.php?record=serviseRecord" class="nav-item nav-link">Service Record</a>
                    <a href="admin_dash.php?app=Appoinment" class="nav-item nav-link">Vehicle Details</a>
                    <a href="admin_dash.php?vri=+Register+Info" class="nav-item nav-link">Register Details</a>
                    <a href="admin_dash.php?dashb=+Dashboard" class="nav-item nav-link">service managed  </a>
                    




                        <div class="nav-item dropdown">
                            <a href="index.html" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
                        </div>
                </div>


        </div>


                


                
        
    </nav>
 











                                                  <?php
// Setting

    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    else{
        ?>
        <br>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <h1>Admin Details</h1>
        </div> <br>
        <?php
        $sql = "SELECT * FROM admindetails";
        $data = $conn->query($sql);
        echo "<table border='1px' id='table'> <tr><th>User Name</th><th>Password</th><th>Actions</th></tr>";
        while($raw = mysqli_fetch_array($data)){
            echo "<tr><td>".$raw[1]."</td><td>".$raw[2]."</td><td>
            
          
            <a href='admin_delete.php?id=".$raw[0]."'><b>| Delete |</b></a>" ;
            
        }
        echo "</table>";
        echo  "<a href='admin_insert.php'><h3><b><right>| Add new Admin |</right></b></h3></a></td></tr>" ;
        $conn->close();
        
    }

?>




                                                  <!-- setting end -->

                                                  

    </div>

</div>









    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-1 mt-0 wow fadeIn position-fixed bottom-0" data-wow-delay="0.2s">
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


    <script src="js/dashboard button.js"></script>
    
</body>

</html>