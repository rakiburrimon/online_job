 <?php
session_start();
$message="";
if(count($_POST)>0) {
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM admin WHERE (admin_id='" . $_POST["userid_or_email"] . "' or admin_name='" . $_POST["userid_or_email"] . "') and password = '". $_POST["password"]."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["admin_id"] = $row[admin_id];
$_SESSION["admin_name"] = $row[admin_name];
} else {
$message = "Invalid Userid or company name or Password!";
}
}
if(isset($_SESSION["admin_id"])) {
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
Userid or Company Name:<br>
<input type="text" name="userid_or_email">
<br>
Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html> 