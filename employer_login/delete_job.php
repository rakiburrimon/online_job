<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM job WHERE job_id='$_GET[job_id]'";
if(mysqli_query($conn,$sql))
	$_SESSION['message'] = "Delete Successful";
     header("refresh:1;url=add_job.php");
else 
     echo"not deleted";
?>