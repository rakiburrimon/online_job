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
$image = $_FILES["image"]["name"];

$sql = "INSERT INTO `job_seeker` (`job_seeker_id`, `job_seeker_name`, `job_seeker_email`, `job_seeker_contact`, `job_seeker_address`, `job_seeker_career_objective`, `job_seeker_gender`, `image`, `job_seeker_password`, `job_seeker_status`, `job_seeker_type`) VALUES (NULL, '$a1', '$a2', '$a3', NULL, NULL, NULL, '$image', '$a4', 'active', 'general') ";

if ($conn->query($sql) === TRUE) {
	 $target_dir = "job_seeker_login/job_seeker_image/";
	 $target_file = $target_dir . basename($_FILES["image"]["name"]);
       $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(move_uploaded_file($_FILES["image"]["tmp_name"],
$target_file)){
    echo"file uploaded";
}
 else{
    echo "Upload fail"; 
}
    echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
        header("refresh:1;url=job_seeker_login/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 