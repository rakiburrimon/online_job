
<head>
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../assets/css/style4.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../assets/img/caveman.png" width="5%" height="3%" alt="User Icon" />
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-left">
                            <li class="nav-item">
                        <a class="btn btn-light" href="index.php" role="button">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Profile
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="job_seeker_account_details.php">See Profile</a>
                            <a class="dropdown-item" href="job_seeker_account_info.php">Update Profile</a>
                            <a class="dropdown-item" href="cv_job_seeker.php">See Profile's Resume</a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">See Job Updates
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="applied_job.php">See ALL Applied Job</a>
                            <a class="dropdown-item" href="interview_list.php">Selected for Interview</a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Add Profile Features
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="add_skill.php">Add Skill</a>
                            <a class="dropdown-item" href="add_experience.php">Add Experience</a>
                            <a class="dropdown-item" href="add_qualification.php">Add Qualification</a>
                            <a class="dropdown-item" href="add_reference.php">Add Reference</a>
                        </div>
                        </li>
                        </ul>
                        </div>
                        <?php
                        if($_SESSION["message"]==null){
                            ?>
                            <p><?php echo $_SESSION['message']; ?></p>
                            <?php 
                        }else{ ?>
                        <div class="alert alert-success alert-dismissable" id="flash-msg">
                        <button aria-hidden="true" data-dismiss="alert" type="submit" name="off" method="off" value="off" class="close"><h6><?php echo $_SESSION['message']; echo "   "; ?> X </h6></button>
                        <?php 
                        if(isset($_POST['submit'])) { 
                        unset($_SESSION["message"]);
                         }
                         $_SESSION['message'] = '';
                         ?>
                         </div>
                         <?php 
                        }
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                    <?php if (empty($_SESSION['job_seeker_email'])) { ?>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>                        
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                            <?php
                                    include 'connection.php';
                                    $q = "SELECT * FROM job_seeker WHERE job_seeker_id = '".$_SESSION['job_seeker_id']."' ";
                                    $query= mysqli_query($conn,$q);
                                    $res= mysqli_fetch_assoc($query);
                                ?>
                         <img src="job_seeker_image/<?php echo $res['image']; ?>"  width="20px" class="rounded" alt="User Icon" aria-expanded="true">
                            <?php echo $res['job_seeker_name']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="change_password.php">Change Password</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                            
                        </ul>
                        </li>
                    <?php } ?>
                        
                    
                </ul>
                </div>
            </nav>
            </body>