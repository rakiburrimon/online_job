<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM employer WHERE employer_id='$_GET[employer_id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=employer_list.php");
else 
     echo"not deleted";
?>