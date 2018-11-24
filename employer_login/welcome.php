<?php if (!isset($_SESSION)) session_start(); ?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo ($_SESSION['company_name']); ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>