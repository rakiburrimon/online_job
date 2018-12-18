<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
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

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="Container d-flex justify-content-center">
					<div class="panel-heading col-md-3">
						<h1>Account Info</h1>
					</div>
				</div>
					<div class="panel-body">
							<div class="container">
						<div>

							<table class="table table-striped">
								<h3>Personal Details</h3>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Address</th>
									<th>Career Objective</th>
									<th>Job Profile</th>
									<th>Gender</th>
									<th> Image</th>
								</tr>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM job_seeker Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<tr>
									<td><?php echo $res['job_seeker_name']; ?></td>
									<br>
									<td><?php echo $res['job_seeker_email']; ?></td>
									<td><?php echo $res['job_seeker_contact']; ?></td>
									<td><?php echo $res['job_seeker_address']; ?></td>
									<td><?php echo $res['job_seeker_career_objective']; ?></td>
									<td><?php echo $res['job_seeker_job_profile']; ?></td>
									<td><?php echo $res['job_seeker_gender']; ?></td>
									<td><img src="job_seeker_image/<?php echo $res['image'] ?>"  width="140px" class="rounded" alt="User Icon" aria-expanded="false"></td>
									<td><a class="btn btn-success" name="update" href="update_job_seeker.php?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Update</a></td>
									<td><a class="btn btn-success" href="cv_job_seeker.php?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Resume</a></td>

								</tr>

								<?php 
									}
								?>
																
							</table>
							<table class="table table-striped">
								<h3>Experience</h3>
								<tr>
									<th>Designation</th>
									<th>Organization</th>
									<th>Duration</th>
									<th><a class="btn btn-info" name="add" href="add_experience.php">Add</a></th>
								</tr>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM experience Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<tr>
									<td><?php echo $res['designation']; ?></td>
									<td><?php echo $res['experience_organization']; ?></td>
									<br>
									<td><?php echo $res['experience_duration']; ?></td>
									<td><a class="btn btn-success" href="update_experience.php?experience_id=<?php echo $res['experience_id']; ?>">Update</a></td>
									<td><a class="btn btn-danger" href="delete_experience.php?experience_id=<?php echo $res['experience_id']; ?>">Delete</a></td>

								</tr>

								<?php 
									}
								?>
																
							</table>
							<table class="table table-striped">
								<h3>Skills</h3>
								<tr>
									<th>Skill Name</th>
									<th>Skill Description</th>
									<th><a class="btn btn-info" name="add" href="add_skill.php">Add</a></th>
								</tr>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM skill Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<tr>
									<td><?php echo $res['skill_name']; ?></td>
									<br>
									<td><?php echo $res['skill_description']; ?></td>
									<td><a class="btn btn-success" name="update" href="update_skill.php?skill_id=<?php echo $res['skill_id']; ?>">Update</a></td>
									<td><a class="btn btn-danger" href="delete_skill.php?skill_id=<?php echo $res['skill_id']; ?>">Delete</a></td>

								</tr>

								<?php 
									}
								?>
																
							</table>
							<table class="table table-striped">
								<h3>Qualification</h3>
								<tr>
									<th>Degree</th>
									<th>Result</th>
									<th>Institution</th>
									<th><a class="btn btn-info" name="add" href="add_qualification.php">Add</a></th>
								</tr>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM qualification Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<tr>
									<td><?php echo $res['qualification_name']; ?></td>
									<br>
									<td><?php echo $res['qualification_result']; ?></td>
									<td><?php echo $res['qualification_institution']; ?></td>

									<td><a class="btn btn-success" name="update" href="update_qualification.php?qualification_id=<?php echo $res['qualification_id']; ?>">Update</a></td>
									<td><a class="btn btn-danger" href="delete_qualification.php?qualification_id=<?php echo $res['qualification_id']; ?>">Delete</a></td>

								</tr>

								<?php 
									}
								?>
																
							</table>
							<table class="table table-striped">
								<h3>Reference</h3>
								<tr>
									<th>Name</th>
									<th>Desiganation</th>
									<th>Company</th>
									<th>Address</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Reference Type</th>
									<th><a class="btn btn-info" name="add" href="add_reference.php">Add</a></th>

								</tr>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM reference Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<tr>
									<td><?php echo $res['name']; ?></td>
									<br>
									<td><?php echo $res['designation']; ?></td>
									<td><?php echo $res['company']; ?></td>
									<td><?php echo $res['address']; ?></td>
									<td><?php echo $res['email']; ?></td>
									<td><?php echo $res['phone']; ?></td>
									<td><?php echo $res['reference_type']; ?></td>

									<td><a class="btn btn-success" name="update" href="update_reference.php?reference_id=<?php echo $res['reference_id']; ?>">Update</a></td>
									<td><a class="btn btn-danger" href="delete_reference.php?reference_id=<?php echo $res['reference_id']; ?>">Delete</a></td>

								</tr>

								<?php 
									}
								?>
																
							</table>
							
						</div>
					</div>
					</div>
				</div>
			</div>

		</div>

