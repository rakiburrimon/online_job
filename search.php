<?php   
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";


$_SESSION['search_value']=$_POST["query"];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from job where job_title like '%".$_SESSION['search_value']."%'";

        $quer = mysqli_query($conn,$sql);

        while ($res= mysqli_fetch_array($quer)){
            
            ?>
        <div class="container">
        <div class="media border p-6 col-md-10 border border-success"">
            <ul class="list-unstyled">
                <li class="media">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><?php echo $res['job_title']; ?></h5>
                        <p><?php echo $res['job_context']; ?></p>
                        <p><?php echo $res['educaqtional_requirement']; ?></p>
                        <td><a class="btn btn-success" name="Details" href=" ?job_id=<?php echo $res['job_id']; ?>">Details..</a></td>
                    </div>
                </li>
            </ul>
        </div>
        </div>
            
    <?php
        }
        }       
    ?>
</body>
</html>