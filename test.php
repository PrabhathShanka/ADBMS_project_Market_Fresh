<?php
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');
if ($conn->connect_error) {
    die('Not Connected..');
}

// Pending orders start
echo "<br><h1>Confirmation Pending Orders</h1><br>";
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
            echo "<td><a href='appoinment_completed.php?id=" . $raw['OrdeId'] . "'><b>| Confirmation Order |</b></a></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
} else {
    echo "No pending orders found.";
}

// Close the database connection
$conn->close();
?>
