<?php
	session_start();
	$penname = mysql_real_escape_string($_POST['penname']);
	$password = mysql_real_escape_string($_POST['password']);
	include_once('classes/usersDB.php');
	$usersDB = new usersDB();
	$usersDB ->connect();
	$usersDB -> checkLogin($penname, $password);
?>