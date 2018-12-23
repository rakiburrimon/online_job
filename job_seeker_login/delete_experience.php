<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'job_portal');
$sql="DELETE FROM experience WHERE experience_id='$_GET[experience_id]'";
if(mysqli_query($conn,$sql)){
	$_SESSION['message'] = "Deleted Successful";
     header("Location: job_seeker_account_info.php");
}
else{ 
     echo"not deleted";
 }
?>