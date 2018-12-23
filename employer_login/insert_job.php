<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/passwordvalidation.css">
    <link rel="stylesheet" href="assets/css/style4.css">
    
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style5.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if(!isset($_SESSION["employer_id"])){
  header("Location:Login.php");
}
?>

 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a1=$_POST["job_title"];
$a2=$_POST["job_context"];
$a3=$_POST["job_responsibilities"];
$a4=$_POST["educational_requirements"];
$a5=$_POST["job_experience_required"];
$a6=$_POST["job_location"];
$a7=$_POST["job_salary"];
$a8=$_POST["application_deadline"];
//'".$_SESSION['employer_id']."'

$sql = "INSERT INTO `job` (`job_id`, `job_title`, `job_context`, `job_responsibilities`, `educaqtional_requirement`, `job_experience_required`, `job_status`,`job_type`, `job_location`, `job_salary`, `job_application_deadline`, `employer_id`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$a5', 'Active','General', '$a6', '$a7', '$a8', '".$_SESSION['employer_id']."')";

if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
    include 'connection.php';

				$q = "SELECT * FROM job Where job_id = $last_id";
										
				$query = mysqli_query($conn,$q);

				while ($res= mysqli_fetch_array($query)) {
	 ?>
    			<form action="insert_interview.php" method="POST">
				<input type="hidden" id="job_id" name="job_id" value="<?php echo $res['job_id']; ?>">

<?php 
 }
 }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?> 
<div>
 <a class="btn btn-danger" name="cancel" href=" delete_job.php?job_id=<?php echo $res['job_id']; ?>">Cancel..</a>
<input class="btn btn-success" type="submit" value="Add" />
</div>
</form>