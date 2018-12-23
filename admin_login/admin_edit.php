<?php 
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<?php 	
	include 'connection.php';
	if (isset($_POST['submit'])) {

		$admin_id	=$_GET['admin_id'];

		$admin_name 		= mysqli_real_escape_string($conn,$_POST['admin_name']);
		$admin_email 		= mysqli_real_escape_string($conn,$_POST['admin_email']);
		$admin_contact 	= mysqli_real_escape_string($conn,$_POST['admin_contact']);
		

		$sql= "SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_email='$admin_email' AND admin_contact='$admin_contact' AND admin_id!='".$_SESSION['admin_id']."'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Error !!";
		}
		else{

			$sql= "UPDATE admin SET admin_name='$admin_name', admin_email='$admin_email', admin_contact='$admin_contact' WHERE admin_id='".$_SESSION['admin_id']."'";

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
									

									//$admin_id	=$_GET['admin_id'];
									$q = "SELECT * FROM admin WHERE admin_id = '".$_SESSION['admin_id']."' ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>
								<div class="form-group">
									<label for="admin_name">Admin Name: </label>
									<input type="text" name="admin_name" id="admin_name" class="form-control" required="" value="<?php echo $res['admin_name']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="admin_email">Email: </label>
									<input type="text" name="admin_email" id="admin_email" class="form-control" required="" value="<?php echo $res['admin_email']; ?>"/>
								</div>
								<div class="form-group">
									<label for="admin_contact">Contact Number: </label>
									<input type="text" row="5" name="admin_contact" id="admin_contact" class="form-control" required="" value="<?php echo $res['admin_contact']; ?>"/>
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