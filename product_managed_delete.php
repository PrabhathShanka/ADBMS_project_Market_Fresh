<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM product WHERE ProId = $id";

    if ($conn->query($sql) === TRUE) {
    
    ?> 
        <script type="text/javascript">
            var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
            alert("Delete Successful !!!");
             window.location.href = "admin_dash.php?dashb=Dashboard#";
        </script>
    <?php
      
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
