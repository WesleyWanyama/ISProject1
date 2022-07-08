<?php
 
require_once('database_login.php'); 


	$nationalid = $_POST['national_id_number'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM rider where national_id_number='$nationalid' AND password='$pass'";
	$user_details = getData($sql);
	if(sizeof($user_details)>0){
		session_start();
		$_SESSION['user_details'] = $user_details[0];
		header("Location: rider_dashboard.php");
	}else{
		$_SESSION['status'] = 'Invalid ID or Password';
		header('Location: rider_login.php');
	}


?>