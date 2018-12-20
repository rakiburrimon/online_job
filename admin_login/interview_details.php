<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
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

<body id="top" class="">
	<nav>
   <?php include "header.php"; ?>
  </nav>
  <form action="add_fixed_interview.php" method="POST">
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
					<p><?php echo $res['job_application_deadline'];  ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
			<section>
			<div class="border border-success">
			<div class="sectionTitle">
				<h3>Interview Details</h3>
			</div>
			<?php
			$interview_id=$_GET['interview_id'];
					include 'connection.php';
					$q = "SELECT * FROM interview Where interview_id = $interview_id ";
										
					$query = mysqli_query($conn,$q);
					while ($res1= mysqli_fetch_array($query)) {
										
			?>
			<div>
				<div  class="sectionContent">
					<p>Interview Date: <?php echo $res1['interview_date']; ?></p>
					<p><b>Location</b> : <?php echo $res1['interview_place']; ?>.</p>
				</div>
				<?php 
					}
				?>
			</div>
			</div>
			</section>	
		
		<section>
			<div class="clear"></div>
			<div>
				<div class="sectionContent">
					<td><a class="btn btn-success" name="Show Candidates List" href="candidates_list.php?job_id=<?php echo $res['job_id']; ?>">Show Candidates List..</a></td>
					<?php
				}
					include 'connection.php';
					$job_id= $_GET['job_id'];

					$q = "SELECT * FROM interview Where job_id=$job_id";
										
					$query = mysqli_query($conn,$q);

					$res= mysqli_fetch_array($query);
										
					?>		
				</div>
			<?php  ?>
			</div>
		</section>
		
	</div>
</div>
</div>
</form>
<footer>
   <?php include "footer.php"; ?>
  </footer>
</body>
</html>