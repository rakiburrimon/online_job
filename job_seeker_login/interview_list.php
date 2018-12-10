<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
  header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <link rel="stylesheet" href="../assets/css/style4.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <nav>
    <?php include "header.php"; ?>
</nav>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from job_seeking_interview where job_seeker_id ='".$_SESSION['job_seeker_id']."'";
        $quer = mysqli_query($conn,$sql);
        while ($res= mysqli_fetch_array($quer)){
        $jj= $res['interview_id'];
        $sql1="select * from interview where interview_id =$jj";

        $quer1 = mysqli_query($conn,$sql1);

        while ($res1= mysqli_fetch_array($quer1)){
            ?>
            <?php echo "<br>"; ?>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
        <div class="d-flex justify-content-center"></div>
        <div class="media border p-2 col-md-8 border border-info">
            <ul>
                <li class="media">
                    <div class="media-body">
                        <p><?php echo $res1['interview_place']; ?></p>
                        <p><?php echo $res1['interview_date']; ?></p>
                        <p><?php echo $res1['job_id']; ?></p>
                        <td><a class="btn btn-success" name="Details" href="job_details.php?job_id=<?php echo $res1['job_id']; ?>">Details..</a></td>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        </div> 
    <?php
        }
    }
    }
        echo "<br>";     
    ?>
</body>
</html>