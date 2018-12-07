<?php 
session_start();
if(!isset($_SESSION["employer_id"])){
  header("Location:Login.php");
}
?>
<head>
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
</head>
<nav>
   <?php include "header.php"; ?>
  </nav>
<body>
<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Personal Details</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

								<?php 
								$job_seeker_id=$_GET['job_seeker_id'];
										include 'connection.php';

										$q = "SELECT * FROM job_seeker Where job_seeker_id = $job_seeker_id";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary"></p>
									<td>Full Name: <?php echo $res['job_seeker_name']; ?> </td>
									
								</div>								
								<div class="form-group">
									<h4></h4>
									<p>Email: <?php echo $res['job_seeker_email']; ?> </p>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Contact: <?php echo $res['job_seeker_contact']; ?> </td>
								</div>
								<p class="text-primary"></p>
									<td>Address: <?php echo $res['job_seeker_address']; ?> </td>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Career Objective: <?php echo $res['job_seeker_career_objective']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Job Profile: <?php echo $res['job_seeker_job_profile']; ?> </td>
								</div>
								<p class="text-primary"></p>
									<td>Gender: <?php echo $res['job_seeker_gender']; ?> </td>
								<?php } ?>
						</div>
					</div>
					<div class="panel-heading">
					<h3>Experience</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM experience Where job_seeker_id = $job_seeker_id";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary"></p>
									<td>Designation: <?php echo $res['designation']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Organization: <?php echo $res['experience_organization']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Duration: <?php echo $res['experience_duration']; ?> </td>
								</div>
								<?php } ?>
						</div>
					</div>
					<div class="panel-heading">
						<h3>Skills</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM skill Where job_seeker_id = $job_seeker_id";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary"></p>
									<td>Skill Name: <?php echo $res['skill_name']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Skill Description: <?php echo $res['skill_description']; ?> </td>
								</div>
								<?php } ?>
						</div>
					</div>
					<div class="panel-heading">
						<h3>Educational Qualification</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM qualification Where job_seeker_id = $job_seeker_id";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary"></p>
									<td>Qualification: <?php echo $res['qualification_name']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Result: <?php echo $res['qualification_result']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Institution: <?php echo $res['qualification_institution']; ?> </td>
								</div>
								<?php } ?>
						</div>
					</div>
					<div class="panel-heading">
						<h3>Reference</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM reference Where job_seeker_id = $job_seeker_id";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary"></p>
									<td>Full Name: <?php echo $res['name']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Designation: <?php echo $res['designation']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Company: <?php echo $res['company']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Address: <?php echo $res['address']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Email: <?php echo $res['email']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Phone: <?php echo $res['phone']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary"></p>
									<td>Reference Type: <?php echo $res['reference_type']; ?> </td>>
								</div>
							<?php } ?>
						</div>
						<?php 
								$job_seeker_id=$_GET['job_seeker_id'];
										include 'connection.php';

										$q = "SELECT * FROM job_seeker Where job_seeker_id = $job_seeker_id";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>
								<td><a class="btn btn-success" name="Details" href=" email.php?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Send Email..</a></td>
								<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</body>