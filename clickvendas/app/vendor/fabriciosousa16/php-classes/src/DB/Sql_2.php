<?php 

namespace Click\DB;

class Sql_2 {

	const HOSTNAME = "ec2-18-228-195-21.sa-east-1.compute.amazonaws.com";
	const USERNAME = "root";
	const PASSWORD = "123.456";
	const DBNAME = "maitenance";

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".Sql_2::DBNAME.";host=".Sql_2::HOSTNAME, 
			Sql_2::USERNAME,
			Sql_2::PASSWORD
		);

	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($statement, $key, $value);

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}

 ?>