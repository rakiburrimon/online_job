<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$experience_id	=$_GET['experience_id'];

		$experience_duration 		= mysqli_real_escape_string($conn,$_POST['experience_duration']);
		$experience_organization 		= mysqli_real_escape_string($conn,$_POST['experience_organization']);
		$designation 	= mysqli_real_escape_string($conn,$_POST['designation']);

		$sql= "SELECT * FROM experience WHERE experience_duration='$experience_duration' AND experience_organization='$experience_organization' AND designation='$designation' AND experience_id!='".$_SESSION['experience_id']."'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE experience SET experience_id=$experience_id, experience_duration='$experience_duration', experience_organization='$experience_organization', designation='$designation' WHERE experience_id='$experience_id'";

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
						<h3>Update Experience Info.</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">

								<?php
									$experience_id	=$_GET['experience_id'];
									$q = "SELECT * FROM experience WHERE experience_id = '$experience_id'";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="experience_duration">Duration: </label>
									<input type="text" name="experience_duration" id="experience_duration" class="form-control" required="" value="<?php echo $res['experience_duration']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="experience_organization">Organization: </label>
									<input type="text" name="experience_organization" id="experience_organization" class="form-control" required="" value="<?php echo $res['experience_organization']; ?>"/>
								</div>
								<div class="form-group">
									<label for="designation">Designation: </label>
									<input type="text" name="designation" id="designation" class="form-control" required="" value="<?php echo $res['designation']; ?>"/>
								</div>

								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>