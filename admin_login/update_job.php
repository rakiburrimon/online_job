<?php 
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$job_id	=$_GET['job_id'];

		$job_title 		= mysqli_real_escape_string($conn,$_POST['job_title']);
		$job_context 		= mysqli_real_escape_string($conn,$_POST['job_context']);
		$job_responsibilities 	= mysqli_real_escape_string($conn,$_POST['job_responsibilities']);
		$educaqtional_requirement 	= mysqli_real_escape_string($conn,$_POST['educaqtional_requirement']);
		$job_experience_required 	= mysqli_real_escape_string($conn,$_POST['job_experience_required']);
		$job_location 	= mysqli_real_escape_string($conn,$_POST['job_location']);
		$job_salary 	= mysqli_real_escape_string($conn,$_POST['job_salary']);
		$job_application_deadline 	= mysqli_real_escape_string($conn,$_POST['job_application_deadline']);
		$employer_id 	= mysqli_real_escape_string($conn,$_POST['employer_id']);

		$sql= "SELECT * FROM job WHERE job_title='$job_title' AND educaqtional_requirement='$educaqtional_requirement' AND job_experience_required='$job_experience_required' AND job_salary='$job_salary'AND job_application_deadline='$job_application_deadline' AND employer_id='$employer_id' AND job_id!=$job_id";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE job SET job_id=$job_id, job_title='$job_title', job_context='$job_context', job_responsibilities='$job_responsibilities', educaqtional_requirement='$educaqtional_requirement', job_experience_required='$job_experience_required', job_location='$job_location', job_salary='$job_salary', job_application_deadline='$job_application_deadline', employer_id='$employer_id' WHERE job_id=$job_id";

			$qry= mysqli_query($conn,$sql);

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
									$job_id	=$_GET['job_id'];

									//$job_id	=$_GET['job_id'];
									$q = "SELECT * FROM job WHERE job_id = $job_id ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="job_title">Job Title: </label>
									<input type="text" name="job_title" id="job_title" class="form-control" required="" value="<?php echo $res['job_title']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="job_context">Job Context: </label>
									<input type="text" name="job_context" id="job_context" class="form-control" required="" value="<?php echo $res['job_context']; ?>"/>
								</div>
								<div class="form-group">
									<label for="job_responsibilities">Responsibilities: </label>
									<input type="text" name="job_responsibilities" id="job_responsibilities" class="form-control" required="" value="<?php echo $res['job_responsibilities']; ?>"/>
								</div>
								<div class="form-group">
									<label for="educaqtional_requirement">Educational Requirements: </label>
									<textarea type="text" name="educaqtional_requirement" id="educaqtional_requirement" class="form-control" rows="3" ><?php echo $res['educaqtional_requirement']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="job_experience_required">Experience Required: </label>
									<textarea type="text" name="job_experience_required" id="job_experience_required" class="form-control" rows="3" ><?php echo $res['job_experience_required']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="job_location">Job Location: </label>
									<textarea type="text" name="job_location" id="job_location" class="form-control" rows="1" ><?php echo $res['job_location']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="job_salary">Salary: </label>
									<input type="text" name="job_salary" id="job_salary" class="form-control" value="<?php echo $res['job_salary']; ?>"/>
								</div>
								<div class="form-group">
									<label for="job_application_deadline">Application Deadline: </label>
									<input type="date" name="job_application_deadline" id="job_application_deadline" class="form-control" value="<?php echo $res['job_application_deadline']; ?>"/>
								</div>
								<div class="form-group">
    								<label for="comment">Company Name</label>
    									<select class="form-control rqun" style="width:100%" title="employer_id" name="employer_id">
                        						<option value="<?php echo $res['employer_id'] ?>">Select Company</option>
                        				<?php
                        				include_once ("connection.php");
                        				$query="SELECT * FROM `employer`";
                        				var_dump($conn);
                        				$result=mysqli_query($conn,$query);
                        				while ($row=mysqli_fetch_assoc($result)){
                        					echo "<option value='".$row["employer_id"]."'>".$row["company_name"]."</option>";
                        				}
                        				?>
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