<?php if (!isset($_SESSION)) session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	
    <!-- Required meta tags -->
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


    <title>Candidate Confirmation</title>
  </head>

  <body>
  	<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <?php include "sidebar.php"; ?>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <?php include "header.php"; ?>
     <div class="">

    <h1>Create Interview</h1>
    <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">
<?php 
      include 'connection.php';
      $job_id= $_POST['job_id'];
      $a;

        $q = "SELECT * FROM interview Where job_id = $job_id";
                    
        $query = mysqli_query($conn,$q);

        while ($res= mysqli_fetch_array($query)) {
                    
    ?>
    <form action="insertjobseekinginterview.php" method="POST">
   
    <input type="hidden" id="interview_id" name="interview_id" value="<?php echo $res['interview_id']; ?>">
  
  <?php $a=$res['interview_id']; ?>
  
  <?php 
      include 'connection.php';
      $job_seeker_id= $_POST['job_seeker_id'];

        $q = "SELECT * FROM job_seeker Where job_seeker_id = $job_seeker_id";
                    
        $query = mysqli_query($conn,$q);

        while ($res= mysqli_fetch_array($query)) {
                    
    ?>
    <input type="hidden" id="job_seeker_id" name="job_seeker_id" value="<?php echo $res['job_seeker_id']; ?>">
                <div class="form-group">
                  <p class="text-primary">Full Name: </p>
                  <td><?php echo $res['job_seeker_name']; ?> </td>
                  
                </div>                
                <div class="form-group">
                  <h4>Email: </h4>
                  <p><?php echo $res['job_seeker_email']; ?> </p>
                </div>
                <div class="form-group">
                  <p class="text-primary">Contact: </p>
                  <td><?php echo $res['job_seeker_contact']; ?> </td>
                </div>
                <p class="text-primary">Address: </p>
                  <td><?php echo $res['job_seeker_address']; ?> </td>
                <div class="form-group">
                  <p class="text-primary">Career Objective: </p>
                  <td><?php echo $res['job_seeker_career_objective']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Job Profile: </p>
                  <td><?php echo $res['job_seeker_job_profile']; ?> </td>
                </div>
                <p class="text-primary">Gender: </p>
                  <td><?php echo $res['job_seeker_gender']; ?> </td>
                <?php } ?>
            <div class="panel-heading">
          <h3>Experience</h3>
          </div>
          <div class="panel-body">
            <div style="max-width: 400px; margin: 0 auto;">

                <?php 
                    include 'connection.php';
                    $job_seeker_id= $_POST['job_seeker_id'];

                  $q = "SELECT * FROM experience Where job_seeker_id = $job_seeker_id";
                    
                    $query = mysqli_query($conn,$q);

                    while ($res= mysqli_fetch_array($query)) {
                    
                ?>

                <div class="form-group">
                  <p class="text-primary">Designation: </p>
                  <td><?php echo $res['designation']; ?> </td>
                </div>                
                <div class="form-group">
                  <p class="text-primary">Organization: </p>
                  <td><?php echo $res['experience_organization']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Duration: </p>
                  <td><?php echo $res['experience_duration']; ?> </td>
                </div>
                <?php } ?>
            </div>
          </div>
          <div class="panel-heading">
            <h3>Skills</h3>
          </div>
          <div class="panel-body">
            <div style="max-width: 400px; margin: 0 auto;">

                <?php 
                    include 'connection.php';
                    $job_seeker_id= $_POST['job_seeker_id'];

                    $q = "SELECT * FROM skill Where job_seeker_id = $job_seeker_id";
                    
                    $query = mysqli_query($conn,$q);

                    while ($res= mysqli_fetch_array($query)) {
                    
                ?>

                <div class="form-group">
                  <p class="text-primary">Skill Name: </p>
                  <td><?php echo $res['skill_name']; ?> </td>
                </div>                
                <div class="form-group">
                  <p class="text-primary">Skill Description: </p>
                  <td><?php echo $res['skill_description']; ?> </td>
                </div>
                <?php } ?>
            </div>
          </div>
          <div class="panel-heading">
            <h3>Educational Qualification</h3>
          </div>
          <div class="panel-body">
            <div style="max-width: 400px; margin: 0 auto;">

                <?php 
                    include 'connection.php';
                    $job_seeker_id= $_POST['job_seeker_id'];

                    $q = "SELECT * FROM qualification Where job_seeker_id = $job_seeker_id";
                    
                    $query = mysqli_query($conn,$q);

                    while ($res= mysqli_fetch_array($query)) {
                    
                ?>

                <div class="form-group">
                  <p class="text-primary">Qualification: </p>
                  <td><?php echo $res['qualification_name']; ?> </td>
                </div>                
                <div class="form-group">
                  <p class="text-primary">Result: </p>
                  <td><?php echo $res['qualification_result']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Institution: </p>
                  <td><?php echo $res['qualification_institution']; ?> </td>
                </div>
                <?php } ?>
            </div>
          </div>
          <div class="panel-heading">
            <h3>Reference</h3>
          </div>
          <div class="panel-body">
            <div style="max-width: 400px; margin: 0 auto;">

                <?php 
                    include 'connection.php';
                    $job_seeker_id= $_POST['job_seeker_id'];

                    $q = "SELECT * FROM reference Where job_seeker_id = $job_seeker_id";
                    
                    $query = mysqli_query($conn,$q);

                    while ($res= mysqli_fetch_array($query)) {
                    
                ?>

                <div class="form-group">
                  <p class="text-primary">Full Name: </p>
                  <td><?php echo $res['name']; ?> </td>
                </div>                
                <div class="form-group">
                  <p class="text-primary">Designation: </p>
                  <td><?php echo $res['designation']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Company: </p>
                  <td><?php echo $res['company']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Address: </p>
                  <td><?php echo $res['address']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Email: </p>
                  <td><?php echo $res['email']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Phone: </p>
                  <td><?php echo $res['phone']; ?> </td>
                </div>
                <div class="form-group">
                  <p class="text-primary">Reference Type: </p>
                  <td><?php echo $res['reference_type']; ?> </td>
                </div>
              <?php } ?>
            </div>
          </div>
      
          <?php 
          include 'connection.php';
          $job_seeker_id= $_POST['job_seeker_id'];
          $q = "SELECT COUNT(*) AS co FROM job_seeking_interview Where job_seeker_id = ".$_POST['job_seeker_id']." AND interview_id = '$a' ";
                    
          $query = mysqli_query($conn,$q);

          $res= mysqli_fetch_array($query); 
            if($res['co']){
                    
      ?>
      
      <div>
        <div  class="sectionContent">
          <input class="btn btn-danger btn-lg btn-block" type="Disabled" value="Already Select">
        </div>
      </div>
        <?php
      }else{
      ?>
      <div>
        <div  class="sectionContent">
          <input class="btn btn-success btn-sm " type="Submit" value="Select">
        </div>
      </div>
      <?php
      }
    }
      ?>
</form>
 
</div>
  </div>
</div>
</div>
        </div>
    </div>

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
</html>
