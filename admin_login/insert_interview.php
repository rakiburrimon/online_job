<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>

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
$a1=$_POST["interview_date"];
$a2=$_POST["interview_place"];
$a3=$_POST["job_id"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `interview` (`interview_id`, `interview_date`, `interview_place`, `job_id`) VALUES (NULL, '', '', '$a3')";

if ($conn->query($sql) === TRUE) {
    header('Location: jobdetails.php?job_id=' . $a3);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 