<?php
include('connection.php');
session_start();
$user_check=$_SESSION['admin_name'];
 
$sql = mysqli_query($db,"SELECT admin_name FROM admin WHERE admin_email='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['admin_name'];
 
?>