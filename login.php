<?php
session_start();
include("connection.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["admin_email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$admin_email=$_POST['admin_email'];
$password=$_POST['password'];
 
// To protect from MySQL injection
$admin_email = stripslashes($admin_email);
$password = stripslashes($password);
$admin_email = mysqli_real_escape_string($db, $admin_email);
$password = mysqli_real_escape_string($db, $password);
$password = md5($password);
 
//Check username and password from database
$sql="SELECT admin_id FROM admin WHERE admin_email='$admin_email' and password='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(mysqli_num_rows($result) == 1)
{
$_SESSION['admin_email'] = $login_user; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}
 
}
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
 
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
<h3>Login Form</h3>
<br><br>
<form method="post" action="">
<label>Username:</label><br>
<input type="text" name="admin_email" placeholder="admin email" /><br><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password" />  <br><br>
<input type="submit" name="submit" value="Login" /> 
</form>
<div class="error"><?php echo $error;?></div>
</div>
</body>
</html>