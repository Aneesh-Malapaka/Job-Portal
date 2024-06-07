<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobportal';


$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = strval($_POST['phone']);
    $pass = $_POST['pass'];
    $repass = $_POST['re-pass'];
    $sql_query = "INSERT INTO `users` (`name`, `email`, `password`,`phone`) VALUES ('$name', '$email', '$pass','$phone')";
    $ins = mysqli_query($conn, $sql_query);
    // var_dump($ins);
    // $row = mysqli_fetch_array($ins, MYSQLI_ASSOC); //fetch record as an associative array

    if ($ins) {
        header("location:login.php");
    } else {
        $error = "Email Id or Password is incorrect, pls re-enter!";
    }
    //     if ($ins) {
    //         echo '<div class="alert alert-success" role="alert">
    //     <b>Success!</b> You are registered successfully!
    //     </div>';
    //     } else
    //         echo '<div class="alert alert-danger" role="alert">
    // <b>Success!</b> Pls try again! It is an error on our side.
    // </div>';
    // if ($pass == $repass) {
    // } else {
    //     echo "Passwords are not same, pls check and re-enter";
    // }
}
