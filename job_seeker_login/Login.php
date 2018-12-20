 <?php
session_start();
if(!isset($_SESSION["job_seeker_id"])){
}
$message="";
if(count($_POST)>0) {
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM job_seeker WHERE (job_seeker_id='" . $_POST["userid_or_email"] . "' or job_seeker_email='" . $_POST["userid_or_email"] . "') and job_seeker_password = '". $_POST["job_seeker_password"]."' and job_seeker_status= 'active' ");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["job_seeker_id"] = $row[job_seeker_id];
$_SESSION["job_seeker_email"] = $row[job_seeker_email];
$_SESSION["job_seeker_name"] = $row[job_seeker_name];
$row["image"] = $row[image];
} else {
$message = "Invalid Userid or Email or Password!";
} 
}
if(isset($_SESSION["job_seeker_id"])) {
	if(isset($_GET["redirect"])){
	header("Location:".$_GET["redirect"]);
	return;
}
$_SESSION['message'] = "Welcome !!!";
header('location:index.php');
 
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Job Seeker Login</title>
</head>
<body>
<form method="post" align="center">

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assets/img/caveman.png" id="icon" alt="User Icon" />
      <h1>Job Seeker Login</h1>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="userid_or_email" class="fadeIn second" name="userid_or_email" placeholder="Email">
      <input type="password" id="job_seeker_password" class="fadeIn second" name="job_seeker_password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="../job_seeker_reg.php">Job Seeker Registration</a>
    </div>

  </div>
</div>
</form>
</body>
</html> 