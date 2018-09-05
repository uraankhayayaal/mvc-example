<?php

namespace components;

use PDO;
use PDOStatement;

/**
 * 
 */
class EModel
{
	private $tableName;
    private $connectionConfig;
    private $conn;

    public function __construct($tableName, $connectionConfig)
    {
        $this->tableName = $tableName;
        $this->connectionConfig = $connectionConfig;
    }

    public function connect()
    {
        $servername = "localhost";
		$username = "mymvc";
		$password = "mymvc";
		$dbname = "mymvc";

		try {
		    $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    // set the PDO error mode to exception
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully"; 
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    } 
    }

    public function queryAll()
    {
        $this->connect();
	    $query = $this->conn->prepare("SELECT * FROM $this->tableName");
	    $query->execute();
	    $result = [];
	    while($row = $query->fetch(PDO::FETCH_OBJ)) {
			/*its getting data in line.And its an object*/
	        $result[] = $row;
	    }
        $query->closeCursor();
	    return $result;
    }

    public function queryOne($id)
    {
        $this->connect();
		$query = $this->conn->prepare("SELECT * FROM $this->tableName WHERE id=?");
	    $query->execute(array($id));
	    $result = $query->fetch(PDO::FETCH_OBJ);
        $query->closeCursor();
	    return $result;
    }
}