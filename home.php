<!DOCTYPE html>
<html>
	<head>
		<title>Dear Diary</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</head>
	<?php
		session_start();
		if($_SESSION['user']) {

		} else {
			header("location:index.php");
		}
		$user = $_SESSION['user'];
	?>
	<body>
		<?php include "navbar.php" ?>
		<div class="container-fluid">
  			<h1>My First Bootstrap Page</h1>
  			<p>This is some text.</p> 
		</div>
	</body>
</html>