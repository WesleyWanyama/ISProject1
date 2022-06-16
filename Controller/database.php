<?php

//Database class to perform CRUD operations
class Database
{
	private $conn;

	//Method used to connect to the database 
	public function connect_db(){
		$this->conn  = mysqli_connect('localhost:8080','root','','is_project1');
		if(mysqli_connect_error)){
	die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
}
}
	}
}

//Object that will be used in other files
database = new Database();
$database->connect_db();
?>