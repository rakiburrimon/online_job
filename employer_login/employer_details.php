<?php 
session_start();
if(!isset($_SESSION["employer_id"])){
  header("Location:Login.php");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
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
<body>
	<nav>
   <?php include "header.php"; ?>
  </nav>
<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Employer Details</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">
							<div class="container-fluid bg-light border border-primary">

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM employer Where employer_id = '".$_SESSION['employer_id']."'";
										 
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<img src="employer_logo/<?php echo $res['logo'] ?>"  width="240px" class="rounded" alt="User Icon" aria-expanded="false">

								<div class="form-group">
									<p class="text-primary">Company Name: </p>
									<td><?php echo $res['company_name']; ?> </td>
									
								</div>								
								<div class="form-group">
									<p class="text-primary">Location: </p>
									<p><?php echo $res['company_location']; ?> </p>
								</div>
								<div class="form-group">
									<p class="text-primary">Company Description: </p>
									<td><?php echo $res['company_description']; ?> </td>
								</div>
								<p class="text-primary">Business Description: </p>
									<td><?php echo $res['business_description']; ?> </td>
								<div class="form-group">
									<p class="text-primary">Industry Type: </p>
									<td><?php echo $res['industry_type']; ?> </td>
								</div>
							</div>
								<div class="form-group">
									<p class="text-primary">Contact Person's Name: </p>
									<td><?php echo $res['contact_person_name']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Email: </p>
									<td><?php echo $res['contact_person_email']; ?> </td>
								</div>
								<div class="form-group">
									<p class="text-primary">Cell: </p>
									<td><?php echo $res['employer_contact']; ?> </td>
								</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
   <?php include "footer.php"; ?>
  </footer>
	</body>