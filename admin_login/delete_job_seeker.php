<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM job_seeker WHERE job_seeker_id='$_GET[job_seeker_id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=job_seeker_list.php");
else 
     echo"not deleted";
?>