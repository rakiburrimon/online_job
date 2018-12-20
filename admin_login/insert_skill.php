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
$a1=$_POST["skill_name"];
$a2=$_POST["skill_description"];
$a3=$_POST["job_seeker_id"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `skill` (`skill_id`, `skill_name`, `skill_description`, `job_seeker_id`) VALUES (NULL, '$a1', '$a2', '$a3')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Addedd Successful";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 