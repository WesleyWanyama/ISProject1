<?php
$servername = '127.0.0.1';
$serveruser = 'root';
$serverpassword = '';
$database = 'is_project1';

$conn = mysqli_connect($servername,$serveruser,$serverpassword,$database);
if(!$conn){
	return false;
}
else{
	return $conn;
}

?>