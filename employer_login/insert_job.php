<?php if (!isset($_SESSION)) session_start(); ?>

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

$sql = "INSERT INTO `job` (`job_id`, `job_title`, `job_context`, `job_responsibilities`, `educaqtional_requirement`, `job_experience_required`, `job_status`, `job_location`, `job_salary`, `job_application_deadline`, `employer_id`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$a5', 'Active', '$a6', '$a7', '$a8', '".$_SESSION['employer_id']."')";

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
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
<button type="submit" class="btn btn-outline-primary btn-lg btn-block">Confirm</button>
</form>