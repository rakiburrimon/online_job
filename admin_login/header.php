
<head>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-left">
                            <li class="nav-item">
                        <a class="btn btn-light" href="index.php" role="button">Home</a>
                        <a class="btn btn-light" href="job_seeker_list.php" role="button">See Job Seekers</a>
                        <a class="btn btn-light" href="employer_list.php" role="button">See Employers</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Jobs
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="job_list.php">See All Jobs</a>
                            <a class="dropdown-item" href="interview_list.php">See All Interviews</a>
                        </div>
                        </li>
                        </ul>
                        
                        </div>
                        <div >
                        <ul class="nav navbar-nav navbar-right">
                    <?php if (empty($_SESSION['admin_name'])) { ?>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>                        
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                            
                            <?php echo ($_SESSION['admin_name']); ?>
                        
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                            
                        </div>
                        </li>
                    <?php } ?>
                        
                    
                </ul>
                    </div>
                </div>
            </nav>