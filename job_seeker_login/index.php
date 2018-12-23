<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
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
    <link href="../assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/box.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
   </head>
  <body>
  <!-- Navbar -->
  <nav>
   <?php include "header.php"; ?>
  </nav>
  <!-- End Navbar -->

  <div>
    
    <div class="container text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1 class="title">
            Search Job
          </h1>
          <br/>
          <div class="row">
          <div class="col-12">
            <div class="input-group-sm mb-3">
              <form action="job_search.php" method="POST">
                <div class="input-group mb-3">
                  <input type="text" name="query" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Search</button>  
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
    <div class="counter bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
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

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
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

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT online_application_id FROM online_application where job_seeker_id='".$_SESSION['job_seeker_id']."' ORDER BY online_application_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Applied Jobs</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count"><?php 
                            include 'connection.php';


                            if ($result = mysqli_query($conn, "SELECT job_seeking_interview_id FROM job_seeking_interview where job_seeker_id='".$_SESSION['job_seeker_id']."' ORDER BY job_seeking_interview_id")) {

                            $row_cnt = mysqli_num_rows($result);
                              echo "$row_cnt";
                             mysqli_free_result($result);
                            }

                            mysqli_close($conn); ?></p>
                    <p class="customer-p">Selected Interview</p>
                </div>
            </div>
        </div>
    </div>
</div>

  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
   <footer>
   <?php include "footer.php"; ?>
  </footer>
</html>