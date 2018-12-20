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
$a1=$_POST["qualification_name"];
$a2=$_POST["qualification_result"];
$a3=$_POST["qualification_institution"];
$a4=$_POST["job_seeker_id"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `qualification` (`qualification_id`, `qualification_name`, `qualification_result`, `qualification_institution`, `job_seeker_id`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4')";

if ($conn->query($sql) === TRUE) {
 $_SESSION['message'] = "Added Successful";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 