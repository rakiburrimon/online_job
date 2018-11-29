<?php 	
if (!isset($_SESSION)) session_start();
?>
			<style>
				
			</style>

			<div class="col-md-9 hidden-print">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Account Info</h3>
					</div>
					<div class="panel-body">
						<div style="margin: 0 auto;">

							<table class="table table-striped">
								<h3>Personal Details</h3>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Address</th>
									<th>Career Objective</th>
									<th>Gender</th>
									<th>Image</th>
									<th></th>
									<th></th>
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
									<td><?php echo $res['job_seeker_gender']; ?></td>
									<td><?php echo $res['image']; ?></td>
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
									<th></th>
									<th></th>
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
									<td><a class="btn btn-success" name="update" href=" ?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Update</a></td>
									<td><a class="btn btn-success" href=" ?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Delete</a></td>

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
									<th></th>
									<th></th>
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
									<td><a class="btn btn-success" name="update" href=" ?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Update</a></td>
									<td><a class="btn btn-success" href=" ?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Delete</a></td>

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
									<th></th>
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
									<td><a class="btn btn-success" name="update" href=" ?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Update</a></td>
									<td><a class="btn btn-success" href=" ?job_seeker_id=<?php echo $res['job_seeker_id']; ?>">Delete</a></td>

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

