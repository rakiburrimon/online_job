<?php
session_start();
if(!isset($_SESSION["job_seeker_id"])){
	header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$reference_id	=$_GET['reference_id'];

		$name 		= mysqli_real_escape_string($conn,$_POST['name']);
		$designation 	= mysqli_real_escape_string($conn,$_POST['designation']);
		$company 		= mysqli_real_escape_string($conn,$_POST['company']);
		$address 		= mysqli_real_escape_string($conn,$_POST['address']);
		$email 		= mysqli_real_escape_string($conn,$_POST['email']);
		$phone 	= mysqli_real_escape_string($conn,$_POST['phone']);
		$reference_type 	= mysqli_real_escape_string($conn,$_POST['reference_type']);

		$sql= "SELECT * FROM reference WHERE name='$name' AND designation='$designation'  AND company='$company' AND address='$address' AND email='$email' AND phone='$phone' AND reference_type='$reference_type' AND reference_id!='$reference_id'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE reference SET reference_id=$reference_id, name='$name', designation='$designation',company='$company', address='$address',email='$email', phone='$phone', reference_type='$reference_type' WHERE reference_id='$reference_id'";

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
						<h3>Update Reference Info.</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">

								<?php
									$reference_id	=$_GET['reference_id'];
									$q = "SELECT * FROM reference WHERE reference_id = '$reference_id'";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="name">Name: </label>
									<input type="text" name="name" id="name" class="form-control" required="" value="<?php echo $res['name']; ?>" />
								</div>
								<div class="form-group">
									<label for="designation">Designation: </label>
									<input type="text" name="designation" id="designation" class="form-control" value="<?php echo $res['designation']; ?>"/>
								</div>								
								<div class="form-group">
									<label for="company">Organization: </label>
									<input type="text" name="company" id="company" class="form-control" value="<?php echo $res['company']; ?>"/>
								</div>
								<div class="form-group">
									<label for="address">Address: </label>
									<input type="text" name="address" id="address" class="form-control" value="<?php echo $res['address']; ?>"/>
								</div>
								<div class="form-group">
									<label for="email">Email: </label>
									<input type="text" name="email" id="email" class="form-control" value="<?php echo $res['email']; ?>"/>
								</div>
								<div class="form-group">
									<label for="phone">Organization: </label>
									<input type="text" name="phone" id="phone" class="form-control" value="<?php echo $res['phone']; ?>"/>
								</div>
								<div class="form-group">
    								<label for="comment">Reference Type</label>
    									<select class="form-control rqun" style="width:100%" title="Reference Type" name="reference_type">
                        					<option value="<?php echo $res['reference_type']; ?>"><?php echo $res['reference_type']; ?></option>
                        					<option value="Relative">Relative</option>
                        					<option value="Family Friend">Family Friend</option>
                        					<option value="Academic">Academic</option>
                        					<option value="Professional">Professional</option>
                        					<option value="Other">Other</option>
    
  								</div>
								<input class="btn btn-outline-primary btn-lg btn-block" type="hidden" value="Submit">
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>