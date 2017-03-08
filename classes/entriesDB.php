<?php
class entriesDB {
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

	public function addEntry($penname, $title, $date, $time) {
	
	}

	public function deleteEntry($penname, $title) {
	
	}
	
	public function getEntry($penname, $title) {
	
	}
	
	public function editEntry($penname, $title, $date, $time) {
	
	}
	
	public function getAllEntries($penname) {
	
	}
}
?>