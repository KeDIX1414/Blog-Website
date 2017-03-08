<?php
class followersDB {
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

	public function startFollowing($penname, $follower) {
	
	}

	public function getFollowers($penname) {
	
	}
	
	public function stopFollowing($penname, $follower) {
	
	}
	
	public function allowFollower($penname, $follower) {
	
	}
	
	public function removeFollower($penname, $follower) {
	
	}
}
?>