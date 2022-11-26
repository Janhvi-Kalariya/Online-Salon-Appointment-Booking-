<?php
session_start();

if(!isset($_SESSION['username']))
	{
		//echo "<script>window.location = 'login.php';</script>";
		header("location:includes/login.php");
	}

?>