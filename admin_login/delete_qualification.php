<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM qualification WHERE qualification_id='$_GET[qualification_id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;'Location: ' . $_SERVER['HTTP_REFERER']");
else 
     echo"not deleted";
?>