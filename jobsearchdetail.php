 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Job Details</title>

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

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<nav>
   <?php
			if(isset($_SESSION["job_seeker_id"])){
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
<form action="job_seeker_login/online_application.php" method="Post">
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">
		<?php 
			include 'connection.php';
			$job_id= $_GET['job_id'];

				$q = "SELECT * FROM job Where job_id = $job_id";
										
				$query = mysqli_query($conn,$q);

				while ($res= mysqli_fetch_array($query)) {
										
		?>
		<input type="hidden" id="job_id" name="job_id" value="<?php echo $res['job_id']; ?>">
		<?php
			$a=$job_id;
		?>
		<section>
			<article>
		<div class="sectionTitle">
					
		</div>
	</article>
		</section>
		<div class="clear"></div>
	</div>
	
	<div>
		<section>
			<article>
				
				<div class="sectionContent">
					<h1 class="quickFade delayTwo"><?php echo $res['job_title']; ?></h1>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<section>
			<article>
				<div class="sectionTitle">
					<h3>Job Context</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_context']; ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<section>
			<article>
				<div class="sectionTitle">
					<h3>Job Responsibilities</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_responsibilities']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h3>Educational Requirements</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['educaqtional_requirement']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h3>Experience Required</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_experience_required']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h3>Location</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_location']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h3>Salary</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_salary']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h3>Application Deadline</h3>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_application_deadline']; ?></p>
					<?php $emp_id= $res['employer_id']; ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<?php 
			}
		?>
		
		<section>
			<div class="sectionTitle">
				<h3>Organization Details</h3>
			</div>
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM employer Where employer_id = $emp_id";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<div>
				<div  class="sectionContent">
					<h2><?php echo $res['company_name']; ?></h2>
					<p>Description : <?php echo $res['company_description']; ?></p>
					<h3><b>Location</b> : <?php echo $res['company_location']; ?>.</h3>
				</div>
				<?php 
					}
				?>
			</div>
			<div class="clear"></div>
			<?php
			if(isset($_SESSION["job_seeker_id"])){
			?>
			
					<?php 
					include 'connection.php';

					$q = "SELECT * FROM online_application Where job_seeker_id = ".$_SESSION['job_seeker_id']."";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
						if($res['job_seeker_id']==($_SESSION["job_seeker_id"]) And $res['job_id']==$a){
										
			?>
			<div>
				<div  class="sectionContent">
					<input class="btn btn-outline-primary btn-lg btn-block" type="Disabled" value="Already Applied">
				<?php
			}else{
			?>
			<div>
				<div  class="sectionContent">
					<input class="btn btn-outline-primary btn-lg btn-block" type="Submit" value="Apply">
				</div>
			</div>
			<?php
			}
		}
	}else{
			?>
			<div>
				<div  class="sectionContent">
					<a class="btn btn-outline-primary btn-lg btn-block"  href="job_seeker_login/Login.php?redirect=<?=$_SERVER["REQUEST_URI"]?>">Login</a>

				</div>
			</div>
		</section>
<?php
			}
			?>
		
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