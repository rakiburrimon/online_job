<?php
session_start();
if(!isset($_SESSION["admin_id"])){
}
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
<title>Admin Login</title>
</head>
<body>
<form method="post" align="center">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assets/img/caveman.png" id="icon" alt="User Icon" />
      <h1>Admin Login</h1>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="userid_or_email" class="fadeIn second" name="userid_or_email" placeholder="Email">
      <input type="password" id="password" class="fadeIn second" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
    </div>

  </div>
</div>
</form>
</body>
</html> 