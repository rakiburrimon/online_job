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


    <title>Post Job</title>
  </head>

  	<body>
    <div>


        <!-- Page Content  -->
        <div id="">
            <nav>
             <?php include "header.php"; ?>
            </nav>
     <div class="">


    <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-8  border border-dark">
        <h1>Add Job</h1>

    <form action="insert_job.php" method="POST">
      <div class="form-group">
    <label for="name">Job Title</label>
    <input type="text" class="form-control" name="job_title" placeholder="Job Title">
    
  </div>
  <div class="form-group">
    <label for="comment">Job Context</label>
    <textarea type="text" rows="5" class="form-control" name="job_context" placeholder="Job Context"></textarea>
    
  </div>
   <div class="form-group">
    <label for="comment">Job Responsibilities</label>
    <textarea type="text" rows="9" class="form-control" name="job_responsibilities" placeholder="Job Responsibilities"></textarea>
    
  </div>
   <div class="form-group">
    <label for="comment">Educational Requirements</label>
    <textarea type="text" rows="7" class="form-control" name="educational_requirements" placeholder="Educational Requirements"></textarea>
    
  </div>
  <div class="form-group">
    <label for="comment">Job Experiment Required</label>
    <textarea type="text" rows="7" class="form-control" name="job_experience_required" placeholder="Job Experiment Required"></textarea>
    
  </div>
  <div class="form-group">
    <label for="comment">Job Location</label>
    <textarea type="text" rows="3" class="form-control" name="job_location" placeholder="Job Location"></textarea>
  </div>
  <div class="form-group">
    <label for="comment">Job Salary</label>
    <input type="text" rows="7" class="form-control" name="job_salary" placeholder="Job Salary">
    
  </div>
  <div class="form-group">
    <label for="date">Application Deadline</label>
    <input type="date" rows="2" class="form-control" name="application_deadline" placeholder="Application Deadline">
    
  </div>
    <div class="form-group">
    <label for="comment">Company Name</label>
    <select class="form-control rqun" style="width:100%" title="employer_id" required="" name="employer_id">
                        <option required="" value="0">Select Company</option>
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
  
   <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Post the Job</button>
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
    <footer>
   <?php include "footer.php"; ?>
  </footer>
  </body>
</html>
 