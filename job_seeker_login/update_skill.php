<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$skill_id=$_GET['skill_id'];

		$skill_name 		= mysqli_real_escape_string($conn,$_POST['skill_name']);
		$skill_description 		= mysqli_real_escape_string($conn,$_POST['skill_description']);

		$sql= "SELECT * FROM skill WHERE skill_name='$skill_name' AND skill_description='$skill_description' AND skill_id!='".$_SESSION['skill_id']."'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE skill SET skill_id=$skill_id, skill_name='$skill_name', skill_description='$skill_description' WHERE skill_id='$skill_id'";

			$qry= mysqli_query($conn,$sql);
			$_SESSION['message'] = "Update Successful";

			header("location: ");
			}
	}

?>
	
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Update Skill Info.</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">

								<?php
									$skill_id	=$_GET['skill_id'];
									$q = "SELECT * FROM skill WHERE skill_id = '$skill_id'";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="skill_name">Skill Name: </label>
									<input type="text" name="skill_name" id="skill_name" class="form-control" required="" value="<?php echo $res['skill_name']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="skill_description">Skill Description: </label>
									<input type="text" name="skill_description" id="skill_description" class="form-control" required="" value="<?php echo $res['skill_description']; ?>"/>
								</div>
								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>