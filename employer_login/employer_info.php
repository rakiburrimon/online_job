<?php 
session_start();
if(!isset($_SESSION["employer_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$employer_id	=$_GET['employer_id'];

		$company_name 		= mysqli_real_escape_string($conn,$_POST['company_name']);
		$company_location 		= mysqli_real_escape_string($conn,$_POST['company_location']);
		$company_description 	= mysqli_real_escape_string($conn,$_POST['company_description']);
		$business_description 	= mysqli_real_escape_string($conn,$_POST['business_description']);
		$industry_type 	= mysqli_real_escape_string($conn,$_POST['industry_type']);
		$contact_person_name 	= mysqli_real_escape_string($conn,$_POST['contact_person_name']);
		$contact_person_email 	= mysqli_real_escape_string($conn,$_POST['contact_person_email']);
		$employer_contact 	= mysqli_real_escape_string($conn,$_POST['employer_contact']);
		$image = $_FILES["image"]["name"];

		$sql= "SELECT * FROM employer WHERE company_name='$company_name' AND business_description='$business_description' AND industry_type='$industry_type' AND contact_person_email='$contact_person_email' AND employer_contact='$employer_contact' AND logo='$image' AND employer_id!='".$_SESSION['employer_id']."'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE employer SET company_name='$company_name', company_location='$company_location', company_description='$company_description', business_description='$business_description', industry_type='$industry_type', contact_person_name='$contact_person_name', contact_person_email='$contact_person_email', employer_contact='$employer_contact',logo='$image' WHERE employer_id='".$_SESSION['employer_id']."'";

			$target_dir = "employer_logo/";
   			$target_file = $target_dir . basename($_FILES["image"]["name"]);
   			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);

			$qry= mysqli_query($conn,$sql);
			$_SESSION['message'] = "Update Successful";

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

							<form action="" method="POST" enctype="multipart/form-data">

								<?php
									

									//$employer_id	=$_GET['employer_id'];
									$q = "SELECT * FROM employer WHERE employer_id = '".$_SESSION['employer_id']."' ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>
								<div class="form-group">
								<img src="employer_logo/<?php echo $res['logo'] ?>"  width="140px" class="rounded" alt="User Icon" aria-expanded="false">
								<input type="file" name="image">
							</div>
								<div class="form-group">
									<label for="company_name">Company Name: </label>
									<input type="text" name="company_name" id="company_name" class="form-control" required="" value="<?php echo $res['company_name']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="company_location">Location: </label>
									<input type="text" name="company_location" id="company_location" class="form-control" required="" value="<?php echo $res['company_location']; ?>"/>
								</div>
								<div class="form-group">
									<label for="company_description">Company Description: </label>
									<input type="text" row="5" name="company_description" id="company_description" class="form-control" required="" value="<?php echo $res['company_description']; ?>"/>
								</div>
								<div class="form-group">
									<label for="business_description">Business Description: </label>
									<textarea type="text" name="business_description" id="business_description" class="form-control" rows="3" ><?php echo $res['business_description']; ?></textarea>
								</div>
								<div class="form-group">
    								<label for="comment">Industry Type</label>
    									<select class="form-control rqun" style="width:100%" title="Industry Type" name="industry_type">
                        					<option value="<?php echo $res['industry_type']; ?>"><?php echo $res['industry_type']; ?></option>
                        					<option value="Agro based Industry">Agro based Industry</option>
                        					<option value="Archi./Engg./Construction">Archi./Engg./Construction</option>
                        					<option value="Automobile/Industrial Machine">Automobile/Industrial Machine</option>
                        					<option value="Bank/Non-Bank Fin. Institution">Bank/Non-Bank Fin. Institution</option>
                        					<option value="Energy/Power/Fuel">Energy/Power/Fuel</option>
                        					<option value="Education">Education</option>
                        					<option value="Garments/Textile">Garments/Textile</option>
                        					<option value="Pharmaceuticals">Pharmaceuticals</option>
                        					<option value="Hospital/ Diagnostic Center">Hospital/ Diagnostic Center</option>
                        					<option value="Information Technology (IT)">Information Technology (IT)</option>
                        					<option value="Media / Advertising/ Event Mgt.">Media / Advertising/ Event Mgt.</option>
                        					<option value="Real Estate/Development">Real Estate/Development</option>
                        					<option value="Food/Beverage Industry">Food/Beverage Industry</option>
                        					<option value="Security Service">Security Service</option>
                        					<option value="Others">Others</option>
                        				</select>
    
  								</div>
								<div class="form-group">
									<label for="contact_person_name">Contact Person's Name: </label>
									<input type="text" name="contact_person_name" id="contact_person_name" class="form-control" value="<?php echo $res['contact_person_name']; ?>" />
								</div>
								<div class="form-group">
									<label for="contact_person_email">Contact Person's Email: </label>
									<input type="text" name="contact_person_email" id="contact_person_email" class="form-control" value="<?php echo $res['contact_person_email']; ?>"/>
								</div>
								<div class="form-group">
									<label for="employer_contact">Cell: </label>
									<input type="text" name="employer_contact" id="employer_contact" class="form-control" value="<?php echo $res['employer_contact']; ?>"/>
								</div>
								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
		<footer>
   <?php include "footer.php"; ?>
  </footer>