<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM job WHERE job_id='$_GET[job_id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=job_list.php");
else 
     echo"not deleted";
?>