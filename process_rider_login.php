<?php 
 
require_once('database_login.php'); 


	$nationalid = $_POST['national_id_number'];
	$pass = $_POST['password'];
	$encpassword = md5($pass);

	$sql = "SELECT * FROM rider where national_ID_number='$nationalid' AND password='$encpassword'";
	$user_details = getData($sql);
	if(sizeof($user_details)>0){
		session_start();
		$_SESSION['user_details'] = $user_details[0];
		//Log in time is stored in a session variable
		$_SESSION["loggedin_time"] = time();
		header("Location: rider_dashboard.php");
	}else{
		$_SESSION['status'] = 'Invalid ID or Password';
		header('Location: rider_login.php'); 
	}


?>