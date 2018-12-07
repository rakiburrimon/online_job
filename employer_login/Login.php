
<?php
session_start();

$message="";
if(count($_POST)>0) {
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM employer WHERE (employer_id='" . $_POST["userid_or_email"] . "' or company_name='" . $_POST["userid_or_email"] . "') and employer_password = '". $_POST["employer_password"]."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["employer_id"] = $row[employer_id];
$_SESSION["company_name"] = $row[company_name];
} else {
$message = "Invalid Userid or company name or Password!";
}
}
if(isset($_SESSION["employer_id"])) {
header('location:index.php');
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
<input type="password" name="employer_password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html> 