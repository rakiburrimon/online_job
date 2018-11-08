<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/passwordvalidation.css">
    <title>Registration</title>
  </head>

  <body>
    <div class="container col-md-4">

    <h3>Employer Registration</h3>
  <div class="row justify-content-center">
   <div class="col-md-12">
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
  <div class="form-group">
    <label for="comment">Industry Type</label>
    <textarea type="text" rows="1" class="form-control" id="i_type" name="i_type" placeholder="Enter Industry Type"></textarea>
    
  </div>
   <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Register Now</button>
</form>
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
  <script src="assets/js/passwordvalidation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>