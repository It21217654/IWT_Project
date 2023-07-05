<?php

class DB {
	private $con;
	private $host = "localhost";
	private $dbname = "properties";
	private $user = "root";
	private $password = "";

	public function __construct() {
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
		
		try {
			$this->con = new PDO($dsn, $this->user, $this->password);
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//echo "Connection Successful";
		}	catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}
	
	public function viewData() {
		$query = "SELECT pName, PID FROM properties";
		$stmt = $this->con->prepare($query);
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	
	public function searchData($name) {
		$query = "SELECT pName FROM properties WHERE pName LIKE :pName";
		$stmt = $this->con->prepare($query);
		$stmt->execute(["pName" => "%" . $name . "%"]);
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
}