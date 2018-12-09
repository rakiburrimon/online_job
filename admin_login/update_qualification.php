<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$qualification_id	=$_GET['qualification_id'];

		$qualification_name 		= mysqli_real_escape_string($conn,$_POST['qualification_name']);
		$qualification_institution 		= mysqli_real_escape_string($conn,$_POST['qualification_institution']);
		$qualification_result 	= mysqli_real_escape_string($conn,$_POST['qualification_result']);

		$sql= "SELECT * FROM qualification WHERE qualification_name='$qualification_name' AND qualification_institution='$qualification_institution' AND qualification_result='$qualification_result' AND qualification_id!='".$_SESSION['qualification_id']."'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE qualification SET qualification_id=$qualification_id, qualification_name='$qualification_name', qualification_institution='$qualification_institution', qualification_result='$qualification_result' WHERE qualification_id='$qualification_id'";

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
									$qualification_id	=$_GET['qualification_id'];
									$q = "SELECT * FROM qualification WHERE qualification_id = '$qualification_id'";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="qualification_name">Qualification: </label>
									<input type="text" name="qualification_name" id="qualification_name" class="form-control" value="<?php echo $res['qualification_name']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="qualification_institution">Institution: </label>
									<input type="text" name="qualification_institution" id="qualification_institution" class="form-control" value="<?php echo $res['qualification_institution']; ?>"/>
								</div>
								<div class="form-group">
									<label for="qualification_result">Result: </label>
									<input type="text" name="qualification_result" id="qualification_result" class="form-control" value="<?php echo $res['qualification_result']; ?>"/>
								</div>

								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>