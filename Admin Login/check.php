<?php
include('connection.php');
session_start();
$user_check=$_SESSION['admin_email'];
 
$sql = mysqli_query($db,"SELECT admin_name FROM admin WHERE admin_email='$user_check' ");

$sql1 = mysqli_query($db,"SELECT admin_id FROM admin WHERE admin_email='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['admin_email'];
 
?>