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
							<div >
						<div class="container col-md-6 justify-content-center">

							<div class="col-md-6 justify-content-center">
								<h3>Personal Details</h3>
								<?php 
										include 'connection.php';

										$q = "SELECT * FROM job_seeker Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<td><a class="btn btn-success" name="Details" href="cv_job_seeker.php?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Check Resume..</a>  <a class="btn btn-success" name="update" href="update_job_seeker.php?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Update</a></td>
								<p></p>
								<br>
								<div class="form-group">
								<img src="../job_seeker_login/job_seeker_image/<?php echo $res['image'] ?>"  width="110px" class="rounded" alt="User Icon" aria-expanded="false">
								</div>
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
								<?php echo "<br>"; ?>	<td><a class="btn btn-success" name="update" href="update_job_seeker.php?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Update</a></td>
								

								</div>

								<?php 
									}
									echo "<br>";
								?>
																
							</div>
							<div class="col-md-6 justify-content-center container">
								<h3 class="container d-flex justify-content-center">Experience</h3>
									<br>
									<div class="d-flex justify-content-center"><a class="btn btn-info" name="add" href="add_experience.php">Add Experience</a></div>
									<br>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM experience Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="border border-primary rounded col-md-12 justify-content-center container">
									<div class="col-md-12">
									<h5>Position: <?php echo $res['designation']; ?></h5>
									<h5>Organization Name: <?php echo $res['experience_organization']; ?></h5>
									<h5>Duration: <?php echo $res['experience_duration']; ?></h5>
								</div>
								<div class="justify-content-center">
									<h5><a class="btn btn-success" href="update_experience.php?experience_id=<?php echo $res['experience_id']; ?>">Update</a>
									<a class="btn btn-danger" href="delete_experience.php?experience_id=<?php echo $res['experience_id']; ?>">Delete</a></h5>
								</div>
								</div>

								<?php 
								echo "<br>";
									}
								?>
																
							</div>
							<div class="col-md-6 justify-content-center container">
								<h3 class="container d-flex justify-content-center">Skill</h3>
									<br>
									<div class="d-flex justify-content-center"><a class="btn btn-info" name="add" href="add_skill.php">Add Skill</a></div>
									<br>
								<?php 
										include 'connection.php';

										$q = "SELECT * FROM skill Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="border border-primary rounded col-md-12 justify-content-center container">
									<div class="col-md-12">
									<h5>Skill Name: <?php echo $res['skill_name']; ?></h5>
									<h5>Skill Description: <?php echo $res['skill_description']; ?></h5>
									<div class="justify-content-center">
									<h5><a class="btn btn-success" name="update" href="update_skill.php?skill_id=<?php echo $res['skill_id']; ?>">Update</a> <a class="btn btn-danger" href="delete_skill.php?skill_id=<?php echo $res['skill_id']; ?>">Delete</a></h5>
								</div>
								</div>
							</div>
								<?php 
								echo "<br>";
									}
									
								?>
									</div>							
							<div class="col-md-6 justify-content-center container">
								<h3 class="container d-flex justify-content-center">Qualification</h3>
									<br>
									<div class="d-flex justify-content-center"><a class="btn btn-info" name="add" href="add_qualification.php">Add Qualification</a></div>
									<br>
								<?php 
										include 'connection.php';

										$q = "SELECT * FROM qualification Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>
									<div class="border border-primary rounded col-md-12 justify-content-center container">
									<div class="col-md-12">
									<h5>Qualification: <?php echo $res['qualification_name']; ?></h5>
									<br>
									<h5>Result <?php echo $res['qualification_result']; ?></h5>
									<h5>Institution: <?php echo $res['qualification_institution']; ?></h5>

									<h5><a class="btn btn-success" name="update" href="update_qualification.php?qualification_id=<?php echo $res['qualification_id']; ?>">Update</a>  <a class="btn btn-danger" href="delete_qualification.php?qualification_id=<?php echo $res['qualification_id']; ?>">Delete</a></h5>
								</div>
							</div>
								<?php 
								echo "<br>";
									}
									
								?>
							</div>
							<div class="col-md-6 justify-content-center container">
								<h3 class="container d-flex justify-content-center">Reference</h3>
									<br>
									<div class="d-flex justify-content-center"><a class="btn btn-info" name="add" href="add_reference.php">Add Reference</a></div>
									<br>
								<?php 
										include 'connection.php';

										$q = "SELECT * FROM reference Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<div class="border border-primary rounded col-md-12 justify-content-center container">
									<div class="col-md-12">
									<h5>Name: <?php echo $res['name']; ?></h5>
									<br>
									<h5>Designation: <?php echo $res['designation']; ?></h5>
									<h5>Company: <?php echo $res['company']; ?></h5>
									<h5>Address: <?php echo $res['address']; ?></h5>
									<h5>Email: <?php echo $res['email']; ?></h5>
									<h5>Phone: <?php echo $res['phone']; ?></h5>
									<h5>Reference Type: <?php echo $res['reference_type']; ?></h5>

									<h5><a class="btn btn-success" name="update" href="update_reference.php?reference_id=<?php echo $res['reference_id']; ?>">Update</a>  <a class="btn btn-danger" href="delete_reference.php?reference_id=<?php echo $res['reference_id']; ?>">Delete</a></h5>

								</div>
							</div>

								<?php 
									}
								?>
																
							</div>
							
						</div>
					</div>
					</div>
				</div>
			</div>
<?php 
		echo "<br>";								
?>
		</div>
<footer>
   <?php include "footer.php"; ?>
  </footer>
