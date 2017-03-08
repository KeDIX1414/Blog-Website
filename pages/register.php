<html>
	<head>
		<title>Dear Diary</title>
		<title>Dear Diary</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="public/css/base.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include "navbar_notloggedin.php" ?>
		<h1>Register Today</h1>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<form action="index.php?page=register" method="POST">
						<div class="form-group">
                			<label for="firstname">First Name *</label>
                			<input type="text" name="firstname" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="lastname">Last Name *</label>
                			<input type="text" name="lastname" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="lastname">Pen Name *</label>
                			<input type="text" name="penname" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="email">Email *</label>
                			<input type="email" name="email" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="password">Password *</label>
                			<input type="password" name="password" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="passwordConfirmation">Confirm Password *</label>
                			<input type="password" name="passwordConfirmation" class="form-control">
                			<p class="help-block">Re-enter the above password.</p>
            			</div>
            			<div class="form-group">
                			<label for="birthday">Birthday *</label>
                			<input type="date" name="birthday" class="form-control">
            			</div>
            			<button type="submit" class="btn btn-success">Sign Up</button>
            			
					</form>
				</div>
				<div class="col-sm-2"></div>
			</div>				
	</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
	$penname = mysql_real_escape_string($_POST['penname']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$birthday= mysql_real_escape_string($_POST['birthday']);
	include_once('classes/usersDB.php');
	$usersDB = new usersDB();
	$usersDB ->connect();
	$usersDB -> register($penname, $password, $email, $firstname, $lastname, $birthday);

}
?>