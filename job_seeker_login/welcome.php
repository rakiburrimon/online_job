<?php if (!isset($_SESSION)) session_start(); ?>

<html>
   
   <head>
      <title>Welcome </title>
   </head>
   <?php
   include "header.php"
   ?>
   <body>
   	<h1>Welcome</h1>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>