<?php 

include ('Model/connect_database.php');
require_once ('Model/hash_password.php');

class Registration
{
	public function processRegistration(){
		//Handles the registration process backend functionality
		$firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $nationalID = $_POST['national_id_number'];
        $password = $_POST['password'];
        $profilePicture = $_POST['profile_picture'];
        $salt = '#_?!_';
        $password = $salt.$password.$salt;
        $encpassword = md5($password);

        $sql = "INSERT INTO rider(firstname,lastname,nationalID,password,profilePicture) VALUES ('$first_name','$last_name','$national_id_number','$password','profile_picture','$encpassword')";

        if(mysqli_master_query($conn, $sql)){
        	echo "Registration Successful";
        }else{
        	echo "Error: " .$sql. "<br>" . mysqli_error($conn);
        }

        mysql_close($conn);
	}
}

?>