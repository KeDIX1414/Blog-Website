<html>
	<head>
		<title>Dear Diary</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
			
			$page = isset($_GET['page']) ? $_GET['page'] : 'first';
    		$path = getcwd().'/pages/'.$page.'.php';
    		if (file_exists($path)) {
        		include $path;
    		} 
    	?>
	</body>
</html>

