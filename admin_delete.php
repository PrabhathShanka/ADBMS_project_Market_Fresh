<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM admindetails WHERE adminID = $id";

    if ($conn->query($sql) === TRUE) {
      header("Location: admin_dash.php?dashb=+Dashboard");
      exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
