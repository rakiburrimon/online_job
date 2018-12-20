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
$a1=$_POST["experience_duration"];
$a2=$_POST["experience_organization"];
$a3=$_POST["job_seeker_id"];
$a4=$_POST['designation'];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `experience` (`experience_id`, `experience_duration`, `experience_organization`, `job_seeker_id`, `designation`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Successful";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 