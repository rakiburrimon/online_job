<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../assets/css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <title>Send Email</title>
  </head>

<body>
	<form action="emailsend.php" method="Post">
		
		<?php 
		$to= $_GET['employer_id'];
					include 'connection.php';

					$q = "SELECT * FROM employer Where employer_id = $to";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<input type="text" readonly class="form-control" name="contact_person_email" value="<?php echo $res['contact_person_email']; } ?>">
<div class="form-group">
    <label for="name">Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="Subject">
    
  </div>
<div class="form-group">
    <label for="comment">Message</label>
    <textarea type="text" rows="5" class="form-control" name="message" placeholder="Message"></textarea>

								<?php 
										include 'connection.php';

										$q = "SELECT * FROM admin Where admin_id = '".$_SESSION['admin_id']."'";
										
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>
								<input type="text" class="form-control" readonly name="admin_email" value="<?php echo $res['admin_email']; } ?>">
								<button type="Submit">Send</button>

	</form>

</body>
<footer>
   <?php include "footer.php"; ?>
  </footer>

