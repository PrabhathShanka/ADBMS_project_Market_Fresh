<?php
// Check if the record ID is provided via GET parameter
if(isset($_GET['id'])) {
    // Extract the record ID from the GET parameter
    $recordId = $_GET['id'];

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'reg');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL DELETE query
    $sql = "DELETE FROM orders WHERE OrdeId = $recordId";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
      ?> 
      <script type="text/javascript">
          var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
          alert("Oreder delete Successful !!!");
           window.location.href = "index-AfterLogin.php#go-pricing";
      </script>
    <?php
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Record ID not provided";
}
?>
