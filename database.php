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
        //path to store the uploaded image
        $image = $_FILES['profile_picture']['name'];

        $target = "C:\xamp\htdocs\ISProject1\View" . $image;
        /*
        $target = "./View/". basename($_FILES['profile_picture']['name']);*/
        $tempname = $_FILES["profile_picture"]["tmp_name"];

    	$sql = "INSERT INTO rider (first_name,last_name,national_id_number,password,profile_picture) VALUES ('$first_name','$last_name','$national_id_number','$password','$image')";
    	$result = mysqli_query($this->conn,$sql);
    	if($result){
    		return true;
    	}else{

    		return false;
    	}
        //now lets move the uploaded image into the folder: images
        if(move_uploaded_file($tempname,$target)){
            echo "<h3>Image uploaded nice!!</h3>";
        }else{
            echo "<h3>Image upload failed</h3>";
        }
    }
    public function registerBoda($number_plate,$KRA_pin,$certificate_of_good_conduct,$make,$model,$weight,$county){
        //Storing the Certificate of good conduct
        $sql = "INSERT INTO 'registration_details' (number_plate,KRA_pin,certificate_of_good_conduct,make,model,weight,county) VALUES ('$number_plate','$KRA_pin','$certificate_of_good_conduct','$make','$model','$weight','$county')";
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