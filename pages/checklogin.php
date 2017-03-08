<?php
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	include_once('classes/usersDB.php');
	$usersDB = new usersDB();
	$usersDB ->connect();
	$usersDB -> checkLogin($username, $password);
?>