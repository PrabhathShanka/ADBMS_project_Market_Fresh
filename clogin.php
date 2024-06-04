<?php

$sname= "localhost";

$uname= "root";

$password = "";

$db_name = "reg";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

session_start(); 



if (isset($_POST['nic']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $NIC = validate($_POST['nic']);

    $pass = validate($_POST['password']);

    if (empty($NIC)) {

        echo "User Name is required";

        exit();

    }else if(empty($pass)){

        echo"Password is required";

        exit();

    }else{

        $sql = "SELECT *  FROM customer WHERE CusTeleNo ='$NIC' AND pass1='$pass'  ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
            $customerID = $row['CusId']; 

            if ($row['CusTeleNo'] === $NIC && $row['pass1'] === $pass) {

                $_SESSION['nic'] =$customerID;

               header("Location: index-AfterLogin.php");
                exit();
            }  
            else{

                    header("Location: Sign in3.html");
                    exit();
                }

            }else{
  
                    header("Location: Sign in3.html");
                    exit();
                 }
 
        }

    }

        else{
                 exit();
            }
?>