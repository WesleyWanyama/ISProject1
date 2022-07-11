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
    public function registerRider($first_name,$last_name,$national_id_number,$password,$profile_picture){
    	$sql = "INSERT INTO rider (first_name,last_name,national_id_number,password,profile_picture) VALUES ('$first_name','$last_name','$national_id_number','$password','$profile_picture')";
    	$result = mysqli_query($this->conn,$sql);
    	if($result){
    		return true;
    	}else{

    		return false;
    	}
    }
    //Method that will be called to insert the boda details in the database
    public function registerBoda($rider_ID,$number_plate,$national_ID_number,$KRA_pin,$certificate_of_good_conduct,$make,$model,$weight,$county){
        $sql = "INSERT INTO registration_details (rider_ID,number_plate,national_ID_number,KRA_pin,certificate_of_good_conduct,make,model,weight,county) VALUES ('$rider_ID','$number_plate','$national_ID_number','$KRA_pin','$certificate_of_good_conduct','$make','$model','$weight','$county')";
        $result = mysqli_query($this->conn,$sql);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
 }
//Object that will be used in other files
$database = new Database();
$database->connect_db();


?>