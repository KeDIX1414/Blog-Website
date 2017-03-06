<?php
class usersDB {
	protected static $connection;

	public function connect() {
		if (!isset(self::$connection)) {
			$config = parse_ini_file('config.ini');
			self::$connection = mysql_connect('localhost', $config['username'], $config['password']);
			if (!self::$connection) {
				return false;
			} else {
				return self::$connection;
			}
		}
	}

	public function register($username, $password, $email) {
		$bool = true;
		mysql_select_db("blogDB") or die("Cannot connect to database"); 
		$query = mysql_query("Select * from users");
		while($row = mysql_fetch_array($query)) {
			$table_users = $row['username'];
			if ($username == $table_users) {
				$bool = false;
				Print '<script>alert("Username has been taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}

		if($bool) {
			mysql_query("INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')");
			Print '<script>alert("Successfully Registered!");</script>';
			Print '<script>window.location.assign("home.php");</script>';
		}
	}

	public function checkLogin($username, $password) {
		mysql_select_db("blogDB") or die("Cannot connect to database");
		$query = mysql_query("SELECT * from users WHERE username='$username'");
		$exists = mysql_num_rows($query);
		$table_users = "";
		$table_passwords = "";
		if ($exists > 0) {
			while ($row = mysql_fetch_assoc($query)) {
				$table_users = $row['username'];
				$table_password = $row['password'];

			}

			if (($username == $table_users) && ($password == $table_password)) {
				if ($password == $table_password) {
					$_SESSION['user'] = $username;
					header("location: home.php");
				}
			} else {
				Print '<script>alert("Incorrect Password!");</script>';
				Print '<script>window.location.assign("login.php");</script>';
			}
		} else {
			Print '<script>alert("Incorrect Username!");</script>';
			Print '<script>window.location.assign("login.php");</script>';
		}
	}
}
?>