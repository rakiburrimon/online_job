<?php
include('connection.php');
session_start();
$user_check=$_SESSION['job_seeker_email'];
 
$sql = mysqli_query($db,"SELECT job_seeker_name FROM job_seeker WHERE job_seeker_email='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['job_seeker_email'];
 
?>