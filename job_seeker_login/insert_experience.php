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
$a1=$_POST["experience_duration"];
$a2=$_POST["experience_organization"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `experience` (`experience_id`, `experience_duration`, `experience_organization`, `job_seeker_id`) VALUES (NULL, '$a1', '$a2', '".$_SESSION['job_seeker_id']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 