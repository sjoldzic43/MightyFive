<?php
//time to logout
	session_start();
	session_destroy();
	//go back to proper login page
	header("Location: adminlogin.php");
?>