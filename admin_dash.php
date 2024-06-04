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
                    <a href="?msg=Messages+" class="nav-item nav-link ">Verify Processing Orders</a>
                    <a href="?record=serviseRecord" class="nav-item nav-link">Pending Orders</a>
                    <a href="?app=Appoinment" class="nav-item nav-link">Customer Reviews</a>
                    <a href="?vri=+Register+Info" class="nav-item nav-link">Costomer  Details</a>
                    <a href="?dashb=+Dashboard" class="nav-item nav-link">Product managed  </a>
                    <a href="admin_setting.php" class="nav-item nav-link">settings</a>



                        <!-- <div class="nav-item dropdown">
                            <div class="testimonial-item text-center">
                                <img class="bg-light rounded-circle p-2 mx-auto mb-10" src="img/feedbak4.jpg" style="width: 70px; height: 70px;">
                            </div> 
                            <div class="dropdown-menu fade-up m-0">
                                <a href="index.html" class="dropdown-item">Log Out </a>
                            </div>
                        </div> -->

                        <div class="nav-item dropdown">
                            <a href="index.html" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
                        </div>
                </div>


        </div>


                
                <!--<div class="nav-item dropdown">
                    <img  src="img/profile.png" alt="Image 1" width="50" height="50">  class="bg-light rounded-circle p-2 mx-auto mb-3"
                    <div class="dropdown-menu fade-up m-0">
                        <a href="index.html" class="dropdown-item">Log Out </a>
                    </div>
                </div>-->

                
        
    </nav>
    <!-- Navbar End -->









<div class="sidebar0">



    <div class="sidebar1">
                            
                            <div class="sidebar">
                                        
                                    <div class="logo-details">
                                        
                                            
                                            
                                    </div>
                                        <!--<ul class="nav-list"> -->
                                                    <li>
                                                        <br>
                                                        <div class="logo-details">
                                                            <div class="logo_name">Admin Panel</div>
                                                            <i class='bx bx-menu' id="btn" ></i>
                                                        </div>
                                                    </li>
                                                    
        
                                                    <li>
                                                    <a href='?msg=Messages+'>
                                                        <i class='bx bx-chat' ></i>
                                                        <span class="links_name">Messages</span>
                                                    </a>
                                                    <span class="tooltip">Verify Processing Orders</span>
                                                    </li>



                                                    
        
                                                   

                                                    <li><a href='?record=serviseRecord'>
                                                        <i class='bx bx-search' ></i>
                                                        <input type="text" placeholder="Search...">
                                                        <span class="tooltip">Pending Orders </span>
                                                    </li>


                                                    <li>
                                                    <a href='?app=Appoinment'>
                                                        <i class='bx bx-pie-chart-alt-2' ></i>
                                                        <span class="links_name">Appoinment</span>
                                                    </a>
                                                    <span class="tooltip">Customer Reviews</span>
                                                    </li>
                                  
                                             
                                                    <li>
                                                    <a href='?vri=+Register+Info'>
                                                        <i class='bx bx-user' ></i>
                                                        <span class="links_name">Register Details</span>
                                                    </a>
                                                    <span class="tooltip">Costomer Details</span>
                                                    </li>


                                                    <li>
                                                        <a href="?dashb=+Dashboard">
                                                        <i class='bx bx-grid-alt'></i>
                                                        <span class="links_name">Dashboard</span>
                                                        </a>
                                                        <span class="tooltip">Product  managed</span>
                                                    </li>
                                                    
                                                    <li class="profile">
                                                    <a href="index.html">
                                                        <div class="profile-details">
                                                                    <div class="lout">  &nbsp;&nbsp;&nbsp;&nbsp;Log Out</div>      
                                                        </div>
                                                        <i class='bx bx-log-out' id="log_out" >&nbsp;&nbsp;</i>
                                                    </a>
                                                    </li>
                                        <!--</ul>-->
                            </div>
        
    </div>

    <div class="sidebar2">

                      
     
<?php

    //Verify Processing ordes start

    if(isset($_GET['msg'])){
        $conn= new mysqli('localhost','root','','reg');
        if($conn->connect_error){
            die('Not Connected..');
        }
        // Pending orders start
        echo "<br><h1>Verify Processing Orders</h1><br>";
        $rawValue = 'Order Processing';

            $sql = "SELECT c.CusName, c.CusAddress, c.CusTeleNo, o.OrderDate, o.TotalAmount, o.OrdeId, o.stetus
                    FROM customer c
                    INNER JOIN orders o ON c.CusId = o.CusId";


            $result = $conn->query($sql);
        
            
            if ($result) {
                echo "<table border='1px' id='table' align='right'>";
                echo "<tr><th>Custemer Name</th><th>Customer Address</th><th>Customer Telephone Number</th><th>Order Date</th><th>Order Total Amount</th><th>Actions</th></tr>";
                while ($raw = $result->fetch_assoc()) {
                    if ($raw['stetus'] == $rawValue) {
                        echo "<tr>";
                        echo "<td>" . $raw['CusName'] . "</td>";
                        echo "<td>" . $raw['CusAddress'] . "</td>";
                        echo "<td>" . $raw['CusTeleNo'] . "</td>";
                        echo "<td>" . $raw['OrderDate'] . "</td>";
                        echo "<td>" . $raw['TotalAmount'] . "</td>";
                        echo "<td><a href='Verify_Processing_ordes.php?id=" . $raw['OrdeId'] . "'><b>| Verify Order |</b></a></td>";
                        echo "</tr>";
                    }
                }
                echo "</table>";
            $conn->close();
        
    
}
}
//Verify Processing end



   //Pending Orders Details record

   if(isset($_GET['record'])){
    $conn= new mysqli('localhost','root','','reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    // Pending orders start
    echo "<br><h1>Pending Orders Details</h1><br>";
    $rawValue = 'Pending Order';

        $sql = "SELECT c.CusName, c.CusAddress, c.CusTeleNo, o.OrderDate, o.TotalAmount, o.OrdeId, o.stetus
                FROM customer c
                INNER JOIN orders o ON c.CusId = o.CusId";


        $result = $conn->query($sql);
    
        
        if ($result) {
            echo "<table border='1px' id='table' align='right'>";
            echo "<tr><th>Custemer Name</th><th>Customer Address</th><th>Customer Telephone Number</th><th>Order Total Amount</th><th>Actions</th></tr>";
            while ($raw = $result->fetch_assoc()) {
                if ($raw['stetus'] == $rawValue) {
                    echo "<tr>";
                    echo "<td>" . $raw['CusName'] . "</td>";
                    echo "<td>" . $raw['CusAddress'] . "</td>";
                    echo "<td>" . $raw['CusTeleNo'] . "</td>";
                    echo "<td>" . $raw['TotalAmount'] . "</td>";
                    echo "<td><a href='Pending_orders_completed.php?id=" . $raw['OrdeId'] . "'><b>| Confirm Order |</b></a></td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        $conn->close();
    

}


}

//end Pending Orders Details


    //Customer Reviews start
if(isset($_GET['app'])){
    ?>

    <?php
    
    // Manager Class
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
    // Query Class (removed the query condition)
    $query = new MongoDB\Driver\Query([]);
    
    // Output of the executeQuery will be object of MongoDB\Driver\Cursor class
    $cursor = $manager->executeQuery('NIBM.customersDetails', $query); // Assuming 'NIBM' is the database and 'customers' is the collection
    
    // Convert cursor to Array
    $documents = $cursor->toArray();
    
    
    ?>
    
    
    <h1>Customer Reviews</h1> <br> 
    
    <table border='1px' id='table' align='right'>
        <thead>
            <tr>
            <th>Customer ID</th>
                <th>Name</th>
                <th>Telephone Number</th>
                
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Totale Amount</th>
    
                <th>Payment Date</th>
                <th>Coustemer Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($documents as $document): ?>
                <tr>
                <td><?php echo $document->CustomerID; ?></td>
                    <td><?php echo $document->name; ?></td>
                    <td><?php echo $document->telephoneNumber; ?></td>
    
                    <td><?php echo $document->orderID; ?></td>
                    <td><?php echo $document->orderDate; ?></td>
                    <td><?php echo $document->TotaleAmount; ?></td>
    
                    <td><?php echo $document->paymentDate; ?></td>
                    <td><?php echo $document->coustemerFeedback; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    }
    
                                                //Customer Reviews end



                                            


                                             




?>
 
<?php
// Costomer Display
if(isset($_GET['vri'])){
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    else{
        ?>
        <br>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <h1>Costomer Details</h1>
        </div> <br>
        <?php
        $sql = "SELECT * FROM customer";
        $data = $conn->query($sql);
        echo "<table border='1px' id='table'> <tr><th>Costomer ID</th><th>Costomer Name</th><th>Costomer Address</th><th>Telephone Number</th><th>Costomer Email</th><th>Costmer Password</th><th>Actions</th></tr>";
        while($raw = mysqli_fetch_array($data)){
            echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[3]."</td><td>".$raw[4]."</td><td>".$raw[5]."</td><td>
            <a href='register_update_admin.php?id=".$raw[0]."'><b>| Update |</b></a>
            <a href='register_delete.php?id=".$raw[0]."'><b>| Delete |</b></a></td></tr>";
        }
        echo "</table>";
        $conn->close();
    }
}
?>




                                                  <!-- Reg end -->


                                                  <?php
// Product managed

if(isset($_GET['dashb'])){
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    else{
        ?>
        <br>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <h1>Product Managed</h1>
        </div> <br>
        <?php
        ?>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add Service</title>
        </head>
        <body>
            <h4>Insert Product</h4>
            <form action="Product _managed_insert.php" method="post">
                <label for="serviceName">Product Name:</label>
                <input type="text" id="serviceName" name="serviceName" required><br>
        
                <label for="servicePrice">Unit Price:</label>
                <input type="number" id="servicePrice" name="servicePrice" required><br>

                <label for="servicePrice">Quantity:</label>
                <input type="number" id="Quantity" name="Quantity" required><br>
        
                <input type="submit" value="INSERT">
            </form>
        </body>
        </html>
        
        <?php
        $sql = "SELECT * FROM product";
        $data = $conn->query($sql);
        echo "<table border='1px' id='table'> <tr><th>Product ID</th><th>Product Name</th><th>Quantity</th><th>Unic Price</th><th>Actions</th></tr>";
        while($raw = mysqli_fetch_array($data)){
            echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[3]."</td><td>

            <a href='product_managed_update.php?id=".$raw[0]."'><b>| Update |</b></a>
            <a href='product_managed_delete.php?id=".$raw[0]."'><b>| Delete |</b></a></td></tr>";

            
        }
        echo "</table>";
        $conn->close();
        
    }


}
?>


                                                  <!-- Product managed end -->

                                                  

    </div>

</div>










    <script src="js/dashboard button.js"></script>
    
</body>

</html>