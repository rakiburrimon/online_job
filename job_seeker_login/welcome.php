<?php if (!isset($_SESSION)) session_start(); ?>

<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
   	<h1>Welcome</h1>
      <h1> <?php echo ($_SESSION['job_seeker_email']); ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>