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


<?php
// update tatal amount in ordet table


if(isset($_POST["submit"])) {

    // Database connection parameters
$con = new mysqli('localhost', 'root', '', 'reg');

 
$OrdeIDup = $_POST['ordeIDup'];
$totalAmountup = $_POST['totalAmountup'];


if (!$con) {
die("error:" . mysqli_connect_error());
} 

$sql = "UPDATE `orders` SET `TotalAmount`='$totalAmountup' WHERE `OrdeId`='$OrdeIDup'";


// Debugging: Output the SQL query
echo "Debug: SQL query: $sql<br>";

if ($con->query($sql)) {
  echo "Registration updated successfully..";
  header("Location: index-AfterLogin.php#go-pricing");

  exit();
} else {
  echo "Something went wrong: " . $con->error;
}

$con->close();




}


?>

<?php
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the status and CusId values
$status = "Order Processing"; // Provide the status value you want to check
$CusId = $cusID; // Provide the CusId value you want to check

// Prepare the SQL query to retrieve OrdeId based on status and CusId
$sql = "SELECT OrdeId FROM orders WHERE stetus = ? AND CusId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $CusId); // 's' for string, 'i' for integer
$stmt->execute();
$result = $stmt->get_result();

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $OrdeId = $row['OrdeId'];
        echo "OrdeId: " . $OrdeId;
        $_SESSION['ordersID'] =$OrdeId;
        // You can perform further actions with the retrieved OrdeId here
    }
} else {
    echo "No orders found with the specified status and CusId.";
}

// Close the database connection
$conn->close();
?>



<?php
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search query
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Prevent SQL injection by using prepared statements
    $sql = "SELECT * FROM product WHERE ProName LIKE ?";
    $stmt = $conn->prepare($sql);
    // Bind parameter with '%' to match any character sequence before and after the search term
    $search_term = "%$search%";
    $stmt->bind_param("s", $search_term);
    // Execute statement
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If no search query, fetch all records
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
}

$conn->close();
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
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #e5e5e5;
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

<!-- search order start -->

<?php
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search query
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Prevent SQL injection by using prepared statements
    $sql = "SELECT * FROM product WHERE ProName LIKE ?";
    $stmt = $conn->prepare($sql);
    // Bind parameter with '%' to match any character sequence before and after the search term
    $search_term = "%$search%";
    $stmt->bind_param("s", $search_term);
    // Execute statement
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If no search query, fetch all records
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
           cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Product Search</h2>
    <form action="" method="get">
        <input type="text" name="search" placeholder="Search by Product Name">
        <button type="submit">Search</button>
    </form>

    <h3>Search Results:</h3>
    <table>
        <tr>
            <th>ProId</th>
            <th>ProName</th>
            <th>ProdQty</th>
            <th>UnitPrice</th>
            <th>Actions</th>
        </tr>
        <?php
        // Output search results
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ProId'] . "</td>";
            echo "<td>" . $row['ProName'] . "</td>";
            echo "<td>" . $row['ProdQty'] . "</td>";
            echo "<td>" . $row['UnitPrice'] . "</td>";
            echo "<td><a href='product_buy_now.php?id=" . $row['ProId'] . "'>Buy Now</a></td>"; // Link to buy_now.php with product id
            echo "</tr>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>




<!-- search order End -->
  



     <!-- Booking Start -->
     <div class="main" id="go-booking">
            <h1 class="text-white mb-0"> . </h1>
            <h1 class="text-white mb-0"> . </h1>
        </div>


   
   


        

        <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">

    



            <div class="container">
            <div class="row gx-5">
                    <div class="col-lg-3 py-10">


                    </div>
                <div class="col-lg-6">   <!--dikkaranna-->
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                          
                            <h1 class="text-white mb-4">selected Item</h1>  



       <!-- start seleted ordet -->    
       
       
                            <?php
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from multiple tables
$sql = "SELECT p.ProName, oi.ItemQty, (p.UnitPrice * oi.ItemQty) AS Amount, o.OrdeId
        FROM product p
        INNER JOIN order_item oi ON p.ProId = oi.ProId
        INNER JOIN orders o ON oi.OrdeId = o.OrdeId";

$result = $conn->query($sql);

$totalAmount = 0; // Initialize total amount variable

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Orders</title>
    <!-- Add your CSS styles here -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Orders</h2>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Amount</th>
            
        </tr>
        <?php
        // Output data from the SQL query
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Check if the Order ID matches the desired ID
                if ($row['OrdeId'] == $OrdeId) {
                    echo "<tr>";
                    echo "<td>" . $row['ProName'] . "</td>";
                    echo "<td>" . $row['ItemQty'] . "</td>";
                    echo "<td>" . $row['Amount'] . "</td>";
                    echo "</tr>";

                    // Add the amount to the total
                    $totalAmount += $row['Amount'];
                }
            }
        } else {
            echo "<tr><td colspan='3'>No orders found</td></tr>";
        }
        ?>
      <!--  <tr>
            <td colspan="2"><strong>Total Amount:</strong></td>
            <td><strong><?php echo $totalAmount; ?></strong></td>
        </tr>
    -->
    </table>
</body>
</html>


         <!-- end seleted ordet -->                     



                            <form action = "#" method="POST" id ="form1">
                                
                                <div class="row g-3">
                                                

                                    <h4>Total Amount : <?php echo $totalAmount; ?></h4>

                                    <input type="hidden" id="totalAmountup" name="totalAmountup" value="<?php echo isset($totalAmount) ? $totalAmount : ''; ?>" required>
                                    <input type="hidden" id="ordeIDup" name="ordeIDup" value="<?php echo isset($OrdeId) ? $OrdeId : ''; ?>" required>
                                    
                                        <div class="col-12">
                                            <!-- Helicopter<input type="submit" value="Register" class="btn btn-primary w-100 py-3  spinner-border"> </input>  -->
                                            <input type="submit" name="submit" value="Confirm  Now" class="btn btn-secondary w-100 py-3"> </input>
                                        </div>
                                </div>
                            </form>
                                
                        
                            
                                <br>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <!--All  product Details  Start -->
     <div class="main" id="go-contact">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">- All Item -</h1>
        </div>
                
  
  
                <?php
$conn = new mysqli('localhost', 'root', '', 'reg');
if ($conn->connect_error) {
    die('Not Connected..');
} else {


  $sql = "SELECT * FROM product";
  $data = $conn->query($sql);
  echo "<table border='1px' id='table'> <tr><th>Product Name</th><th>Quantity</th><th>Unic Price</th><th>Actions</th></tr>";
  while($raw = mysqli_fetch_array($data)){
      echo "<tr><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[3]."</td><td>

      <a href='product_buy_now.php?id=".$raw[0]."'><b>| Buy Now |</b></a></td></tr>";

      
  }

    // Close the table outside of the loop
    echo "</table>";



    $conn->close();
}
?>
                
            </div>
        </div>
    </div>
    <!-- all product Details  End -->

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