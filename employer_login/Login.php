<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$company_name = $employer_password = "";
$company_name_err = $employer_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["company_name"]))){
        $company_name_err = "Please enter username.";
    } else{
        $company_name = trim($_POST["company_name"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["employer_password"]))){
        $employer_password_err = "Please enter your password.";
    } else{
        $employer_password = trim($_POST["employer_password"]);
    }
    
    // Validate credentials
    if(empty($company_name_err) && empty($employer_password_err)){
        // Prepare a select statement
        $sql = "SELECT employer_id, company_name, employer_password FROM employer WHERE company_name = $company_name";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_company_name);
            
            // Set parameters
            $param_company_name = $company_name;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($employer_id, $company_name, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($employer_password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["employer_id"] = $employer_id;
                            $_SESSION["company_name"] = $company_name;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $employer_password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $company_name_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($company_name_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="company_name" class="form-control" value="<?php echo $company_name; ?>">
                <span class="help-block"><?php echo $company_name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($employer_password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="employer_password" class="form-control">
                <span class="help-block"><?php echo $employer_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>