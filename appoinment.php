<?php
session_start();

// Check if the session variable is set
if (isset($_SESSION['license_Plate'])) {
    // Access the username
    $license_Plate = $_SESSION['license_Plate'];
    // Use $license_Plate as needed
  //  echo "You are a license_Plate: $license_Plate";
} else {
    // Redirect to login page if the session variable is not set
    header("Location: Sign in3.html");
    exit();
}

//---------------------------------------------------------------------------------

$package = $_POST['package'];
$date = $_POST['date'];
$time = $_POST['timeslot'];
$request = $_POST['request'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "reg";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("error:" . mysqli_connect_error());
} else {

    $sql = "INSERT INTO appoinment (`license_Plate`, `package`, `date`, `time`, `message`, `status`) VALUES ('$license_Plate', '$package', '$date', '$time', '$request', 'pending')";

    $sqlc = "SELECT COUNT(time) AS apcount FROM appoinment WHERE date='$date' AND time='$time'";
    $data = $con->query($sqlc);
    $noa = mysqli_fetch_array($data);

    if ($noa[0] < 5) {

        if ($con->query($sql)) {
            echo "Appointment successful..";
            header("Location: index-AfterLogin.php");
            exit();
        } else {
            echo "Something went wrong: " . $con->error;
        }
    } else {
        echo "Time Slot is Full. Please choose another time.";
    }

    $con->close();
}
?>
