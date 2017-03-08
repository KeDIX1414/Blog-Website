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

	public function register($penname, $password, $email, $firstname, $lastname, $birthday) {
		$bool = true;
		mysql_select_db("blogDB") or die("Cannot connect to database"); 
		$query = mysql_query("Select * from users");
		while($row = mysql_fetch_array($query)) {
			$table_users = $row['penname'];
			if ($penname == $table_users) {
				$bool = false;
				Print '<script>alert("Pen Name has been taken!");</script>';
				Print '<script>window.location.assign("index.php?page=register");</script>';
			}
		}

		if($bool) {
			mysql_query("INSERT INTO users (firstname, lastname, penname, password, email, birthday) 
			VALUES ('$firstname', '$lastname', '$penname', '$password', '$email', '$birthday')");
			Print '<script>alert("Successfully Registered!");</script>';
			$_SESSION['user'] = $penname;
			Print '<script>window.location.assign("index.php?page=home");</script>';
		}
	}

	public function checkLogin($penname, $password) {
		mysql_select_db("blogDB") or die("Cannot connect to database");
		$query = mysql_query("SELECT * from users WHERE penname='$penname'");
		$exists = mysql_num_rows($query);
		$table_users = "";
		$table_passwords = "";
		if ($exists > 0) {
			while ($row = mysql_fetch_assoc($query)) {
				$table_users = $row['penname'];
				$table_password = $row['password'];

			}

			if (($penname == $table_users) && ($password == $table_password)) {
				if ($password == $table_password) {
					$_SESSION['user'] = $penname;
					Print '<script>window.location.assign("index.php?page=home");</script>';
				}
			} else {
				Print '<script>alert("Incorrect Password!");</script>';
				Print '<script>window.location.assign("index.php?page=login");</script>';
			}
		} else {
			Print '<script>alert("Incorrect Username!");</script>';
			Print '<script>window.location.assign("index.php?page=login");</script>';
		}
	}
}
?>