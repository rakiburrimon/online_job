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
    <link rel="stylesheet" href="../assets/css/box.css">
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
<br><br><br>
    <div class="counter bg-white">
    <div class="container">
      <br>
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_id FROM job ORDER BY job_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Jobs</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div >
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT employer_id FROM employer ORDER BY employer_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Employers</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div >
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_seeker_id FROM job_seeker ORDER BY job_seeker_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Job Seekers</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    <div class="counter bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_id FROM job where job_application_deadline > CURDATE() ORDER BY job_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Active Jobs</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT employer_id FROM employer where employer_status='active' ORDER BY employer_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Active Employers</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_seeker_id FROM job_seeker where job_seeker_status='active' ORDER BY job_seeker_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Active Job Seekers</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    <div class="counter bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_id FROM job where job_type='Special' ORDER BY job_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Special Jobs</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT employer_id FROM employer where employer_type='Special' ORDER BY employer_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Special Employers</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_seeker_id FROM job_seeker where job_seeker_type='Special' ORDER BY job_seeker_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Special Job Seekers</p>
                </div>
            </div>
          </div>
        </div>
      </div>
<br><br><br><br><br>
</body>
<div class= "footer">

</div>
<footer>
   <?php include "footer.php"; ?>
  </footer>