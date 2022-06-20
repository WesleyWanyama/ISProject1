<?php

//Database class to perform CRUD operations

class Database
{
	private $conn;

	//Method used to connect to the database 
	public function connect_db(){
		$this->conn  = mysqli_connect('127.0.0.1','root','','is_project1');
		if(mysqli_connect_error()){
	die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
}
}
    //Construct to connect to the database after loading this file in other files
    function __construct(){
    	$this->connect_db();
    }
    
    //Method to sanitized the user submitted data 
    public function sanitize($var){
    	$return = mysqli_real_escape_string($this->conn, $var);
    	return $return;
    }
    //Method that will be called to insert data into the database
    public function create($first_name,$last_name,$national_id_number,$password,$profile_picture){
        //path to store the uploaded image
        $target = "images/". basename($_FILES['profile_picture']['name']);

        $image = $_FILES['$profile_picture']['name'];

    	$sql = "INSERT INTO rider (first_name,last_name,national_id_number,password,profile_picture) VALUES ('$first_name','$last_name','$national_id_number','$password','$target')";
    	$result = mysqli_query($this->conn,$sql);
    	if($result){
    		return true;x1
    	}else{

    		return false;
    	}
        //now lets move the uploaded image into the folder: images
      if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target)) {
            if (count($errors) ==0) {
                echo "<script> alert('profile picture successfully uploaded'); window.location='database.php' </script>";
          }
        }
      else {
        array_push($errors, "Invalid Inputs Please Try Again..");
        }
    }
}

//Object that will be used in other files
$database = new Database();
$database->connect_db();


?>