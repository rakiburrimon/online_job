<?php
session_start();
if(!isset($_SESSION["admin_id"])){
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
			<div class="col-md-8"></div>

			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Personal Details</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM job_seeker Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary">Full Name: </p>
									<td><?php echo $res['job_seeker_name']; ?> </td>
									
								</div>								
								<div class="form-group">
									<h4>Email: </h4>
									<p><?php echo $res['job_seeker_email']; ?> </p>
								</div>
								<div class="form-group">
									<p class="text-primary">Contact: </p>
									<td><?php echo $res['job_seeker_contact']; ?> </td>
								</div>
								<p class="text-primary">Address: </p>
									<td><?php echo $res['job_seeker_address']; ?> </td>
								<div class="form-group">
									<p class="text-primary">Career Objective: </p>
									<td><?php echo $res['job_seeker_career_objective']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Job Profile: </p>
									<td><?php echo $res['job_seeker_job_profile']; ?> </td>
								</div>
								<p class="text-primary">Gender: </p>
									<td><?php echo $res['job_seeker_gender']; ?> </td>
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

										$q = "SELECT * FROM experience Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary">Designation: </p>
									<td><?php echo $res['designation']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary">Organization: </p>
									<td><?php echo $res['experience_organization']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Duration: </p>
									<td><?php echo $res['experience_duration']; ?> </td>
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

										$q = "SELECT * FROM skill Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary">Skill Name: </p>
									<td><?php echo $res['skill_name']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary">Skill Description: </p>
									<td><?php echo $res['skill_description']; ?> </td>
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

										$q = "SELECT * FROM qualification Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary">Qualification: </p>
									<td><?php echo $res['qualification_name']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary">Result: </p>
									<td><?php echo $res['qualification_result']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Institution: </p>
									<td><?php echo $res['qualification_institution']; ?> </td>
								</div>
								<?php } ?>
						</div>
					</div>
					<div class="panel-heading">
						<h3>Reference</h3>
					</div>
					<div class="panel-body" width="50%">
						<div style="max-width: 40px; margin: 0 auto;">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM reference Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="form-group">
									<p class="text-primary">Full Name: </p>
									<td><?php echo $res['name']; ?> </td>
								</div>								
								<div class="form-group">
									<p class="text-primary">Designation: </p>
									<td><?php echo $res['designation']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Company: </p>
									<td><?php echo $res['company']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Address: </p>
									<td><?php echo $res['address']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Email: </p>
									<td><?php echo $res['email']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Phone: </p>
									<td><?php echo $res['phone']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Reference Type: </p>
									<td><?php echo $res['reference_type']; ?> </td>>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
   <?php include "footer.php"; ?>
  </footer>
	</body>