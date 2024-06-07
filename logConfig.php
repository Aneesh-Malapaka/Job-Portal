<?php

// For login
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobportal';


$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "";

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email_login'];
    $pass = $_POST['pass_login'];
    echo ($email);
    // $query = "SELECT * FROM `users` WHERE `email`='aneeshmalapaka@gmail.com' AND `password`='thisworks';";
    // dont forget '' before php vars in query

    $query = "SELECT * FROM `users` 
             WHERE `email`='$email' AND `password`='$pass'";
    $sel = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($sel, MYSQLI_ASSOC); //fetch record as an associative array

    if (mysqli_num_rows($sel)) {
        header("location:index.php");
    } else {
        $error = "Email Id or Password is incorrect, pls re-enter!";
    }
}
mysqli_close($conn);
