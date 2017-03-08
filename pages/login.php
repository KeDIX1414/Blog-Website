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
		<h2>Login</h2>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<form action="index.php?page=checklogin" method="POST">
						<div class="form-group">
                			<label for="penname">Pen Name *</label>
                			<input type="text" name="penname" class="form-control">
            			</div>
            			<div class="form-group">
                			<label for="password">Password *</label>
                			<input type="password" name="password" class="form-control">
            			</div>
            			<button type="submit" class="btn btn-success">Login</button>
            			
					</form>
				</div>
				<div class="col-sm-4"></div>
			</div>
	</body>
</html>