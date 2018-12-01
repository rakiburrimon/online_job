<?php 	
if (!isset($_SESSION)) session_start();
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
		$job_seeker_image 	= mysqli_real_escape_string($conn,$_POST['job_seeker_image']);

		$sql= "SELECT * FROM job_seeker WHERE job_seeker_name='$job_seeker_name' AND job_seeker_address='$job_seeker_address' AND job_seeker_career_objective='$job_seeker_career_objective' AND job_seeker_gender='$job_seeker_gender'AND image='$image' AND job_seeker_id!='".$_SESSION['job_seeker_id']."'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE job_seeker SET job_seeker_id=$job_seeker_id, job_seeker_name='$job_seeker_name', job_seeker_email='$job_seeker_email', job_seeker_contact='$job_seeker_contact', job_seeker_address='$job_seeker_address', job_seeker_career_objective='$job_seeker_career_objective', job_seeker_job_profile='$job_seeker_job_profile', job_seeker_gender='$job_seeker_gender', image='$image' WHERE job_seeker_id='".$_SESSION['job_seeker_id']."'";

			$qry= mysqli_query($conn,$sql);

			header("location: ");
			}
	}

?>
	
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Update Account Info.</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">

								<?php
									

									//$job_seeker_id	=$_GET['job_seeker_id'];
									$q = "SELECT * FROM job_seeker WHERE job_seeker_id = '".$_SESSION['job_seeker_id']."' ";
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
									<label for="job_seeker_gender">Gender: </label>
									<input type="text" name="job_seeker_gender" id="job_seeker_gender" class="form-control" value="<?php echo $res['job_seeker_gender']; ?>"/>
								</div>
								<div class="form-group">									
									<input type="" name="image" id="image" class="form-control" value="<?php echo $res['image']; ?>"/>
								</div>
								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>