<?php
if (isset($_GET['id'])) {
  $ProID	 = $_GET['id'];  


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

}

if(isset($_POST["submit"])) {

	$pID = $_POST['productID'];
	$productName = $_POST['productName'];
  $productQty = $_POST['productQty'];
  $unitPrice = $_POST['unitPrice'];



$servername = "localhost";
$username = "root";
$password = "";
$database ="reg";

$con = mysqli_connect($servername,$username,$password,$database);


if (!$con) {
die("error:" . mysqli_connect_error());
}  

$sql = "UPDATE `product` SET `ProName`='$productName',`ProdQty`='$productQty',`UnitPrice`='$unitPrice' WHERE `ProId`='$pID'";


// Debugging: Output the SQL query
echo "Debug: SQL query: $sql<br>";

if ($con->query($sql)) {
	?>
		<script type="text/javascript">
            var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
            alert("Upadate Successful !!!");
             window.location.href = "admin_dash.php?dashb=Dashboard#";
        </script>
				<?php

		exit();
} else {
		echo "Something went wrong: " . $con->error;
}

$con->close();




}


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
        <h2>Update Product</h2>

			<h3>	<?php echo "Product ID : $ProID"; ?> </h3>

        <form action="#" method="post">

				<input type="hidden" id="productID" name="productID" value="<?php echo isset($ProID) ? $ProID : ''; ?>" required>
            
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" value="<?php echo isset($productName) ? $productName : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="productQty">Product Quantity:</label>
                <input type="number" id="productQty" name="productQty" value="<?php echo isset($productQty) ? $productQty : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="unitPrice">Unit Price:</label>
                <input type="text" id="unitPrice" name="unitPrice" value="<?php echo isset($unitPrice) ? $unitPrice : ''; ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update Product"> </input>
            </div>
        </form>
    </div>
</body>
</html>
