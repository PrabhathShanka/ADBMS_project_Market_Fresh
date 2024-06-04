<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM customer WHERE CusId = $id";

    if ($conn->query($sql) === TRUE) {
      header("Location: admin_dash.php?vri=+Register+Info");
      exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
