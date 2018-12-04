 <?php
session_start();
if(!isset($_SESSION["job_seeker_id"])){

}
$message="";
if(count($_POST)>0) {
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM job_seeker WHERE (job_seeker_id='" . $_POST["userid_or_email"] . "' or job_seeker_email='" . $_POST["userid_or_email"] . "') and job_seeker_password = '". $_POST["job_seeker_password"]."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["job_seeker_id"] = $row[job_seeker_id];
$_SESSION["job_seeker_email"] = $row[job_seeker_email];
} else {
$message = "Invalid Userid or Email or Password!";
}
}
if(isset($_SESSION["job_seeker_id"])) {
	if(isset($_GET["redirect"])){
	header("Location:".$_GET["redirect"]);
	return;
}
header('location:welcome.php');

}
?>
<html>
<head>
<title>Employer Login</title>
</head>
<body>
<form method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
Userid or Email:<br>
<input type="text" name="userid_or_email">
<br>
Password:<br>
<input type="password" name="job_seeker_password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html> 