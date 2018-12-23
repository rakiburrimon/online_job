<?php 
session_start();
if(!isset($_SESSION["employer_id"])){
  header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Candidates List</title>

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="../assets/css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<nav>
   <?php
			if(isset($_SESSION["employer_id"])){
			?>
			<nav>
   				<?php include "header.php"; ?>
  			</nav>
			<?php
}else{
	?>
	<div>
				<input type="hidden" name="">
			</div>
	<?php
}
			?>
  </nav>

<body id="top" class=""> 
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">
    <table class="table table-striped">
    <tr class="container-fluid bg-info">
                                    
                                    <th>Date</th>
                                    <th>Place</th>
                                    <th>Job Title</th>
                                    <th>Check</th>
             
             </tr> 
<?php
include 'connection.php';
if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from job where employer_id = '".$_SESSION['employer_id']."'";
        $quer = mysqli_query($conn,$sql);
        while ($res= mysqli_fetch_array($quer)){
        $job_id= $res['job_id'];
        ?>
        <div class="row">                
        <div class="media-body">
        <tr>
        <?php
        $sql1="select * from interview where job_id =$job_id";

        $quer1 = mysqli_query($conn,$sql1);

        while ($res1= mysqli_fetch_array($quer1)){
            ?>
            <?php echo "<br>"; ?>
                        <td><?php echo $res1['interview_date']; ?></td>
                        <td>
                            <?php echo $res1['interview_place']; } ?>
                        </td>
                        <td><?php echo $res['job_title']; ?></td>
                        <td><a class="btn btn-primary" name="Details" href="jobdetails.php?job_id=<?php echo $res['job_id']; ?>">Details..</a></td>
                
        </tr>
    
        </div>
        
        </div>
        </div> 
    <?php
    }
}
    ?>
</div>
</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script> 
</body>

</html>
<table>
  <footer>
   <?php include "footer.php"; ?>
  </footer>
</table>