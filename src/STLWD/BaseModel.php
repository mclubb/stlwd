<?php

class STLWD_BaseModel 
{
	protected $conn;

	function __construct()
	{
		$this->conn = mysqli_connect('localhost', 'root', '', 'stlwd');	

		if( !$this->conn )
		{
			throw Exception('Unable to connect to server');
		}
	}

	function all() {
		$sql = "SELECT * FROM " . $this->tableName;
		$result = mysqli_query($this->conn, $sql);

		$returnArray = array();
		if( $result )
		{
			while( $object = mysqli_fetch_object($result))
			{
				$returnArray[] = $object;	
			}
		} else {
			echo "Mysql_Error: " . mysqli_error($this->conn);
		}

		return $returnArray;
	}

	function get($id) 
	{
		$sql = "SELECT * FROM " . $this->tableName . " WHERE id='" . $id . "'";
		$result = mysqli_query($this->conn, $sql);

		if( $result ) 
		{
			return mysqli_fetch_object($result);	
		} else {
			echo "Mysqli_Error: " . mysqli_query($this->conn);
			return null;
		}
	}
}
