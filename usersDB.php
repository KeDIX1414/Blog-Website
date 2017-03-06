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
			//Print '<script>window.location.assign("register.php");</script>';
		}
	}

	public function checkLogin() {

	}
}
?>