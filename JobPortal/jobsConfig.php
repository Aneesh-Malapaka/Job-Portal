<?php

// For Inserting Jobs Admin side
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

    $company = $_POST['company'];
    $pos = $_POST['position'];
    $descr = $_POST['description'];
    $skills = $_POST['skills'];
    $ctc = $_POST['CTC'];

    // $query = "SELECT * FROM `users` WHERE `email`='aneeshmalapaka@gmail.com' AND `password`='thisworks';";
    // dont forget '' before php vars in query

    $query = "INSERT INTO `jobinfo`(`company`, `position`, `description`, `Skills`, `CTC`) 
                VALUES ('$company','$pos','$descr','$skills','$ctc')";
    $ins = mysqli_query($conn, $query);
    if ($ins) {
        header("location:index.php");
    }
}
mysqli_close($conn);
