<?php 

session_start();
session_destroy();

header("location: ../includes/login.php");

?>