<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
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
$a1=$_POST["qualification_name"];
$a2=$_POST["qualification_result"];
$a3=$_POST["qualification_institution"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `qualification` (`qualification_id`, `qualification_name`, `qualification_result`, `qualification_institution`, `job_seeker_id`) VALUES (NULL, '$a1', '$a2', '$a3', '".$_SESSION['job_seeker_id']."')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Successful";
		header('location:job_seeker_account_details.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 