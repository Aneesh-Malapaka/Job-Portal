<?php

// For Candidate applying
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobportal';


$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "";

session_start();
// $_SERVER['REQUEST_METHOD'] == 'POST'
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['CandidateName'];
    $applying = $_POST['pos'];
    $qual = $_POST['qual'];
    $passout = $_POST['year'];

    $query = "INSERT INTO `candidates`(`name`, `position`, `qualification`, `passout`) 
    VALUES ('$name','$applying','$qual','$passout')";
    $ins = mysqli_query($conn, $query);

    if ($ins) {
        header("location:career.php");
    }
}
mysqli_close($conn);
