<?php
require 'check.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/passwordvalidation.css">
    
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style5.css">


    <title>Post Job</title>
  </head>

  <body>
      
    <div class="container col-md-5">

    <h1>Post job</h1>
    <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">

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
  
   <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Post the Job</button>
</form>
 
</div>
  </div>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
