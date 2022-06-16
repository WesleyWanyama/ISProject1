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
	//Method to sanitize the user submitted data to safeguard database from hackers
    public function sanitize($var){
    	//this strips data from input fields for security
    	$return = mysqli_real_escape_string($this->conn, $var);
    	return $return;
    }
    //This assigns returned values to variables after user data has been sanitized
    if(isset($_POST) & !empty(&_POST)){
    	$first_name = $database->sanitize($_POST['first_name']);
    	$last_name = $database->sanitize($_POST['last_name']);
    	$national_id_number = $database->sanitize($_POST['national_id_number']);
    	$password = $database->sanitize($_POST['password']);
    	$profile_picture = $_POST['profile_picture'];
    }
    //Method to insert the above data into the database
    public function create($first_name,$last_name,$national_id_number,$password,$profile_picture){
    	$sql = "INSERT INTO 'rider' (first_name,last_name,national_id_number,password,profile_picture) VALUES ('$first_name','$last_name', '$national_id_number', '$password', '$profile_picture')";
    	
    }
}

//Object that will be used in other files
database = new Database();
$database->connect_db();
?>