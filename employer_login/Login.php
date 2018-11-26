<?php

if (!isset($_SESSION)) {
    session_start();
}


    ?>


    <div class="container-fluid">
        <div class="container jumbotron">

            <h1 class="text-center">Employer Login Panel</h1>
            <form action="Login.php" method="POST" >
                <div class="form-group">
                    <label for="company_name">Name:</label>
                    <input type="text" class="form-control" name="company_name" id="company_name">
                </div>

                <div class="form-group">
                    <label for="employer_password">Password:</label>
                    <input type="password" name="employer_password" class="form-control" id="employer_password">
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
        $company_name = $_POST['company_name'];
        $employer_password = $_POST['employer_password'];
        require 'connection.php';

        $query = "SELECT * FROM employer WHERE company_name='" . $company_name . "' and employer_password='" . $employer_password . "'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['company_name'] = $company_name;
            {
                if ( password_verify( $_POST['employer_password'] = $employer_password ) ) {
                            $_SESSION['employer_id'] = $employer_id;
                    }
            }
            mysqli_close($conn);

            header('location:welcome.php');
        } else
            echo "user name and password not found";
    }

?>
