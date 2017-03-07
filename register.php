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
		<h2> Registration Page</h2>
		<a href="index.php">Click here to go back</a></br></br>
		<form action="register.php" method="POST">
			Enter Email Address: <input type="text" name="email" required="required" /></br>
			Enter Username: <input type="text" name="username" required="required" /></br>
			Enter Password: <input type="text" name="password" required="required" /> </br>
			<input type="submit" value="Register" />
		</form>
	</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	include_once('usersDB.php');
	$usersDB = new usersDB();
	$usersDB ->connect();
	$usersDB -> register($username, $password, $email);

}
?>