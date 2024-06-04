

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


if (isset($_POST['uname']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['pass']);

    if (empty($uname)) {

        echo "User Name is required";

        exit();

    }else if(empty($pass)){

        echo"Password is required";

        exit();

    }else{

        $sql = "SELECT * FROM admindetails WHERE uname='$uname' AND password ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['uname'] === $uname && $row['password'] === $pass) {
                header("Location: admin_dash.php");
                exit();
                
            }
            
            else{

           header("Location: adminlogin.html");
           exit();}

        }else{
  
            header("Location: adminlogin.html");
            exit();}
 
        }
    }
        else{
                exit();
            }
?>