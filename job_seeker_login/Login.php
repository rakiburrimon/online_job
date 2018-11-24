<?php

if (!isset($_SESSION)) {
    session_start();
}


    ?>


    <div class="container-fluid">
        <div class="container jumbotron">

            <h1 class="text-center">Job Seeker Login Panel</h1>
            <form action="Login.php" method="POST" >
                <div class="form-group">
                    <label for="job_seeker_email">Email Address:</label>
                    <input type="text" class="form-control" name="job_seeker_email" id="job_seeker_email">
                </div>

                <div class="form-group">
                    <label for="job_seeker_password">Password:</label>
                    <input type="password" name="job_seeker_password" class="form-control" id="job_seeker_password">
                </div>               

                <button type="submit" class="btn btn-success" name="submit">Submit</button>

            </form>
        </div>
    </div>


    <br>
    <br>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $job_seeker_email = $_POST['job_seeker_email'];
        $job_seeker_password = $_POST['job_seeker_password'];
        require 'connection.php';

        $query = "SELECT * FROM job_seeker WHERE job_seeker_email='" . $job_seeker_email . "' and job_seeker_password='" . $job_seeker_password . "'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
        	$_SESSION['job_seeker_id'] = $job_seeker_id;
            $_SESSION['job_seeker_email'] = $job_seeker_email;
            mysqli_close($conn);

            header('location:welcome.php');
        } else
            echo "user name and password not found";
    }

?>
