<?php

if (!isset($_SESSION)) {
    session_start();
}


    ?>


    <div class="container-fluid">
        <div class="container jumbotron">

            <h1 class="text-center">Admin Login Panel</h1>
            <form action="Login.php" method="POST" >
                <div class="form-group">
                    <label for="admin_name">Name:</label>
                    <input type="text" class="form-control" name="admin_name" id="admin_name">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password">
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
        $admin_name = $_POST['admin_name'];
        $password = $_POST['password'];
        require 'connection.php';

        $query = "SELECT * FROM admin WHERE admin_name='" . $admin_name . "' and password='" . $password . "'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['admin_email'] = $admin_email;
            $_SESSION['admin_name'] = $admin_name;
            mysqli_close($conn);

            header('location:welcome.php');
        } else
            echo "user name and password not found";
    }

?>
