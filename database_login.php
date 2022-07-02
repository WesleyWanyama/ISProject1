<?php
require_once('database_login.php');

//Connect to the database
$servername = '127.0.0.1';
$serveruser = 'root';
$serverpassword = '';
$database = 'is_project1';

$conn = mysqli_connect($servername,$serveruser,$serverpassword,$database);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";
function hashPassword($password){
		$encpassword = md5('!_?@'.$password);
		return $encpassword;
	}

?> 