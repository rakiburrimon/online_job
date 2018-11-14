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

$a1=$_POST["c_name"];
$a2=$_POST["c_person_name"];
$a3=$_POST["c_person_email"];
$a4=$_POST["e_phone"];
$a5=$_POST["c_description"];
$a6=$_POST["confirm_password"];
$a7=$_POST["b_description"];
$a8=$_POST["c_location"];
$a9=$_POST["i_type"];


$sql = "INSERT INTO `employer` (`employer_id`, `company_name`, `contact_person_name`, `contact_person_email`, `employer_contact`, `company_description`, `employer_password`, `employer_status`, `employer_type`, `business_description`, `company_location`, `industry_type`, `company_logo`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', 'Inactive', 'General', '$a7', '$a8', '$a9', NULL) ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 