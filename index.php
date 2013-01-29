<?php 
//must be called first to have access to any session data
session_start();
//import funcitons
require('functions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="stylin.css">
		<title>MyBands</title>
	</head>
	<body>
		<div id="wrapper" class="container">
			<header>
				<?php include('layout/header.php'); ?>
			</header>
			<nav>
				<?php include('layout/nav.php'); ?>
			</nav>
			<section role="main">
				<?php include('layout/main.php'); ?>
			</section>
			<footer>
				<?php include('layout/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>