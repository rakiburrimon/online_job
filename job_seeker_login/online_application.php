<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
  header("Location:Login.php");
}
?>

 <?php
 date_default_timezone_set('Asia/Dhaka');

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
$a1=$_POST["job_id"];
$t = date('Y-d-m H:i:s',time());
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `online_application` (`online_application_id`, `job_id`, `job_seeker_id`, `application_time`) VALUES (NULL, '$a1', '".$_SESSION['job_seeker_id']."', '$t')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 