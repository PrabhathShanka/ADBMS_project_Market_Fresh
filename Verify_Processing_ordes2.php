<?php
if(isset($_POST['orderID'])) {
  $OrdeIDup = $_POST['orderID'];
    $con = new mysqli('localhost', 'root', '', 'reg');



 echo "<p> $OrdeIDup </p>";



if (!$con) {
die("error:" . mysqli_connect_error());
} 

$sql = "UPDATE `orders` SET `stetus`='Pending Order' WHERE `OrdeId`='$OrdeIDup'";


// Debugging: Output the SQL query
echo "Debug: SQL query: $sql<br>";

if ($con->query($sql)) {
  echo "Registration updated successfully..";

  ?>
  <script type="text/javascript">
      var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
      alert("Order confirmation complete !!!");
    window.location.href = "admin_dash.php?msg=Messages+";
  </script>
  <?php

 // header("Location: admin_dash.php?msg=Messages+");

  exit();
} else {
  echo "Something went wrong: " . $con->error;
}

$con->close();


}
?>