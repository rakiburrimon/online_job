<?php
include('connection.php');
session_start();
$user_check=$_SESSION['company_name'];
 
$sql = mysqli_query($db,"SELECT employer_id FROM employer WHERE company_name='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['employer_id'];
 
?>