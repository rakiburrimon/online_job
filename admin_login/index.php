<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<html>
   
   <head>
      <title>Welcome </title>
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
   </head>
  <body>
  <!-- Navbar -->
  <nav>
   <?php include "header.php"; ?>
  </nav>

<div class="content">
        <div class="row">
          <div class="col-lg-3">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Job Seekers</h5>
                <h4 class="card-title">Total</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_seeker_id FROM job_seeker ORDER BY job_seeker_id")) {

                            $row_cnt = mysqli_num_rows($result);

                             
                     ?>
                  <h1 class="text-primary"><?php echo "$row_cnt";


                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></h1>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Employers</h5>
                <h4 class="card-title">Total</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT employer_id FROM employer ORDER BY employer_id")) {

                            $row_cnt = mysqli_num_rows($result);

                             
                     ?>
                  <h1 class="text-primary"><?php echo "$row_cnt";


                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></h1>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Jobs</h5>
                <h4 class="card-title">Total</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_id FROM job ORDER BY job_id")) {

                            $row_cnt = mysqli_num_rows($result);

                             
                     ?>
                  <h1 class="text-primary"><?php echo "$row_cnt";


                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></h1>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updates
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


</body>