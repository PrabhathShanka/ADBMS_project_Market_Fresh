<?php
session_start();


if (isset($_SESSION['nic'])) {

    $cusID = $_SESSION['nic'];

} else {

    header("Location: Sign in3.html");
    exit();
}

//echo "<p> $cusID </p>";



if (isset($_SESSION['ordersID'])) {

    $ordeID = $_SESSION['ordersID'];

} else {

    header("Location: Sign in3.html");
    exit();
}

//echo "<p> $ordeID </p>";

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {

    $ProID = $_GET['id'];

 // echo "<p> $ProID</p>";
    
} 


$conn = new mysqli('localhost', 'root', '', 'reg');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve user data
$sql = "SELECT * FROM product WHERE ProId = '$ProID'"; // Replace 'user_NI' with the specific user's NI

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      

			$productName = $row['ProName'];
			$productQty = $row['ProdQty'];
			$unitPrice = $row['UnitPrice'];
    }
} else {
    echo "0 results";
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Details of the product you are receiving</h2>

			<h3>	<?php echo "Product ID : $ProID"; ?> </h3>

        <form action="insert_order_item_table.php" method="post">

				<input type="hidden" id="productID" name="productID" value="<?php echo isset($ProID) ? $ProID : ''; ?>" required>
            
            <div class="form-group">
                <label for="productName">Product Name:  <?php echo $productName ?></label>
                <input type="hidden" id="productName" name="productName" value="<?php echo isset($productName) ? $productName : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="productQty">Available Product Quantity:  <?php echo $productQty ?></label>
                <input type="hidden" id="productQty" name="productQty" value="<?php echo isset($productQty) ? $productQty : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="unitPrice">Unit Price:  <?php echo $unitPrice ?></label>
                <input type="hidden" id="unitPrice" name="unitPrice" value="<?php echo isset($unitPrice) ? $unitPrice : ''; ?>" required>
            </div>

            <div class="form-group">
            <label for="productName">Enter the quantity you want :</label>
                                <input type="text" name="byquantity" class="form-control border-0" placeholder="Enter the quantity" style="height: 55px;"required>
                            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Confirm Now"> </input>
            </div>
        </form>
    </div>
</body>
</html>
