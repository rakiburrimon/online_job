<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$job_seeker_id	=$_GET['job_seeker_id'];

		$job_seeker_name 		= mysqli_real_escape_string($conn,$_POST['job_seeker_name']);
		$job_seeker_email 		= mysqli_real_escape_string($conn,$_POST['job_seeker_email']);
		$job_seeker_contact 	= mysqli_real_escape_string($conn,$_POST['job_seeker_contact']);
		$job_seeker_address 	= mysqli_real_escape_string($conn,$_POST['job_seeker_address']);
		$job_seeker_career_objective 	= mysqli_real_escape_string($conn,$_POST['job_seeker_career_objective']);
		$job_seeker_job_profile 	= mysqli_real_escape_string($conn,$_POST['job_seeker_job_profile']);
		$job_seeker_gender 	= mysqli_real_escape_string($conn,$_POST['job_seeker_gender']);
		$job_seeker_type 	= mysqli_real_escape_string($conn,$_POST['job_seeker_type']);
		$job_seeker_status 	= mysqli_real_escape_string($conn,$_POST['job_seeker_status']);

		$sql= "SELECT * FROM job_seeker WHERE job_seeker_name='$job_seeker_name' AND job_seeker_address='$job_seeker_address' AND job_seeker_career_objective='$job_seeker_career_objective' AND job_seeker_gender='$job_seeker_gender'AND job_seeker_type='$job_seeker_type' AND job_seeker_status='$job_seeker_status' AND job_seeker_id!=$job_seeker_id";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE job_seeker SET job_seeker_id=$job_seeker_id, job_seeker_name='$job_seeker_name', job_seeker_email='$job_seeker_email', job_seeker_contact='$job_seeker_contact', job_seeker_address='$job_seeker_address', job_seeker_career_objective='$job_seeker_career_objective', job_seeker_job_profile='$job_seeker_job_profile', job_seeker_gender='$job_seeker_gender', job_seeker_type='$job_seeker_type', job_seeker_status='$job_seeker_status' WHERE job_seeker_id=$job_seeker_id";

			$qry= mysqli_query($conn,$sql);
			$_SESSION['message'] = "Updated Successful";
			header("location: ");
			}
	}

?>
<head>
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

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
   </head>
</head>
<nav>
   <?php include "header.php"; ?>
  </nav>
	
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Update Account Info.</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 600px; margin: 0 auto;">

							<form action="" method="POST">

								<?php
									

									$job_seeker_id	=$_GET['job_seeker_id'];
									$q = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="job_seeker_name">Full Name: </label>
									<input type="text" name="job_seeker_name" id="job_seeker_name" class="form-control" required="" value="<?php echo $res['job_seeker_name']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="job_seeker_email">Email Address: </label>
									<input type="text" name="job_seeker_email" id="job_seeker_email" class="form-control" required="" value="<?php echo $res['job_seeker_email']; ?>"/>
								</div>
								<div class="form-group">
									<label for="job_seeker_contact">Contact: </label>
									<input type="text" name="job_seeker_contact" id="job_seeker_contact" class="form-control" required="" value="<?php echo $res['job_seeker_contact']; ?>"/>
								</div>
								<div class="form-group">
									<label for="job_seeker_address">Address: </label>
									<textarea type="text" name="job_seeker_address" id="job_seeker_address" class="form-control" rows="3" ><?php echo $res['job_seeker_address']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="job_seeker_career_objective">Career Objective: </label>
									<textarea type="text" name="job_seeker_career_objective" id="job_seeker_career_objective" class="form-control" rows="3" ><?php echo $res['job_seeker_career_objective']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="job_seeker_job_profile">Job Profile: </label>
									<textarea type="text" name="job_seeker_job_profile" id="job_seeker_job_profile" class="form-control" rows="3" ><?php echo $res['job_seeker_job_profile']; ?></textarea>
								</div>
								<div class="form-group">
    								<label for="comment">Job Seeker Gender</label>
    									<select class="form-control rqun" style="width:100%" title="Job Seeker Gender" name="job_seeker_gender">
                        					<option value="<?php echo $res['job_seeker_gender']; ?>"><?php echo $res['job_seeker_gender']; ?></option>
                        					<option value="Male">Male</option>
                        					<option value="Female">Female</option>
                        				</select>
  								</div>
								<div class="form-group">
    								<label for="comment">Job Seeker Type</label>
    									<select class="form-control rqun" style="width:100%" title="Job Seeker Type" name="job_seeker_type">
                        					<option value="<?php echo $res['job_seeker_type']; ?>"><?php echo $res['job_seeker_type']; ?></option>
                        					<option value="General">General</option>
                        					<option value="Special">Special</option>
                        				</select>
  								</div>
								<div class="form-group">
    								<label for="comment">Job Seeker Status</label>
    									<select class="form-control rqun" style="width:100%" title="Job Seeker Status" name="job_seeker_status">
                        					<option value="<?php echo $res['job_seeker_status']; ?>"><?php echo $res['job_seeker_status']; ?></option>
                        					<option value="Active">Active</option>
                        					<option value="Disable">Disable</option>
                        				</select>
  								</div>
								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>