<?php 

	class DbConnect {
		private $host = 'localhost';
		private $user = 'root';
		private $password = '';

	

		public function connect() {

			try {
				$conn = new PDO("mysql:host=".$this->host, $this->user, $this->password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "CREATE DATABASE MyEventsHall";
				$conn->exec($sql);
				echo "Database created successfully<br>";
				return $conn;
				
			} catch (PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
				
			}
		}
	}


 ?>