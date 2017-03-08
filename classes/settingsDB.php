<?php
class settingsDB {
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

	public function editSettings($penname) {
	
	}

	public function getSettings($penname) {
	
	}
}
?>