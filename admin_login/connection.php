<?php

$dbName="job_portal";
$dbUser="root";
$dbPass="";
$hostName="localhost";

$conn = new mysqli($hostName, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
