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
$byequantity = $_POST['byquantity'];
$ProID = $_POST['productID'];

$con = mysqli_connect('localhost', 'root', '', 'reg');

if (!$con) {
    die("Error: " . mysqli_connect_error());
}

$sql = "INSERT INTO `order_item`(`OrdeId`, `ProId`, `ItemQty`) VALUES ('$ordeID', '$ProID', '$byequantity')";

if (mysqli_query($con, $sql)) {
    ?>
    <script type="text/javascript">
        var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
        alert("Selected Successful !!!");
        window.location.href = "New_order_insert.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

//Disconnect 
mysqli_close($con);
?>
