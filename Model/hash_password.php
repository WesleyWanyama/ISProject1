<?php

//Connect to the database
$servername = 'localhost:8080';
$serveruser = 'root';
$serverpassword = '';
$database = 'is_project1';

$conn = mysqli_connect($servername,$serveruser,$serverpassword,$database);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Connected Successfully";
}

function hashPassword($password){
		$encpassword = md5('!_?@'.$password);
		return $encpassword;
	}
	function insertData($sql){
		$conn = connect();
		if($conn!=false){
			//Insert 
			if(mysqli_query($conn,$sql)){
				mysqli_close($conn);
				return true;
			}else{
				mysqli_close($conn);
				return false;
			}
		}else{
			return false;
		}
	}

	function getData($sql){
		
		$conn = connect();
		$multiple_rows = [];
		if($conn!=false){
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				$multiple_rows[] = $row;// array_push($multiple_rows,$row);
			}
			mysqli_close($conn);

		}
		return $multiple_rows;
		
	}

?>