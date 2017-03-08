<html>
	<head>
		<title>Dear Diary</title>
		<title>Dear Diary</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include "navbar_notloggedin.php" ?>
		<h2>Login</h2>
		<a href="index.php">Click here to go back</a></br></br>
		<form action="index.php?page=checklogin" method="POST">
			Enter Username: <input type="text" name="username" required="required" /></br>
			Enter Password: <input type="password" name="password" required="required" /> </br>
			<input type="submit" value="login" />
		</form>
	</body>
</html>