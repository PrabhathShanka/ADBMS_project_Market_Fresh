<?php
$Payment_method = $_POST['Payment_Method'];
$DateInput = $_POST['dateInput'];
$OrderID = $_POST['orderID'];


 //echo "<p> $OrderID </p>";

$con = mysqli_connect('localhost', 'root', '', 'reg');

if (!$con) {
    die("Error: " . mysqli_connect_error());
}

$sql = "INSERT INTO `orderpayment`(`OrderId`, `PaymentDate`, `PaymentMethod`, `Status`) VALUES ('$OrderID', '$DateInput', '$Payment_method', 'paid')";

if (mysqli_query($con, $sql)) {




      $con = new mysqli('localhost', 'root', '', 'reg');
  
  
     // echo "<p> $OrdeIDup </p>";
  
  
  
  
  if (!$con) {
  die("error:" . mysqli_connect_error());
  } 
  
  $sql = "UPDATE `orders` SET `stetus`='Receiv completed Confirm order' WHERE `OrdeId`='$OrderID'";
  
  
  // Debugging: Output the SQL query
  echo "Debug: SQL query: $sql<br>";
  
  if ($con->query($sql)) {
    echo "Registration updated successfully..";
    ?>
    <script type="text/javascript">
        var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
        alert("Paid  Successful !!!");
        window.location.href = "admin_dash.php?record=serviseRecord";
    </script>
    <?php
  
    exit();
  } else {
    echo "Something went wrong: " . $con->error;
  }
  
  $con->close();
  
  
  }


    
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

//Disconnect 
mysqli_close($con);
?>



