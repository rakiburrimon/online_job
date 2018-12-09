<?php
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome<h1>
      <h1> <?php echo ($_SESSION['admin_name']); ?></h1>  
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>