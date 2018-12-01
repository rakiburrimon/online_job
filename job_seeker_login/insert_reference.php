<?php if (!isset($_SESSION)) session_start(); ?>

 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a1=$_POST["name"];
$a2=$_POST["designation"];
$a3=$_POST["company"];
$a4=$_POST["address"];
$a5=$_POST["email"];
$a6=$_POST["phone"];
$a7=$_POST["reference_type"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `reference` (`reference_id`, `name`, `designation`, `company`, `address`, `email`, `phone`, `reference_type`, `job_seeker_id`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '".$_SESSION['job_seeker_id']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 