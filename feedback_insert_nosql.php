<?php
$ordeID = $_POST['orderID'];
$feedBack = $_POST['Coustemer_Feedback'];



 //echo "<p> $ordeID </p>";
  //echo "<p> $feedBack </p>";


?>

<?php
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// SQL query to retrieve order details
$sql = "SELECT c.CusId,c.CusName, c.CusTeleNo, o.OrdeId, o.OrderDate, o.TotalAmount, p.PaymentDate
FROM customer c
INNER JOIN orders o ON c.CusId = o.CusId 
INNER JOIN orderpayment p ON o.OrdeId = p.OrderId
WHERE o.OrdeId = $ordeID;
";

$result = $conn->query($sql);

// Check if query was successful
if ($result === false) {
    echo 'Error executing query: ' . $conn->error;
} else {
    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Output data in a table


        while ($row = $result->fetch_assoc()) {

          $cusID = $row['CusId'];
          $cusName = $row['CusName'];
          $cusTeleNo = $row['CusTeleNo'];
          $ordeId = $row['OrdeId'];
          $orderDate = $row['OrderDate'];
          $totalAmount = $row['TotalAmount'];
          $paymentDate = $row['PaymentDate'];
        }
         



//NOSQL function


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

// Check if form is submitted

    // Now you can use these variables as needed
    echo "<p>Customer ID: $cusID</p>";
    echo "<p>Customer Name: $cusName</p>";
    echo "<p>Customer Telephone Number: $cusTeleNo</p>";
    echo "<p>Order ID: $ordeId</p>";
    echo "<p>Order Date: $orderDate</p>";
    echo "<p>Total Amount: $totalAmount</p>";
    echo "<p>Payment Date: $paymentDate</p>";

    
   
    // Create new document object
    $document = new stdClass();
    $document->CustomerID = $cusID;
    $document->name = $cusName;
    $document->telephoneNumber = $cusTeleNo;
    
    $document->orderID = $ordeId;
    $document->orderDate = $orderDate;
    $document->TotaleAmount = $totalAmount;

    $document->paymentDate = $paymentDate;
    $document->coustemerFeedback = $feedBack;



    // Insert document into MongoDB collection
    $bulkWrite = new MongoDB\Driver\BulkWrite();
    $bulkWrite->insert($document);
    $manager->executeBulkWrite('NIBM.customersDetails', $bulkWrite);
    
    // Redirect to the same page to refresh the records


    //update orders table status


    $con = new mysqli('localhost', 'root', '', 'reg');


    if (!$con) {
      die("error:" . mysqli_connect_error());
      } 
      
      $sql = "UPDATE `orders` SET `stetus`='completed  Order' WHERE `OrdeId`='$ordeId'";
      
      
      // Debugging: Output the SQL query
      echo "Debug: SQL query: $sql<br>";
      
      if ($con->query($sql)) {
        echo "Registration updated successfully..";
        ?>
    <script type="text/javascript">
        var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
        alert("Thanks for your feedback !!!");
        window.location.href = "index-AfterLogin.php#go-pricing";
    </script>
    <?php
        //header("Location: admin_dash.php?msg=Messages+");
      
        exit();
      } else {
        echo "Something went wrong: " . $con->error;
      }
      
      $con->close();



    


    header("Location: {$_SERVER['PHP_SELF']}");
    exit;


?>











<?php
      
        


    } else {
        echo "No records found";
    }
}

// Close connection
$conn->close();
?>