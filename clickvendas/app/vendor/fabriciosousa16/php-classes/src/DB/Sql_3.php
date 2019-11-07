<?php 

namespace Click\DB;

class Sql_3 {

	const HOSTNAME = "ec2-54-233-241-96.sa-east-1.compute.amazonaws.com";
	const USERNAME = "root";
	const PASSWORD = "123.456";
	const DBNAME = "administrator";

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".Sql_3::DBNAME.";host=".Sql_3::HOSTNAME, 
			Sql_3::USERNAME,
			Sql_3::PASSWORD
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