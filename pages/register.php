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
                			<label for="firstName">First Name *</label>
                			<input type="text" name="firstName" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="lastName">Last Name *</label>
                			<input type="text" name="lastName" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="lastName">Pen Name *</label>
                			<input type="text" name="penName" class="form-control">
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
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	include_once('../classes/usersDB.php');
	$usersDB = new usersDB();
	$usersDB ->connect();
	$usersDB -> register($username, $password, $email);

}
?>