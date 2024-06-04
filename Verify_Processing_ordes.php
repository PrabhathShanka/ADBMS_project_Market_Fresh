<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $con = new mysqli('localhost', 'root', '', 'reg');

    $OrdeIDup = $_GET['id'];

// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from order_item table and calculate total amount and update product quantities
$sql = "SELECT oi.ProId, oi.ItemQty,oi.OrdeId, p.ProName, p.UnitPrice 
        FROM order_item oi
        INNER JOIN product p ON oi.ProId = p.ProId
        WHERE oi.OrdeId = $OrdeIDup ";
$result = $conn->query($sql);

$totalAmount = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $itemQty = $row['ItemQty'];
        $unitPrice = $row['UnitPrice'];
        $totalAmount += $itemQty * $unitPrice;

        // Update product quantities
        $productId = $row['ProId'];
        $sqlUpdate = "UPDATE product SET ProdQty = ProdQty - $itemQty WHERE ProId = $productId";
        $conn->query($sqlUpdate);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
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
    <h2>Order Summary</h2>
    <p>Total Amount: RS <?php echo number_format($totalAmount, 2); ?></p>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Quantity Ordered</th>
        </tr>
        <?php
        // Display product names and quantities ordered
        $result = $conn->query("SELECT ProName, ItemQty FROM order_item oi INNER JOIN product p ON oi.ProId = p.ProId WHERE oi.OrdeId = $OrdeIDup");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ProName'] . "</td>";
                echo "<td>" . $row['ItemQty'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

<?php
// Close connection after using it
$conn->close();
?>

<form action="Verify_Processing_ordes2.php" method="post">
        <input type="hidden" name="orderID" value="<?php echo $OrdeIDup; ?>">
        <input type="submit" value="Confirm Order">
    </form>
</body>
</html>

<?php
}
?>
