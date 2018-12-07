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
<form action="addjobseekerinterview.php" method="POST">
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">
		<?php 
			include 'connection.php';
            $job_id=$_GET['job_id'];

				$q = "SELECT * FROM online_application Where job_id = $job_id ";
										
				$query = mysqli_query($conn,$q);

				while ($res= mysqli_fetch_array($query)) {
										
		?>
    <input type="hidden" id="job_id" name="job_id" value="<?php echo $res['job_id']; ?>">
		<input type="hidden" id="job_seeker_id" name="job_seeker_id" value="<?php echo $res['job_seeker_id']; ?>">
    
		<div class="container">
        <div class="media border p-6 col-md-10 border border-success"">
            <ul class="list-unstyled">
                <li class="media">
                    <div class="media-body">
                        <p><?php echo $res['job_seeker_id']; ?></p>
                        <?php 
                             include 'connection.php';
                                    $job_seeker_id=$res['job_seeker_id'];

                                $q = "SELECT * FROM job_seeker Where job_seeker_id = $job_seeker_id ";
                    
                                $query = mysqli_query($conn,$q);

                                while ($res= mysqli_fetch_array($query)) {
                    
                            ?>
                            <p><?php echo $res['job_seeker_name']; ?></p>
                            <p><?php echo $res['job_seeker_contact']; ?></p>
                            <p><?php echo $res['job_seeker_address']; ?></p>
                        <button type="submit" class="btn btn-success btn-sm btn-block">Check Details</button>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <?php } ?>
        <?php } ?>	
</div>
</div>
</div>
</form>
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