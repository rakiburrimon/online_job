<?php
session_start();
if(!isset($_SESSION["job_seeker_id"])){
	header("Location:Login.php");
}
?>