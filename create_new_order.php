<?php
session_start();


if (isset($_SESSION['nic'])) {

    $cusID = $_SESSION['nic'];

} else {

    header("Location: Sign in3.html");
    exit();
}

//echo "<p> $cusID </p>";

?>


<?php
/*
$date = $_POST['dateInput'];
//echo "<p> $date </p>";
  

   $con = mysqli_connect('localhost', 'root', '', 'reg');

if (!$con) {
    die("error:" . mysqli_connect_error());
} else {

    $sql = "INSERT INTO orders (`CusId `, `OrderDate`, `stetus`) VALUES ('$cusID', '$date', 'Order Processing ')";

    $ret = mysqli_query($con,$sql);
    $con->close();

    header("Location: New_order_insert.php");
            exit();
}
*/
?>


<?php
if(isset($_POST['dateInput'])) {
    $date = $_POST['dateInput'];
    // Assuming $cusID is defined elsewhere in your code

    $con = mysqli_connect('localhost', 'root', '', 'reg');

    if (!$con) {
        die("Error: Unable to connect to the database. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO orders (`CusId`, `OrderDate`, `stetus`) VALUES ('$cusID', '$date', 'Order Processing')";

    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        header("Location: New_order_insert.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} else {
    echo "Error: Date input not received.";
}
?>
