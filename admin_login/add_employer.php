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
    <link rel="stylesheet" href="../assets/css/passwordvalidation.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/passwordvalidation.css">
    <link rel="stylesheet" href="../assets/css/style4.css">
    
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
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
        <h1>Add Employer</h1>

    <form action="insert_employer.php" method="POST">

      <div class="form-group">
    <label for="name">Company Name</label>
    <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Enter Company Name">
    
  </div>
  <div class="form-group">
    <label for="name">Contact Person's Name</label>
    <input type="text" class="form-control" id="c_person_name" name="c_person_name" placeholder="Enter Contact Person Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Person's Email address</label>
    <input type="email" class="form-control" id="c_person_email" name="c_person_email" aria-describedby="emailHelp" placeholder="Enter Contact Person Email">
    
  </div>
   <div class="form-group">
    <label for="phone">Employer Phone Number</label>
    <input type="text" class="form-control" id="e_phone" name="e_phone" placeholder="Employer Phone Number">
    
  </div>
  <div class="form-group">
    <label for="comment">Company Description</label>
    <textarea type="text" rows="5" class="form-control" id="c_description" name="c_description" placeholder="Enter Company Description"></textarea>
    
  </div>

  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 8 or more characters" required>
  </div>
  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
  <div class="form-group">
    <label for="password">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
  </div>
  <div class="form-group">
    <label for="comment">Business Description</label>
    <textarea type="text" rows="5" class="form-control" id="b_description" name="b_description" placeholder="Enter Business Description"></textarea>
    
  </div>
  <div class="form-group">
    <label for="comment">Company Location</label>
    <textarea type="text" rows="5" class="form-control" id="c_location" name="c_location" placeholder="Enter Company Location"></textarea>
    
  </div>
  <label for="comment">Industry Type</label>
  <div class="col-md-12 col-lg-12">
            <div class="form-check">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" name="i_type" value="Agro based Industry" >Agro based Industry
              </label>
            </div>

            <div class="form-check">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" name="i_type" value="Archi./Engg./Construction" >Archi./Engg./Construction
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio3">
              <input type="radio" class="form-check-input" name="i_type" value="Automobile/Industrial Machine" >Automobile/Industrial Machine
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio4">
              <input type="radio" class="form-check-input" name="i_type" value="Bank/Non-Bank Fin. Institution" >Bank/Non-Bank Fin. Institution
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio5">
              <input type="radio" class="form-check-input" name="i_type" value="Energy/Power/Fuel">Energy/Power/Fuel
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio6">
              <input type="radio" class="form-check-input" name="i_type" value="Education">Education
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio7">
              <input type="radio" class="form-check-input" name="i_type" value="Garments/Textile">Garments/Textile
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio8">
              <input type="radio" class="form-check-input" name="i_type" value="Pharmaceuticals">Pharmaceuticals
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio9">
              <input type="radio" class="form-check-input" name="i_type" value="Hospital/ Diagnostic Center">Hospital/ Diagnostic Center
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio10">
              <input type="radio" class="form-check-input" name="i_type" value="Information Technology (IT)">Information Technology (IT)
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio11">
              <input type="radio" class="form-check-input" name="i_type" value="Media / Advertising/ Event Mgt.">Media / Advertising/ Event Mgt.
              </label>
            </div>

              <div class="form-check">
              <label class="form-check-label" for="radio12">
              <input type="radio" class="form-check-input" name="i_type" value="Real Estate/Development">Real Estate/Development
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio13">
              <input type="radio" class="form-check-input" name="i_type" value="Food/Beverage Industry">Food/Beverage Industry
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio14">
              <input type="radio" class="form-check-input" name="i_type" value="Security Service">Security Service
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label" for="radio15">
              <input type="radio" class="form-check-input" name="i_type" value="Others">Others
              </label>
            </div>
        </div>
   <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Register Now</button>
</form>
 
</div>
  </div>
</div>
</div>
</div>
</div>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  -
}
</script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="../assets/js/passwordvalidation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
