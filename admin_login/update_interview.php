<?php
session_start();
if(!isset($_SESSION["employer_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$interview_id	=$_GET['interview_id'];

		$interview_date 		= mysqli_real_escape_string($conn,$_POST['interview_date']);
		$interview_place 		= mysqli_real_escape_string($conn,$_POST['interview_place']);

		$sql= "SELECT * FROM interview WHERE interview_date='$interview_date' AND interview_place='$interview_place' AND interview_id!='$interview_id'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE interview SET interview_id=$interview_id, interview_date='$interview_date', interview_place='$interview_place' WHERE interview_id='$interview_id'";

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
						<h3>Manage Interview</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">

								<?php
									$interview_id	=$_GET['interview_id'];
									$q = "SELECT * FROM interview WHERE interview_id = '$interview_id'";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="interview_date">Interview Date: </label>
									<input type="date" rows="2" name="interview_date" id="interview_date" class="form-control" value="<?php echo $res['interview_date']; ?>" />
								</div>								
								<div class="form-group">
									<label for="interview_place">Interview Place: </label>
									<input type="text" name="interview_place" id="interview_place" class="form-control" value="<?php echo $res['interview_place']; ?>"/>
								</div>
								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>