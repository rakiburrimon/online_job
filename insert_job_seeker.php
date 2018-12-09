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
$a1=$_POST["name"];
$a2=$_POST["email"];
$a3=$_POST["phone"];
$a4=$_POST["password"];

$sql = "INSERT INTO `job_seeker` (`job_seeker_id`, `job_seeker_name`, `job_seeker_email`, `job_seeker_contact`, `job_seeker_address`, `job_seeker_career_objective`, `job_seeker_gender`, `image`, `job_seeker_password`, `job_seeker_status`, `job_seeker_type`) VALUES (NULL, '$a1', '$a2', '$a3', NULL, NULL, NULL, NULL, '$a4', 'active', 'general') ";

if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
        header("refresh:1;url=job_seeker_login/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 