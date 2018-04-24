<?php
error_reporting(0);
session_start();
 //REV UP THOSE SESSIONS
if (!isset($_SESSION['user_name'])) //cant access without being logged in
{
    print '<script>window.location.assign("employeelogin.php");</script>';
		die;
}?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Authentication Prototype</title>
  			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="jumbotron" style = "background-color: #b0c4de; margin-bottom: 0;">
			<div class="container text-center" style = "background-color: #b0c4de;">
				<h1>Employee Clocking Services</h1>
				<p>Hard work pays off</p>
			</div>
		</div>

		<nav class="navbar navbar-inverse" style = "background-color: white; color: black; margin-bottom: 0;">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class = "navbar-brand" href="#"><img src="../images/blueglobe.png" alt="Lo GOL" style="width:50px;height:30px;"></a>
			</div>

				<ul class="nav navbar-nav navbar-inverse">
					<li><a href="employeeindex.php" style = "background-color: white; color: black;"><span class="glyphicon glyphicon-user"></span> My account</a></li>
					</ul>

				<ul class="nav navbar-nav navbar-right">
				    <li><a href="employeelogout.php" style = "background-color: white; color: black;"><span class="glyphicon glyphicon-off" style= "color: red;"></span> Logout</a></li>
				</div>
			</div>
		</nav>
	</body>
</html>
