<?php
include('connection.php');
session_start();
$user_check=$_SESSION['company_name'];
 
$sql = mysqli_query($db,"SELECT company_name FROM employer WHERE company_name='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['company_name'];
 
?>