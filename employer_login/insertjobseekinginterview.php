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
$a1=$_POST["job_seeker_id"];
$a2=$_POST["interview_id"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `job_seeking_interview` (`job_seeking_interview_id`, `job_seeker_id`, `interview_id`) VALUES (NULL, '$a1', '$a2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 