<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM skill WHERE skill_id='$_GET[skill_id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=job_seeker_account_info.php");
else 
     echo"not deleted";
?>